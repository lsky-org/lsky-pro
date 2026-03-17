<?php

namespace App\Services\ImageIntelligence;

use App\Models\Image;
use App\Models\ImageIntelligenceRun;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ImageIntelligenceBackfillService
{
    public function __construct(
        private readonly ImageIntelligenceService $intelligenceService,
        private readonly ImageIntelligenceRunLedgerService $runLedgerService
    ) {
    }

    /**
     * @param  array{
     *     dispatch?: bool,
     *     image_id?: int,
     *     from_id?: int,
     *     chunk?: int,
     *     limit?: int,
     *     older_than_minutes?: int,
     *     missing_only?: bool,
     *     force?: bool,
     *     sample_limit?: int,
     *     retry_run_id?: int
     * }  $options
     * @param  array{
     *     initiator_user_id?: int,
     *     trigger_source?: string,
     *     request_id?: string,
     *     trace_id?: string,
     *     ip?: string
     * }  $context
     * @return array{
     *     mode: string,
     *     matched: int,
     *     processed: int,
     *     dispatched: int,
     *     skipped: int,
     *     last_image_id: int|null,
     *     samples: array<int, array<string, mixed>>,
     *     run: array<string, mixed>|null
     * }
     */
    public function run(array $options = [], array $context = []): array
    {
        $options = $this->resolveRetryOptions($options);
        $dispatch = (bool) ($options['dispatch'] ?? false);
        $chunk = max((int) ($options['chunk'] ?? 200), 1);
        $limit = max((int) ($options['limit'] ?? 0), 0);
        $sampleLimit = max((int) ($options['sample_limit'] ?? 20), 0);

        $query = $this->buildCandidateQuery($options);
        $matched = (clone $query)->count();

        $processed = 0;
        $dispatched = 0;
        $skipped = 0;
        $lastImageId = null;
        $samples = [];
        $stop = false;
        $run = null;

        if ($dispatch) {
            $run = $this->runLedgerService->startDispatchRun($options, $context);
        }

        try {
            $query->chunkById($chunk, function (Collection $images) use (
                $dispatch,
                $limit,
                $sampleLimit,
                $run,
                &$processed,
                &$dispatched,
                &$skipped,
                &$lastImageId,
                &$samples,
                &$stop
            ) {
                $images->loadMissing('intelligenceRecord:id,image_id,status,analyzed_at,updated_at');

                /** @var Image $image */
                foreach ($images as $image) {
                    if ($limit > 0 && $processed >= $limit) {
                        $stop = true;
                        return false;
                    }

                    $processed++;
                    $lastImageId = (int) $image->id;
                    $reason = $this->resolveReason($image);

                    if ($sampleLimit > 0 && count($samples) < $sampleLimit) {
                        $samples[] = [
                            'image_id' => (int) $image->id,
                            'key' => (string) $image->key,
                            'reason' => $reason,
                        ];
                    }

                    if (! $dispatch) {
                        $skipped++;
                        continue;
                    }

                    if ($this->intelligenceService->dispatch($image, $run?->id)) {
                        $dispatched++;
                        continue;
                    }

                    $skipped++;
                }

                return ! $stop;
            }, 'images.id', 'id');
        } catch (\Throwable $e) {
            if ($run) {
                $run = $this->runLedgerService->failDispatchRun($run->id, $e, [
                    'matched' => $matched,
                    'processed' => $processed,
                    'dispatched' => $dispatched,
                    'skipped' => $skipped,
                    'last_image_id' => $lastImageId,
                ]);
            }

            throw $e;
        }

        if ($run) {
            $run = $this->runLedgerService->finalizeDispatchRun($run->id, [
                'matched' => $matched,
                'processed' => $processed,
                'dispatched' => $dispatched,
                'skipped' => $skipped,
                'last_image_id' => $lastImageId,
            ]);
        }

        return [
            'mode' => $dispatch ? 'dispatch' : 'dry-run',
            'matched' => $matched,
            'processed' => $processed,
            'dispatched' => $dispatched,
            'skipped' => $skipped,
            'last_image_id' => $lastImageId,
            'samples' => $samples,
            'run' => $run ? $this->runLedgerService->summarize($run instanceof ImageIntelligenceRun ? $run : null) : null,
        ];
    }

    /**
     * @param  array{
     *     image_id?: int,
     *     from_id?: int,
     *     older_than_minutes?: int,
     *     missing_only?: bool,
     *     force?: bool
     * }  $options
     */
    public function buildCandidateQuery(array $options = []): Builder
    {
        $imageId = max((int) ($options['image_id'] ?? 0), 0);
        $fromId = max((int) ($options['from_id'] ?? 0), 0);
        $olderThanMinutes = max((int) ($options['older_than_minutes'] ?? 15), 0);
        $missingOnly = (bool) ($options['missing_only'] ?? false);
        $force = (bool) ($options['force'] ?? false);
        $cutoff = $olderThanMinutes > 0 ? now()->subMinutes($olderThanMinutes) : null;

        return Image::query()
            ->select('images.*')
            ->leftJoin('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
            ->when($imageId > 0, function (Builder $builder) use ($imageId) {
                $builder->where('images.id', $imageId);
            })
            ->when($fromId > 0, function (Builder $builder) use ($fromId) {
                $builder->where('images.id', '>=', $fromId);
            })
            ->when(! $force, function (Builder $builder) use ($missingOnly, $cutoff) {
                $builder->where(function (Builder $candidate) use ($missingOnly, $cutoff) {
                    $candidate->where(function (Builder $missing) use ($cutoff) {
                        $missing->whereNull('intelligence_records.id');

                        if ($cutoff) {
                            $missing->where('images.created_at', '<=', $cutoff);
                        }
                    });

                    if ($missingOnly) {
                        return;
                    }

                    $candidate->orWhere(function (Builder $incomplete) use ($cutoff) {
                        $incomplete->whereNotNull('intelligence_records.id')
                            ->where(function (Builder $needsRetry) {
                                $needsRetry->whereNull('intelligence_records.analyzed_at')
                                    ->orWhere('intelligence_records.status', '!=', 'ready');
                            });

                        if ($cutoff) {
                            $incomplete->where('intelligence_records.updated_at', '<=', $cutoff);
                        }
                    });
                });
            })
            ->when($force && $cutoff, function (Builder $builder) use ($cutoff) {
                $builder->where('images.created_at', '<=', $cutoff);
            })
            ->orderBy('images.id');
    }

    private function resolveReason(Image $image): string
    {
        $record = $image->intelligenceRecord;

        if (! $record) {
            return 'missing_record';
        }

        if ($record->analyzed_at === null) {
            return 'missing_analyzed_at';
        }

        $status = trim((string) $record->status);

        return $status !== '' && $status !== 'ready'
            ? 'status_'.$status
            : 'force_rebuild';
    }

    /**
     * @param  array<string, mixed>  $options
     * @return array<string, mixed>
     */
    private function resolveRetryOptions(array $options): array
    {
        $retryRunId = max((int) ($options['retry_run_id'] ?? 0), 0);
        if ($retryRunId < 1) {
            return $options;
        }

        $stored = $this->runLedgerService->optionsForRetry($retryRunId);

        return array_merge($stored, [
            'dispatch' => (bool) ($options['dispatch'] ?? true),
            'retry_run_id' => $retryRunId,
        ]);
    }
}
