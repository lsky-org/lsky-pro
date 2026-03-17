<?php

namespace App\Jobs;

use App\Models\Image;
use App\Models\Strategy;
use App\Services\ImageService;
use App\Utils;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use League\Flysystem\Filesystem;

class DeleteImagePhysicalFileJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries;

    public int $timeout;

    public int $strategyId;

    public string $pathname;

    public string $md5;

    public string $sha1;

    public string $key;

    public string $thumbnailPathname;

    public function __construct(
        int $strategyId,
        string $pathname,
        string $md5,
        string $sha1,
        string $key,
        string $thumbnailPathname
    ) {
        $this->strategyId = $strategyId;
        $this->pathname = $pathname;
        $this->md5 = $md5;
        $this->sha1 = $sha1;
        $this->key = $key;
        $this->thumbnailPathname = $thumbnailPathname;
        $this->tries = (int) config('queue.image_delete.tries', 3);
        $this->timeout = (int) config('queue.image_delete.timeout', 120);
    }

    /**
     * Queue retry delays in seconds.
     */
    public function backoff(): array
    {
        $backoff = config('queue.image_delete.backoff', [10, 30, 60]);
        if (! is_array($backoff) || empty($backoff)) {
            return [10, 30, 60];
        }
        return array_map('intval', $backoff);
    }

    /**
     * Delete physical file only when there are no duplicate records in same strategy.
     *
     * @throws \Throwable
     */
    public function handle(ImageService $imageService): void
    {
        $isUsedByOtherImage = Image::query()
            ->where('strategy_id', $this->strategyId)
            ->where('md5', $this->md5)
            ->where('sha1', $this->sha1)
            ->exists();

        if ($isUsedByOtherImage) {
            Cache::forget("image_{$this->key}");
            return;
        }

        $strategy = Strategy::query()->find($this->strategyId);
        if (! $strategy) {
            throw new \RuntimeException("Cannot delete image file, strategy #{$this->strategyId} not found.");
        }

        $filesystem = new Filesystem($imageService->getAdapter($strategy));
        if ($filesystem->fileExists($this->pathname)) {
            $filesystem->delete($this->pathname);
        }

        @unlink(public_path($this->thumbnailPathname));
        Cache::forget("image_{$this->key}");
    }

    public function failed(\Throwable $e): void
    {
        Utils::e($e, '异步删除图片物理文件失败');
    }
}
