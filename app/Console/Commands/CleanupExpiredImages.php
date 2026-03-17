<?php

namespace App\Console\Commands;

use App\Models\Image;
use Illuminate\Console\Command;

class CleanupExpiredImages extends Command
{
    protected $signature = 'images:cleanup-expired
                            {--execute : 实际执行删除（默认仅 dry-run）}
                            {--chunk=200 : 每批处理数量}
                            {--limit=0 : 最大处理数量，0 为不限制}';

    protected $description = '清理已到期图片（默认 dry-run，不会删除数据）';

    public function handle(): int
    {
        $execute = (bool) $this->option('execute');
        $chunk = max((int) $this->option('chunk'), 1);
        $limit = max((int) $this->option('limit'), 0);

        $query = Image::query()
            ->whereNotNull('expire_at')
            ->where('expire_at', '<=', now())
            ->orderBy('id');

        $total = (clone $query)->count();
        if ($total === 0) {
            $this->info('没有待清理的到期图片。');
            return self::SUCCESS;
        }

        $this->info(sprintf(
            '到期图片总数: %d，模式: %s',
            $total,
            $execute ? 'execute' : 'dry-run'
        ));

        $processed = 0;
        $deleted = 0;
        $stop = false;

        $query->chunkById($chunk, function ($images) use ($execute, $limit, &$processed, &$deleted, &$stop) {
            foreach ($images as $image) {
                if ($limit > 0 && $processed >= $limit) {
                    $stop = true;
                    return false;
                }

                $processed++;
                if (! $execute) {
                    $this->line(sprintf('[dry-run] image_id=%d key=%s expire_at=%s', $image->id, $image->key, $image->expire_at));
                    continue;
                }

                $image->forceDelete();
                $deleted++;
            }

            return ! $stop;
        });

        $this->info(sprintf(
            '处理完成: processed=%d, deleted=%d, mode=%s',
            $processed,
            $deleted,
            $execute ? 'execute' : 'dry-run'
        ));

        return self::SUCCESS;
    }
}
