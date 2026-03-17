<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // FIX-16: 定时清理任务
        $schedule->command('lsky:cleanup-expired-images --force --chunk=500')
            ->hourly()
            ->withoutOverlapping()
            ->runInBackground();

        // 清理孤立临时上传文件 (>24h)
        $schedule->call(function () {
            $dir = storage_path('app/upload-tasks');
            if (! is_dir($dir)) return;
            foreach (new \DirectoryIterator($dir) as $file) {
                if ($file->isDot() || $file->isDir()) continue;
                if (time() - $file->getMTime() > 86400) {
                    @unlink($file->getRealPath());
                }
            }
        })->name('cleanup-temp-upload-tasks')->daily()->withoutOverlapping();

        // 清理过期 failed_jobs
        $schedule->command('queue:prune-failed --hours=168')
            ->weekly()
            ->withoutOverlapping();

        // 小批量回填旧图 intelligence 记录，避免和上传新图争抢主流程。
        $schedule->command('images:backfill-intelligence --dispatch --trigger-source=scheduler --limit=25 --chunk=25 --older-than-minutes=30')
            ->hourly()
            ->withoutOverlapping()
            ->runInBackground();

        // 清理卡住的上传/AI任务 (>1h 仍为 processing)
        $schedule->call(function () {
            \App\Models\UploadTask::query()
                ->where('status', 'pending')
                ->where('created_at', '<', now()->subHour())
                ->update(['status' => 'failed', 'error_message' => 'Timed out by scheduler', 'finished_at' => now()]);
            \App\Models\UploadTask::query()
                ->where('status', 'processing')
                ->where(function ($query) {
                    $query->where('started_at', '<', now()->subHour())
                        ->orWhere(function ($nested) {
                            $nested->whereNull('started_at')
                                ->where('created_at', '<', now()->subHour());
                        });
                })
                ->update(['status' => 'failed', 'error_message' => 'Timed out by scheduler', 'finished_at' => now()]);
            \App\Models\AiPromptTask::query()
                ->where('status', \App\Models\AiPromptTask::STATUS_PENDING)
                ->where('created_at', '<', now()->subHour())
                ->update([
                    'status' => \App\Models\AiPromptTask::STATUS_FAILED,
                    'error_message' => 'Timed out by scheduler',
                    'finished_at' => now(),
                ]);
            \App\Models\AiPromptTask::query()
                ->where('status', \App\Models\AiPromptTask::STATUS_PROCESSING)
                ->where(function ($query) {
                    $query->where('started_at', '<', now()->subHour())
                        ->orWhere(function ($nested) {
                            $nested->whereNull('started_at')
                                ->where('created_at', '<', now()->subHour());
                        });
                })
                ->update([
                    'status' => \App\Models\AiPromptTask::STATUS_FAILED,
                    'error_message' => 'Timed out by scheduler',
                    'finished_at' => now(),
                ]);
        })->name('reclaim-stale-upload-and-ai-tasks')->hourly()->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
