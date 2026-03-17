<?php

namespace App\Services;

use App\Models\Album;
use App\Models\Image;
use App\Models\ImageBatchOperation;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImageBatchOperationService
{
    private const PREVIEW_LIMIT = 20;

    public function normalizeKeys(array $keys): array
    {
        $keys = array_map(static fn ($key) => trim((string) $key), $keys);
        $keys = array_filter($keys, static fn ($key) => $key !== '');

        return array_values(array_unique($keys));
    }

    public function resolveImagesByKeys(User $user, array $keys, ?int $spaceId = null): Collection
    {
        if (empty($keys)) {
            return new Collection();
        }

        return Image::query()
            ->where('user_id', $user->id)
            ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                $query->where('space_id', $spaceId);
            })
            ->whereIn('key', $keys)
            ->get(['id', 'key', 'album_id']);
    }

    public function makePreviewPayload(array $keys, Collection $images): array
    {
        $foundKeys = $images->pluck('key')->values()->all();
        $requestedCount = count($keys);
        $affectedCount = count($foundKeys);
        $missingCount = max(0, $requestedCount - $affectedCount);

        return [
            'requested_count' => $requestedCount,
            'affected_count' => $affectedCount,
            'missing_count' => $missingCount,
            'preview_keys' => array_slice($foundKeys, 0, self::PREVIEW_LIMIT),
        ];
    }

    public function executeBatchDelete(User $user, array $keys, ?int $spaceId = null): array
    {
        $images = $this->resolveImagesByKeys($user, $keys, $spaceId);
        $preview = $this->makePreviewPayload($keys, $images);

        if ($images->isEmpty()) {
            return [
                'batch' => null,
                'preview' => $preview,
            ];
        }

        $imageIds = $images->pluck('id')->map(static fn ($id) => (int) $id)->values()->all();
        $imageKeys = $images->pluck('key')->values()->all();
        $albumCounts = array_filter($images->pluck('album_id')->countBy()->all());
        $batchId = (string) Str::uuid();

        $batch = DB::transaction(function () use ($user, $imageIds, $imageKeys, $albumCounts, $batchId, $spaceId) {
            foreach ($imageIds as $imageId) {
                /** @var Image|null $image */
                $image = Image::query()
                    ->where('id', $imageId)
                    ->where('user_id', $user->id)
                    ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                        $query->where('space_id', $spaceId);
                    })
                    ->first();
                if ($image) {
                    $image->delete();
                }
            }

            foreach ($albumCounts as $albumId => $count) {
                if (! $albumId) {
                    continue;
                }

                Album::query()
                    ->where('id', (int) $albumId)
                    ->where('user_id', $user->id)
                    ->decrement('image_num', (int) $count);
            }

            $user->image_num = $user->images()->count();
            $user->save();

            return ImageBatchOperation::query()->create([
                'batch_id' => $batchId,
                'user_id' => $user->id,
                'operation' => 'batch_delete',
                'status' => 'executed',
                'total_count' => count($imageIds),
                'image_ids' => $imageIds,
                'image_keys' => $imageKeys,
                'executed_at' => now(),
                'meta' => [
                    'album_counts' => $albumCounts,
                ],
            ]);
        });

        return [
            'batch' => $batch,
            'preview' => $preview,
        ];
    }

    public function rollbackBatchDelete(User $user, string $batchId, ?int $spaceId = null): array
    {
        /** @var ImageBatchOperation|null $batch */
        // FIX-21: 防止重复回滚
        $batch = ImageBatchOperation::query()
            ->where('batch_id', $batchId)
            ->where('user_id', $user->id)
            ->where('operation', 'batch_delete')
            ->whereNotIn('status', ['rolled_back'])
            ->first();

        if (! $batch) {
            return [
                'batch' => null,
                'restored_count' => 0,
                'already_restored' => 0,
                'total_count' => 0,
            ];
        }

        $imageIds = array_values(array_filter(array_map('intval', (array) $batch->image_ids)));
        if (empty($imageIds)) {
            return [
                'batch' => $batch,
                'restored_count' => 0,
                'already_restored' => (int) $batch->total_count,
                'total_count' => (int) $batch->total_count,
            ];
        }

        $deletedImages = Image::withTrashed()
            ->where('user_id', $user->id)
            ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                $query->where('space_id', $spaceId);
            })
            ->whereIn('id', $imageIds)
            ->whereNotNull('deleted_at')
            ->get(['id', 'album_id']);

        $restoredCount = 0;
        $albumRestoreCounts = array_filter($deletedImages->pluck('album_id')->countBy()->all());

        DB::transaction(function () use (
            $deletedImages,
            $albumRestoreCounts,
            $user,
            $batch,
            &$restoredCount
        ) {
            foreach ($deletedImages as $image) {
                if ($image->restore()) {
                    $restoredCount++;
                }
            }

            foreach ($albumRestoreCounts as $albumId => $count) {
                if (! $albumId) {
                    continue;
                }

                Album::query()
                    ->where('id', (int) $albumId)
                    ->where('user_id', $user->id)
                    ->increment('image_num', (int) $count);
            }

            $user->image_num = $user->images()->count();
            $user->save();

            $batch->status = $restoredCount === (int) $batch->total_count ? 'rolled_back' : 'partial_rollback';
            $batch->rolled_back_at = now();
            $batch->save();
        });

        $alreadyRestored = max(0, (int) $batch->total_count - $restoredCount);

        return [
            'batch' => $batch,
            'restored_count' => $restoredCount,
            'already_restored' => $alreadyRestored,
            'total_count' => (int) $batch->total_count,
        ];
    }
}
