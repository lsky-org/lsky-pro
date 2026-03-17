<?php

namespace App\Jobs;

use App\Exceptions\UploadException;
use App\Models\UploadTask;
use App\Models\User;
use App\Services\ImageService;
use App\Services\UploadTaskService;
use App\Utils;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProcessUploadTaskJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries;

    public int $timeout;

    public string $taskId;

    public function __construct(string $taskId)
    {
        $this->taskId = $taskId;
        $this->tries = (int) config('queue.upload_pipeline.tries', 3);
        $this->timeout = (int) config('queue.upload_pipeline.timeout', 180);
    }

    /**
     * Queue retry delays in seconds.
     */
    public function backoff(): array
    {
        $backoff = config('queue.upload_pipeline.backoff', [5, 15, 30]);
        if (! is_array($backoff) || empty($backoff)) {
            return [5, 15, 30];
        }

        return array_map('intval', $backoff);
    }

    public function handle(ImageService $imageService, UploadTaskService $uploadTaskService): void
    {
        /** @var UploadTask|null $task */
        $task = UploadTask::query()->where('task_id', $this->taskId)->first();
        if (! $task || $task->status === 'success') {
            return;
        }

        $task->forceFill([
            'status' => 'processing',
            'error_message' => null,
            'started_at' => Carbon::now(),
        ])->save();

        $absolutePath = Storage::path($task->temp_path);
        if (! is_file($absolutePath)) {
            throw new \RuntimeException('Upload task temp file not found: '.$task->temp_path);
        }

        $shouldDeleteTempFile = false;

        try {
            if ($task->user_id) {
                /** @var User|null $user */
                $user = User::query()->find($task->user_id);
                if ($user) {
                    Auth::login($user);
                }
            }

            $server = [
                'REMOTE_ADDR' => $task->request_ip ?: '127.0.0.1',
                'REQUEST_METHOD' => 'POST',
            ];

            $request = Request::create('/api/v1/upload', 'POST', $task->payload ?: [], [], [], $server);
            $request->setUserResolver(function () use ($task) {
                return $task->user_id ? User::query()->find($task->user_id) : null;
            });

            $file = new UploadedFile(
                $absolutePath,
                $task->origin_name,
                $task->mime_type,
                null,
                true
            );
            $request->files->set('file', $file);

            $image = $imageService->store($request);

            $task->forceFill([
                'status' => 'success',
                'image_id' => $image->id,
                'result' => $uploadTaskService->makeImageResponse($image),
                'finished_at' => Carbon::now(),
            ])->save();

            $shouldDeleteTempFile = true;
        } finally {
            if ($shouldDeleteTempFile) {
                Storage::delete($task->temp_path);
            }
            Auth::logout();
        }
    }

    public function failed(\Throwable $e): void
    {
        UploadTask::query()->where('task_id', $this->taskId)->update([
            'status' => 'failed',
            'error_message' => $e instanceof UploadException ? $e->getMessage() : (config('app.debug') ? $e->getMessage() : '服务异常，请稍后再试'),
            'finished_at' => Carbon::now(),
        ]);

        if ($task = UploadTask::query()->where('task_id', $this->taskId)->first()) {
            Storage::delete($task->temp_path);
        }

        Utils::e($e, '异步上传任务处理失败');
    }
}
