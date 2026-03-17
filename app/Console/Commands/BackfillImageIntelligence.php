<?php

namespace App\Console\Commands;

use App\Services\ImageIntelligence\ImageIntelligenceBackfillService;
use Illuminate\Console\Command;

class BackfillImageIntelligence extends Command
{
    protected $signature = 'images:backfill-intelligence
                            {--dispatch : 实际派发图像智能分析任务（默认 dry-run）}
                            {--retry-run-id=0 : 使用既有 run 的已归一化参数重新派发}
                            {--trigger-source=artisan : 触发来源（artisan|scheduler）}
                            {--image-id=0 : 仅处理单张图片 ID}
                            {--from-id=0 : 从指定图片 ID 开始处理}
                            {--chunk=200 : 每批查询数量}
                            {--limit=0 : 最大处理数量，0 为不限制}
                            {--older-than-minutes=15 : 仅处理早于该分钟数的图片}
                            {--missing-only : 仅处理缺失 intelligence record 的图片}
                            {--force : 忽略是否已有 ready record，强制重派发}
                            {--sample-limit=20 : 输出样本数量上限}';

    protected $description = '回填或重派发旧图片的图像智能分析任务（默认 dry-run）';

    public function handle(ImageIntelligenceBackfillService $service): int
    {
        try {
            $result = $service->run([
                'dispatch' => (bool) $this->option('dispatch'),
                'retry_run_id' => (int) $this->option('retry-run-id'),
                'image_id' => (int) $this->option('image-id'),
                'from_id' => (int) $this->option('from-id'),
                'chunk' => (int) $this->option('chunk'),
                'limit' => (int) $this->option('limit'),
                'older_than_minutes' => (int) $this->option('older-than-minutes'),
                'missing_only' => (bool) $this->option('missing-only'),
                'force' => (bool) $this->option('force'),
                'sample_limit' => (int) $this->option('sample-limit'),
            ], [
                'trigger_source' => $this->normalizeTriggerSource((string) $this->option('trigger-source')),
            ]);
        } catch (\RuntimeException $e) {
            $this->error($e->getMessage());
            return self::FAILURE;
        }

        $this->info(sprintf(
            'image intelligence backfill mode=%s matched=%d processed=%d dispatched=%d skipped=%d last_image_id=%s run_id=%s run_status=%s',
            $result['mode'],
            $result['matched'],
            $result['processed'],
            $result['dispatched'],
            $result['skipped'],
            $result['last_image_id'] ? (string) $result['last_image_id'] : '-',
            data_get($result, 'run.run_id', data_get($result, 'run.id', '-')),
            data_get($result, 'run.status', '-')
        ));

        foreach ($result['samples'] as $sample) {
            $prefix = $result['mode'] === 'dispatch' ? '[dispatch]' : '[dry-run]';
            $this->line(sprintf(
                '%s image_id=%d key=%s reason=%s',
                $prefix,
                (int) $sample['image_id'],
                (string) $sample['key'],
                (string) $sample['reason']
            ));
        }

        if ($result['matched'] === 0) {
            $this->info('没有命中需要回填的图片。');
        }

        return self::SUCCESS;
    }

    private function normalizeTriggerSource(string $value): string
    {
        $value = trim($value);

        return in_array($value, ['artisan', 'scheduler'], true)
            ? $value
            : 'artisan';
    }
}
