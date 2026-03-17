<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Jobs\GenerateAiPromptTaskJob;
use App\Models\AiPromptTask;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AiPromptTaskController extends Controller
{
    use AuditsOperations;

    public function store(Request $request): Response
    {
        try {
            $validated = $request->validate([
                'key' => 'required|string|max:64',
                'intent' => 'required|string|max:2000',
                'template' => 'nullable|string|max:5000',
                'language' => 'nullable|string|max:32',
                'style' => 'nullable|string|max:200',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $key = trim((string) $validated['key']);

        $image = $user->images()
            ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                $query->where('space_id', $spaceId);
            })
            ->where('key', $key)
            ->first();
        if (! $image) {
            return $this->fail('图片不存在');
        }

        $taskId = (string) Str::uuid();
        $task = AiPromptTask::query()->create([
            'task_id' => $taskId,
            'user_id' => $user->id,
            'image_id' => $image->id,
            'image_key' => $key,
            'intent' => (string) $validated['intent'],
            'template' => ($validated['template'] ?? null) ?: null,
            'language' => (string) (($validated['language'] ?? null) ?: 'zh-CN'),
            'style' => (string) (($validated['style'] ?? null) ?: '专业、简洁、可执行'),
            'status' => AiPromptTask::STATUS_PENDING,
        ]);

        try {
            $pendingDispatch = GenerateAiPromptTaskJob::dispatch($taskId);
            $pendingDispatch->onConnection((string) config('queue.ai_prompt.connection', config('queue.default')));
            $pendingDispatch->onQueue((string) config('queue.ai_prompt.queue', 'ai-prompt'));
        } catch (\Throwable $e) {
            $task->forceFill([
                'status' => AiPromptTask::STATUS_FAILED,
                'error_message' => $e->getMessage(),
                'finished_at' => now(),
            ])->save();

            return $this->fail('任务提交失败');
        }

        $this->auditOperation($request, 'api.ai.prompt_task.create', 'ai_prompt_task', 'success', [
            'target' => $taskId,
            'image_key' => $key,
            'intent_length' => mb_strlen((string) $validated['intent']),
        ]);

        return $this->success('任务已提交', [
            'task_id' => $taskId,
            'task' => $this->formatTask($task),
        ]);
    }

    public function show(Request $request, string $taskId): Response
    {
        /** @var User $user */
        $user = Auth::user();

        /** @var AiPromptTask|null $task */
        $task = AiPromptTask::query()
            ->where('task_id', trim($taskId))
            ->where('user_id', $user->id)
            ->first();
        if (! $task) {
            return $this->fail('任务不存在');
        }

        return $this->success('success', [
            'task' => $this->formatTask($task),
        ]);
    }

    private function formatTask(AiPromptTask $task): array
    {
        return [
            'task_id' => $task->task_id,
            'image_key' => $task->image_key,
            'status' => $task->status,
            'intent' => $task->intent,
            'result' => $task->result,
            'error_message' => $task->error_message,
            'started_at' => optional($task->started_at)->toDateTimeString(),
            'finished_at' => optional($task->finished_at)->toDateTimeString(),
            'created_at' => optional($task->created_at)->toDateTimeString(),
            'updated_at' => optional($task->updated_at)->toDateTimeString(),
            'is_finished' => in_array($task->status, [
                AiPromptTask::STATUS_SUCCESS,
                AiPromptTask::STATUS_FAILED,
            ], true),
        ];
    }

    private function currentSpaceId(Request $request): ?int
    {
        $spaceId = (int) $request->attributes->get('space_id', 0);

        return $spaceId > 0 ? $spaceId : null;
    }
}
