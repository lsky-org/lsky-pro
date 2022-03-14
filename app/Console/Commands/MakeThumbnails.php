<?php

namespace App\Console\Commands;

use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Console\Command;
use League\Flysystem\FilesystemException;
use Symfony\Component\Console\Helper\ProgressBar;

class MakeThumbnails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lsky:thumbnails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make images thumbnails.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $progress = new ProgressBar($this->output, Image::query()->count());
        $progress->setMessage('获取图片处理中...');
        $progress->start();

        $service = new ImageService();

        /** @var Image $image */
        foreach (Image::query()->whereNotNull('strategy_id')->cursor() as $image) {
            try {
                $service->makeThumbnail(
                    image: $image,
                    data: $image->filesystem()->read($image->pathname),
                    force: true,
                );
                $progress->advance();
            } catch (\Throwable $e) {
                $this->error("缩略图生成失败, {$e->getMessage()}");
            }
        }

        $progress->finish();

        return 0;
    }
}
