<?php

namespace App\Jobs;

use App\Services\ImageIntelligence\ImageIntelligenceService;
use App\Utils;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AnalyzeImageIntelligenceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $imageId;
    public ?int $runId;

    public function __construct(int $imageId, ?int $runId = null)
    {
        $this->imageId = $imageId;
        $this->runId = $runId && $runId > 0 ? $runId : null;
        $this->tries = 2;
        $this->timeout = 120;
    }

    public function handle(
        ImageIntelligenceService $service,
        \App\Services\ImageIntelligence\ImageIntelligenceRunLedgerService $runLedger
    ): void
    {
        try {
            $runLedger->markJobProcessing($this->runId, $this->imageId);
            $service->markProcessing($this->imageId);
            $record = $service->analyzeAndStore($this->imageId);
            if (! $record) {
                throw new \RuntimeException('图片不存在或已删除，无法完成 intelligence 分析');
            }

            $runLedger->recordJobSucceeded($this->runId, $this->imageId);
        } finally {
            $service->releaseDispatchLock($this->imageId);
        }
    }

    public function failed(\Throwable $e): void
    {
        try {
            $service = app(ImageIntelligenceService::class);
            $runLedger = app(\App\Services\ImageIntelligence\ImageIntelligenceRunLedgerService::class);
            $service->markFailed($this->imageId, $e);
            $runLedger->recordJobFailed($this->runId, $this->imageId, $e);
            $service->releaseDispatchLock($this->imageId);
        } catch (\Throwable $statusError) {
            Utils::e($statusError, '图像智能分析失败状态写回失败');
        }

        Utils::e($e, '图像智能分析任务失败');
    }
}
