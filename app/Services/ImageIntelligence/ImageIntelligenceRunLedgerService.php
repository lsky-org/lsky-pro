<?php

namespace App\Services\ImageIntelligence;

use App\Models\ImageIntelligenceRun;
use Illuminate\Support\Facades\DB;

class ImageIntelligenceRunLedgerService
{
    /**
     * @param  array<string, mixed>  $options
     * @param  array<string, mixed>  $context
     */
    public function startDispatchRun(array $options, array $context = []): ImageIntelligenceRun
    {
        return ImageIntelligenceRun::query()->create([
            'mode' => 'dispatch',
            'status' => 'queued',
            'initiator_user_id' => $this->normalizeInt($context['initiator_user_id'] ?? null),
            'trigger_source' => $this->normalizeTriggerSource($context['trigger_source'] ?? null),
            'options' => $this->sanitizeOptions($options),
            'retry_of_run_id' => $this->normalizeInt($options['retry_run_id'] ?? null),
            'request_id' => $this->normalizeString($context['request_id'] ?? null, 128),
            'trace_id' => $this->normalizeString($context['trace_id'] ?? null, 128),
            'ip' => $this->normalizeString($context['ip'] ?? null, 45),
            'matched' => 0,
            'processed' => 0,
            'dispatched' => 0,
            'skipped' => 0,
            'succeeded' => 0,
            'failed' => 0,
            'started_at' => now(),
        ]);
    }

    /**
     * @param  array<string, mixed>  $summary
     */
    public function finalizeDispatchRun(int $runId, array $summary): ?ImageIntelligenceRun
    {
        return DB::transaction(function () use ($runId, $summary) {
            /** @var ImageIntelligenceRun|null $run */
            $run = ImageIntelligenceRun::query()
                ->lockForUpdate()
                ->find($runId);

            if (! $run) {
                return null;
            }

            $run->matched = max((int) ($summary['matched'] ?? 0), 0);
            $run->processed = max((int) ($summary['processed'] ?? 0), 0);
            $run->dispatched = max((int) ($summary['dispatched'] ?? 0), 0);
            $run->skipped = max((int) ($summary['skipped'] ?? 0), 0);
            $run->last_image_id = $this->normalizeInt($summary['last_image_id'] ?? null);
            $run->error_message = null;

            if ($run->dispatched > 0) {
                $run->status = 'processing';
                $run->finished_at = null;
            } else {
                $run->status = 'completed';
                $run->finished_at = now();
            }

            $run->save();

            return $run->fresh('initiator:id,name,email');
        });
    }

    /**
     * @param  array<string, mixed>  $summary
     */
    public function failDispatchRun(int $runId, \Throwable|string $error, array $summary = []): ?ImageIntelligenceRun
    {
        return DB::transaction(function () use ($runId, $error, $summary) {
            /** @var ImageIntelligenceRun|null $run */
            $run = ImageIntelligenceRun::query()
                ->lockForUpdate()
                ->find($runId);

            if (! $run) {
                return null;
            }

            $run->matched = max((int) ($summary['matched'] ?? $run->matched), 0);
            $run->processed = max((int) ($summary['processed'] ?? $run->processed), 0);
            $run->dispatched = max((int) ($summary['dispatched'] ?? $run->dispatched), 0);
            $run->skipped = max((int) ($summary['skipped'] ?? $run->skipped), 0);
            $run->last_image_id = $this->normalizeInt($summary['last_image_id'] ?? $run->last_image_id);
            $run->status = 'failed';
            $run->error_message = $this->normalizeError($error);
            $run->finished_at = now();
            $run->save();

            return $run->fresh('initiator:id,name,email');
        });
    }

    public function markJobProcessing(?int $runId, int $imageId): void
    {
        if (! $runId) {
            return;
        }

        DB::transaction(function () use ($runId, $imageId) {
            /** @var ImageIntelligenceRun|null $run */
            $run = ImageIntelligenceRun::query()
                ->lockForUpdate()
                ->find($runId);

            if (! $run) {
                return;
            }

            if (in_array($run->status, ['queued', 'processing'], true)) {
                $run->status = 'processing';
            }

            $run->last_image_id = $imageId;
            $run->started_at = $run->started_at ?: now();
            $run->save();
        });
    }

    public function recordJobSucceeded(?int $runId, int $imageId): void
    {
        if (! $runId) {
            return;
        }

        DB::transaction(function () use ($runId, $imageId) {
            /** @var ImageIntelligenceRun|null $run */
            $run = ImageIntelligenceRun::query()
                ->lockForUpdate()
                ->find($runId);

            if (! $run) {
                return;
            }

            $run->status = in_array($run->status, ['queued', 'processing'], true) ? 'processing' : $run->status;
            $run->succeeded = max((int) $run->succeeded, 0) + 1;
            $run->last_image_id = $imageId;
            $this->finalizeIfTerminal($run);
            $run->save();
        });
    }

    public function recordJobFailed(?int $runId, int $imageId, \Throwable|string $error): void
    {
        if (! $runId) {
            return;
        }

        DB::transaction(function () use ($runId, $imageId, $error) {
            /** @var ImageIntelligenceRun|null $run */
            $run = ImageIntelligenceRun::query()
                ->lockForUpdate()
                ->find($runId);

            if (! $run) {
                return;
            }

            $run->status = in_array($run->status, ['queued', 'processing'], true) ? 'processing' : $run->status;
            $run->failed = max((int) $run->failed, 0) + 1;
            $run->last_image_id = $imageId;
            $run->error_message = $this->normalizeError($error);
            $this->finalizeIfTerminal($run);
            $run->save();
        });
    }

    public function latestRunSummary(): ?array
    {
        /** @var ImageIntelligenceRun|null $run */
        $run = ImageIntelligenceRun::query()
            ->with('initiator:id,name,email')
            ->latest('id')
            ->first();

        return $this->summarize($run);
    }

    public function optionsForRetry(int $runId): array
    {
        /** @var ImageIntelligenceRun|null $run */
        $run = ImageIntelligenceRun::query()->find($runId);
        if (! $run) {
            throw new \RuntimeException('指定的 intelligence run 不存在');
        }

        return is_array($run->options) ? $run->options : [];
    }

    public function summarize(?ImageIntelligenceRun $run): ?array
    {
        if (! $run) {
            return null;
        }

        return [
            'id' => (int) $run->id,
            'run_id' => (int) $run->id,
            'mode' => (string) $run->mode,
            'status' => (string) $run->status,
            'status_label' => $this->statusLabel((string) $run->status),
            'trigger_source' => (string) $run->trigger_source,
            'initiator_user_id' => $run->initiator_user_id ? (int) $run->initiator_user_id : null,
            'requested_by' => $run->initiator?->name ?: $run->initiator?->email ?: 'system',
            'request_id' => (string) ($run->request_id ?? ''),
            'trace_id' => (string) ($run->trace_id ?? ''),
            'retry_of_run_id' => $run->retry_of_run_id ? (int) $run->retry_of_run_id : null,
            'matched' => (int) $run->matched,
            'processed' => (int) $run->processed,
            'dispatched' => (int) $run->dispatched,
            'skipped' => (int) $run->skipped,
            'succeeded' => (int) $run->succeeded,
            'failed' => (int) $run->failed,
            'last_image_id' => $run->last_image_id ? (int) $run->last_image_id : null,
            'error_message' => (string) ($run->error_message ?? ''),
            'requested_at' => optional($run->created_at)->format('Y-m-d H:i:s') ?: '暂无',
            'started_at' => optional($run->started_at)->format('Y-m-d H:i:s') ?: '暂无',
            'finished_at' => optional($run->finished_at)->format('Y-m-d H:i:s') ?: '进行中',
            'options' => is_array($run->options) ? $run->options : [],
        ];
    }

    /**
     * @param  array<string, mixed>  $options
     * @return array<string, mixed>
     */
    private function sanitizeOptions(array $options): array
    {
        return [
            'image_id' => max((int) ($options['image_id'] ?? 0), 0),
            'from_id' => max((int) ($options['from_id'] ?? 0), 0),
            'chunk' => max((int) ($options['chunk'] ?? 0), 0),
            'limit' => max((int) ($options['limit'] ?? 0), 0),
            'older_than_minutes' => max((int) ($options['older_than_minutes'] ?? 0), 0),
            'missing_only' => (bool) ($options['missing_only'] ?? false),
            'force' => (bool) ($options['force'] ?? false),
            'sample_limit' => max((int) ($options['sample_limit'] ?? 0), 0),
            'retry_run_id' => max((int) ($options['retry_run_id'] ?? 0), 0),
        ];
    }

    private function finalizeIfTerminal(ImageIntelligenceRun $run): void
    {
        if ($run->dispatched <= 0) {
            $run->status = 'completed';
            $run->finished_at = now();
            return;
        }

        $settled = max((int) $run->succeeded, 0) + max((int) $run->failed, 0);
        if ($settled < max((int) $run->dispatched, 0)) {
            return;
        }

        if ((int) $run->failed === 0) {
            $run->status = 'completed';
        } elseif ((int) $run->succeeded === 0) {
            $run->status = 'failed';
        } else {
            $run->status = 'partial_failed';
        }

        $run->finished_at = now();
    }

    private function normalizeInt(mixed $value): ?int
    {
        $value = (int) $value;

        return $value > 0 ? $value : null;
    }

    private function normalizeTriggerSource(mixed $value): string
    {
        $value = trim((string) $value);

        return in_array($value, ['web', 'artisan', 'scheduler'], true)
            ? $value
            : 'artisan';
    }

    private function normalizeString(mixed $value, int $limit): ?string
    {
        $value = trim((string) $value);

        return $value !== '' ? mb_substr($value, 0, $limit) : null;
    }

    private function normalizeError(\Throwable|string $error): string
    {
        $message = $error instanceof \Throwable ? $error->getMessage() : (string) $error;

        return mb_substr(trim($message), 0, 5000);
    }

    private function statusLabel(string $status): string
    {
        return match ($status) {
            'queued' => '排队中',
            'processing' => '执行中',
            'completed' => '已完成',
            'partial_failed' => '部分失败',
            'failed' => '失败',
            default => '未知',
        };
    }
}
