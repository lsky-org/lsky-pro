<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\UploadTask;
use App\Services\UploadTaskService;
use Illuminate\Http\Response;

class UploadTaskController extends Controller
{
    public function show(string $taskId, UploadTaskService $service): Response
    {
        /** @var UploadTask|null $task */
        $task = UploadTask::query()->where('task_id', $taskId)->first();
        if (! $task) {
            return $this->fail('任务不存在');
        }

        return $this->success('success', $service->makeTaskResponse($task));
    }
}
