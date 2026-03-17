<?php

namespace App\Jobs;

use App\Models\ImageProcessJob;
use App\Models\ImageProcessTemplate;
use App\Models\User;
use App\Services\ImageProcessing\ImageProcessExecutor;
use App\Services\ImageProcessing\ImageProcessingManager;
use App\Utils;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class RunImageProcessTemplateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    public int $timeout = 1800;

    public string $jobId;

    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
        $this->onQueue('image-process');
    }

    public function handle(ImageProcessExecutor $executor, ImageProcessingManager $processingManager): void
    {
        /** @var ImageProcessJob|null $job */
        $job = ImageProcessJob::query()->where('job_id', $this->jobId)->first();
        if (! $job) {
            return;
        }

        if (in_array($job->status, [
            ImageProcessJob::STATUS_SUCCESS,
            ImageProcessJob::STATUS_FAILED,
            ImageProcessJob::STATUS_PARTIAL_SUCCESS,
            ImageProcessJob::STATUS_CANCELLED,
        ], true)) {
            return;
        }

        $claimed = ImageProcessJob::query()
            ->where('job_id', $this->jobId)
            ->whereIn('status', [ImageProcessJob::STATUS_PENDING, ImageProcessJob::STATUS_RETRYING])
            ->update([
                'status' => ImageProcessJob::STATUS_PROCESSING,
                'started_at' => Carbon::now(),
                'error_message' => null,
            ]);
        if ($claimed === 0) {
            return;
        }

        $job = ImageProcessJob::query()->where('job_id', $this->jobId)->first();
        if (! $job) {
            return;
        }

        /** @var User|null $user */
        $user = User::query()->find($job->user_id);
        /** @var ImageProcessTemplate|null $template */
        $template = ImageProcessTemplate::query()->find($job->template_id);

        if (! $user || ! $template) {
            $job->forceFill([
                'status' => ImageProcessJob::STATUS_FAILED,
                'error_message' => '任务依赖不存在（用户或模板）。',
                'finished_at' => Carbon::now(),
            ])->save();

            return;
        }

        $result = (array) $job->result;
        $keys = array_values(array_filter(array_map('strval', (array) ($result['keys'] ?? [])), static fn ($key) => $key !== ''));
        $spaceId = isset($result['space_id']) ? (int) $result['space_id'] : null;
        if ($spaceId !== null && $spaceId <= 0) {
            $spaceId = null;
        }

        $job->forceFill([
            'error_message' => null,
            'processed' => 0,
            'success' => 0,
            'failed' => 0,
            'total' => count($keys),
            'result' => [
                'keys' => $keys,
                'space_id' => $spaceId,
                'successes' => [],
                'failures' => [],
            ],
        ])->save();

        try {
            $definition = $executor->validatePayload((array) $template->definition);
        } catch (ValidationException $e) {
            $job->forceFill([
                'status' => ImageProcessJob::STATUS_FAILED,
                'error_message' => $e->validator->errors()->first(),
                'finished_at' => Carbon::now(),
            ])->save();

            return;
        }

        $processed = 0;
        $success = 0;
        $failed = 0;
        $successes = [];
        $failures = [];

        foreach ($keys as $key) {
            $job->refresh();
            if ($job->status === ImageProcessJob::STATUS_CANCELLED) {
                $job->forceFill([
                    'finished_at' => Carbon::now(),
                ])->save();
                return;
            }

            $execution = $executor->execute($user, $key, $spaceId, $definition, $processingManager);

            if ($execution['ok']) {
                $success++;
                $successes[] = $execution['data'];
            } else {
                $failed++;
                $failures[] = [
                    'key' => $key,
                    'message' => $execution['message'],
                ];
            }

            $processed++;

            $job->forceFill([
                'processed' => $processed,
                'success' => $success,
                'failed' => $failed,
                'result' => [
                    'keys' => $keys,
                    'space_id' => $spaceId,
                    'successes' => $successes,
                    'failures' => $failures,
                ],
            ])->save();
        }

        $status = ImageProcessJob::STATUS_SUCCESS;
        if ($success === 0 && $failed > 0) {
            $status = ImageProcessJob::STATUS_FAILED;
        } elseif ($success > 0 && $failed > 0) {
            $status = ImageProcessJob::STATUS_PARTIAL_SUCCESS;
        }

        $job->forceFill([
            'status' => $status,
            'finished_at' => Carbon::now(),
        ])->save();
    }

    public function failed(\Throwable $e): void
    {
        ImageProcessJob::query()
            ->where('job_id', $this->jobId)
            ->update([
                'status' => ImageProcessJob::STATUS_FAILED,
                'error_message' => config('app.debug') ? $e->getMessage() : '服务异常，请稍后再试',
                'finished_at' => Carbon::now(),
            ]);

        Utils::e($e, '异步模板处理任务执行失败');
    }
}
