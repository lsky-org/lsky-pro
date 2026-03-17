<?php

namespace App\Services\ImageIntelligence;

use App\Jobs\AnalyzeImageIntelligenceJob;
use App\Models\Image;
use App\Models\ImageIntelligenceRecord;
use App\Services\ImageIntelligence\ProviderBackedImageIntelligenceAnalyzer;
use App\Services\ImageIntelligence\LocalImageIntelligenceAnalyzer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class ImageIntelligenceService
{
    private const DISPATCH_LOCK_TTL_SECONDS = 7200;

    public function __construct(
        private readonly ImageIntelligenceTermProjectionService $termProjectionService,
        private readonly ProviderBackedImageIntelligenceAnalyzer $providerBackedAnalyzer,
        private readonly LocalImageIntelligenceAnalyzer $localAnalyzer
    ) {
    }

    public function dispatch(Image $image, ?int $runId = null): bool
    {
        if (! $this->acquireDispatchLock((int) $image->id)) {
            return false;
        }

        $this->markPending($image);

        try {
            AnalyzeImageIntelligenceJob::dispatch((int) $image->id, $runId)
                ->onConnection(config('queue.upload_pipeline.connection'))
                ->onQueue(config('queue.upload_pipeline.queue', 'upload-critical'))
                ->afterCommit();
        } catch (\Throwable $e) {
            $this->releaseDispatchLock((int) $image->id);
            $this->markFailed((int) $image->id, $e);
            throw $e;
        }

        return true;
    }

    public function markPending(Image $image): ?ImageIntelligenceRecord
    {
        return $this->upsertStatusRecord((int) $image->id, $image->user_id ? (int) $image->user_id : null, 'pending');
    }

    public function markProcessing(int $imageId): ?ImageIntelligenceRecord
    {
        return $this->upsertStatusRecord($imageId, null, 'processing');
    }

    public function markFailed(int $imageId, \Throwable|string $error): ?ImageIntelligenceRecord
    {
        $message = $error instanceof \Throwable ? $error->getMessage() : (string) $error;

        return $this->upsertStatusRecord($imageId, null, 'failed', $message);
    }

    public function analyzeAndStore(int $imageId): ?ImageIntelligenceRecord
    {
        /** @var Image|null $image */
        $image = Image::query()
            ->with('tags:id,name')
            ->find($imageId);

        if (! $image) {
            return null;
        }

        $payload = $this->buildPayload($image);

        /** @var ImageIntelligenceRecord $record */
        $record = ImageIntelligenceRecord::query()->updateOrCreate(
            ['image_id' => (int) $image->id],
            array_merge($payload, [
                'user_id' => $image->user_id ? (int) $image->user_id : null,
            ])
        );

        $this->termProjectionService->syncForImage($image, $record);
        $this->syncLegacyOcrText($image, (string) ($payload['ocr_text'] ?? ''));

        return $record;
    }

    public function releaseDispatchLock(int $imageId): void
    {
        Cache::forget($this->dispatchLockKey($imageId));
    }

    /**
     * @return array<string, mixed>
     */
    private function buildPayload(Image $image): array
    {
        // Default: use local intelligence (MobileNetV2 + Tesseract OCR)
        try {
            return $this->localAnalyzer->analyze($image);
        } catch (\Throwable $e) {
            // Local analysis failed, fall back to placeholder
            return $this->buildPlaceholderPayload($image, 'local_analysis_failed: ' . $e->getMessage());
        }
    }

    /**
     * @param  array<string, mixed>|null  $providerSnapshot
     */
    private function buildPlaceholderPayload(Image $image, ?string $fallbackReason = null, ?array $providerSnapshot = null): array
    {
        $labels = $image->tags->pluck('name')
            ->map(fn (mixed $item) => trim((string) $item))
            ->filter()
            ->unique()
            ->values()
            ->all();

        $filename = trim((string) ($image->alias_name ?: $image->origin_name ?: $image->name));
        $dimension = ($image->width > 0 && $image->height > 0)
            ? sprintf('%d x %d', (int) $image->width, (int) $image->height)
            : 'unknown';

        $ocrText = trim(implode(' ', array_filter([
            $filename,
            trim((string) $image->extension),
            trim((string) $image->mimetype),
            implode(' ', $labels),
            'ocr-placeholder',
        ])));

        $keywords = collect(array_merge(
            $labels,
            [
                Str::lower(trim((string) $image->extension)),
                trim((string) $image->mimetype),
                $filename,
                trim((string) $image->origin_name),
                trim((string) $image->alias_name),
            ]
        ))
            ->map(fn (mixed $item) => trim((string) $item))
            ->filter()
            ->unique()
            ->values()
            ->all();

        $caption = trim(sprintf(
            '%s，格式 %s，尺寸 %s。',
            $filename !== '' ? $filename : '未命名图片',
            $image->extension ?: 'unknown',
            $dimension
        ));

        $summary = trim(implode(' ', array_filter([
            $caption,
            $labels !== [] ? '已有关联标签：'.implode('、', $labels).'。' : '当前还没有关联标签。',
        ])));

        $promptHint = trim(implode("\n", array_filter([
            '文件名：'.($filename !== '' ? $filename : '未命名图片'),
            '格式：'.($image->extension ?: 'unknown'),
            '尺寸：'.$dimension,
            $labels !== [] ? '标签：'.implode('、', $labels) : '标签：暂无',
            $ocrText !== '' ? 'OCR/占位文本：'.$ocrText : null,
        ])));

        $providerSnapshot = $providerSnapshot ?: $this->providerBackedAnalyzer->activeProviderSnapshot();

        return [
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'ocr_text' => mb_substr($ocrText, 0, 10000),
            'caption' => mb_substr($caption, 0, 5000),
            'summary' => mb_substr($summary, 0, 5000),
            'prompt_hint' => mb_substr($promptHint, 0, 5000),
            'labels' => $labels,
            'keywords' => $keywords,
            'metadata' => [
                'extension' => (string) $image->extension,
                'mimetype' => (string) $image->mimetype,
                'size_kb' => (float) $image->size,
                'width' => (int) $image->width,
                'height' => (int) $image->height,
                'source_exists' => $image->sourceExists(),
                'fallback' => true,
                'fallback_reason' => $fallbackReason ?: 'provider_not_ready',
                'provider' => (string) ($providerSnapshot['provider'] ?? ''),
                'model' => (string) ($providerSnapshot['model'] ?? ''),
                'transport' => (string) ($providerSnapshot['transport'] ?? ''),
                'generated_by' => 'image_intelligence.write_side.v2',
            ],
            'analyzed_at' => now(),
            'last_error' => null,
        ];
    }

    private function syncLegacyOcrText(Image $image, string $ocrText): void
    {
        if ($ocrText === '' || $image->ocr_text === $ocrText) {
            return;
        }

        Image::withoutTimestamps(function () use ($image, $ocrText): void {
            $image->forceFill([
                'ocr_text' => $ocrText,
            ])->saveQuietly();
        });
    }

    private function upsertStatusRecord(
        int $imageId,
        ?int $userId,
        string $status,
        ?string $lastError = null
    ): ?ImageIntelligenceRecord {
        /** @var ImageIntelligenceRecord|null $record */
        $record = ImageIntelligenceRecord::query()
            ->where('image_id', $imageId)
            ->first();

        if (! $record) {
            $imageRow = Image::query()
                ->select('id', 'user_id')
                ->find($imageId);

            if (! $imageRow) {
                return null;
            }

            $record = new ImageIntelligenceRecord([
                'image_id' => $imageId,
                'user_id' => $userId ?? ($imageRow->user_id ? (int) $imageRow->user_id : null),
                'source' => 'metadata_placeholder',
                'source_version' => 1,
            ]);
        }

        if ($record->user_id === null && $userId !== null) {
            $record->user_id = $userId;
        }

        $record->status = $status;
        $record->source = $record->source ?: 'metadata_placeholder';
        $record->source_version = $record->source_version ?: 1;
        $record->last_error = $lastError !== null ? mb_substr(trim($lastError), 0, 5000) : null;
        $record->save();

        return $record;
    }

    private function acquireDispatchLock(int $imageId): bool
    {
        return Cache::add(
            $this->dispatchLockKey($imageId),
            now()->timestamp,
            self::DISPATCH_LOCK_TTL_SECONDS
        );
    }

    private function dispatchLockKey(int $imageId): string
    {
        return 'image_intelligence.dispatch.'.$imageId;
    }
}
