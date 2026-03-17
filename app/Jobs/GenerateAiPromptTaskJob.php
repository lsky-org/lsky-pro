<?php

namespace App\Jobs;

use App\Models\AiPromptTask;
use App\Models\Image;
use App\Services\AiPromptService;
use App\Utils;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateAiPromptTaskJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $taskId;

    public function __construct(string $taskId)
    {
        $this->taskId = $taskId;
        $this->tries = 2;
        $this->timeout = 60;
    }

    public function handle(AiPromptService $service): void
    {
        /** @var AiPromptTask|null $task */
        $task = AiPromptTask::query()
            ->where('task_id', $this->taskId)
            ->first();
        if (! $task) {
            return;
        }

        $task->forceFill([
            'status' => AiPromptTask::STATUS_PROCESSING,
            'started_at' => now(),
            'error_message' => null,
        ])->save();

        try {
            /** @var Image|null $image */
            $image = Image::query()
                ->with([
                    'tags:id,name',
                    'intelligenceRecord:image_id,status,source,source_version,ocr_text,caption,summary,prompt_hint,labels,keywords,metadata,analyzed_at,last_error',
                ])
                ->where('id', $task->image_id)
                ->where('user_id', $task->user_id)
                ->first();
            if (! $image) {
                $image = Image::query()
                    ->with([
                        'tags:id,name',
                        'intelligenceRecord:image_id,status,source,source_version,ocr_text,caption,summary,prompt_hint,labels,keywords,metadata,analyzed_at,last_error',
                    ])
                    ->where('key', $task->image_key)
                    ->where('user_id', $task->user_id)
                    ->first();
            }

            if (! $image) {
                throw new \RuntimeException('图片不存在或无权限访问');
            }

            $result = $service->buildPrompt(
                $image,
                (string) $task->intent,
                $task->template,
                (string) ($task->language ?: 'zh-CN'),
                (string) ($task->style ?: '专业、简洁、可执行')
            );

            $task->forceFill([
                'status' => AiPromptTask::STATUS_SUCCESS,
                'result' => $result,
                'finished_at' => now(),
            ])->save();
        } catch (\Throwable $e) {
            $task->forceFill([
                'status' => AiPromptTask::STATUS_FAILED,
                'error_message' => $e->getMessage(),
                'finished_at' => now(),
            ])->save();
            throw $e;
        }
    }

    public function failed(\Throwable $e): void
    {
        Utils::e($e, 'AI 提示词后台任务失败');
    }
}
