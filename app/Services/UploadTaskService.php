<?php

namespace App\Services;

use App\Jobs\ProcessUploadTaskJob;
use App\Models\Image;
use App\Models\UploadTask;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UploadTaskService
{
    public function createTask(Request $request): UploadTask
    {
        /** @var UploadedFile|null $file */
        $file = $request->file('file');
        if (! $file) {
            throw new \InvalidArgumentException('缺少上传文件');
        }

        $taskId = (string) Str::uuid();
        $tempPath = $file->storeAs('upload-tasks', $taskId.'-'.$file->hashName());
        if (! $tempPath) {
            throw new \RuntimeException('保存上传临时文件失败');
        }

        $payload = Arr::except($request->all(), ['file']);

        $user = $request->user();

        /** @var UploadTask $task */
        $task = UploadTask::query()->create([
            'task_id' => $taskId,
            'status' => 'pending',
            'user_id' => $user ? $user->id : null,
            'request_ip' => $request->ip(),
            'strategy_id' => $request->has('strategy_id') ? (int) $request->input('strategy_id') : null,
            'temp_path' => $tempPath,
            'origin_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'payload' => $payload,
        ]);

        ProcessUploadTaskJob::dispatch($task->task_id)
            ->onConnection(config('queue.upload_pipeline.connection'))
            ->onQueue(config('queue.upload_pipeline.queue', 'upload-critical'))
            ->afterCommit();

        return $task;
    }

    public function makeTaskResponse(UploadTask $task): array
    {
        $data = [
            'task_id' => $task->task_id,
            'status' => $task->status,
        ];

        if ($task->status === 'success' && is_array($task->result)) {
            $data['result'] = $task->result;
        }

        if ($task->status === 'failed') {
            $data['error_message'] = $task->error_message;
        }

        return $data;
    }

    public function makeImageResponse(Image $image): array
    {
        $image->loadMissing([
            'group:id,configs',
            'strategy:id,key,configs',
        ]);

        $image->append(['pathname', 'filename', 'url', 'thumb_url', 'preview_url', 'links'])
            ->setVisible([
                'id',
                'album_id',
                'key',
                'name',
                'pathname',
                'filename',
                'origin_name',
                'size',
                'mimetype',
                'extension',
                'md5',
                'sha1',
                'width',
                'height',
                'url',
                'thumb_url',
                'preview_url',
                'links',
                'created_at',
            ]);

        return $image->toArray();
    }
}
