<?php

namespace App\Jobs;

use App\Models\Image;
use App\Utils;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessImageOcrPlaceholderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $imageId;

    public function __construct(int $imageId)
    {
        $this->imageId = $imageId;
        $this->tries = 2;
        $this->timeout = 30;
    }

    public function handle(): void
    {
        /** @var Image|null $image */
        $image = Image::query()->with('tags:id,name')->find($this->imageId);
        if (! $image) {
            return;
        }

        $tagText = $image->tags->pluck('name')->implode(' ');
        $placeholder = trim(implode(' ', array_filter([
            $image->origin_name,
            $image->alias_name,
            $image->extension,
            $image->mimetype,
            $tagText,
            'ocr-placeholder',
        ])));

        $image->forceFill([
            'ocr_text' => mb_substr($placeholder, 0, 10000),
        ])->save();
    }

    public function failed(\Throwable $e): void
    {
        Utils::e($e, 'OCR 占位任务处理失败');
    }
}
