<?php

namespace App\Console\Commands;

use App\Models\Image;
use App\Models\ImageIntelligenceRecord;
use App\Services\ImageIntelligence\ImageIntelligenceService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class IntelligenceBatchCommand extends Command
{
    protected $signature = 'intelligence:batch {--reprocess : Reprocess all images, not just unprocessed}';
    protected $description = 'Batch process images with local intelligence (CLIP + OCR)';

    private const CACHE_PREFIX = 'intelligence_batch:';
    private const LOG_FILE = '/tmp/intelligence-batch.log';

    public function handle(ImageIntelligenceService $service): int
    {
        if (Cache::get(self::CACHE_PREFIX . 'running')) {
            $this->error('A batch job is already running.');
            return 1;
        }

        $reprocess = $this->option('reprocess');

        $query = Image::query()->orderBy('id');
        if (! $reprocess) {
            $query->whereDoesntHave('intelligenceRecord', function ($q) {
                $q->where('source', 'local_intelligence');
            });
        }

        $imageIds = $query->pluck('id')->all();
        $total = count($imageIds);

        if ($total === 0) {
            $this->appendLog('没有需要处理的图片');
            return 0;
        }

        Cache::put(self::CACHE_PREFIX . 'running', true, 7200);
        Cache::put(self::CACHE_PREFIX . 'paused', false, 7200);
        Cache::put(self::CACHE_PREFIX . 'heartbeat', now()->timestamp, 300);
        $this->updateProgress($total, 0, 0, 'running');

        $mode = $reprocess ? '重新识别全部' : '识别未处理图片';
        $this->appendLog("作业启动: {$mode}, 共 {$total} 张图片");

        $processed = 0;
        $failed = 0;
        $startTime = microtime(true);
        $pauseLogged = false;

        foreach ($imageIds as $idx => $imageId) {
            // Pause loop
            while (Cache::get(self::CACHE_PREFIX . 'paused')) {
                if (! $pauseLogged) {
                    $this->appendLog('作业已暂停，等待继续...');
                    $pauseLogged = true;
                }
                sleep(2);
                if (! Cache::get(self::CACHE_PREFIX . 'running')) {
                    $this->appendLog("作业被停止 (已处理: {$processed}, 失败: {$failed})");
                    $this->updateProgress($total, $processed, $failed, 'stopped');
                    return 0;
                }
            }
            if ($pauseLogged) {
                $this->appendLog('作业已恢复');
                $pauseLogged = false;
            }

            // Stop check
            if (! Cache::get(self::CACHE_PREFIX . 'running')) {
                $this->appendLog("作业被停止 (已处理: {$processed}, 失败: {$failed})");
                $this->updateProgress($total, $processed, $failed, 'stopped');
                return 0;
            }

            $num = $idx + 1;
            try {
                $image = Image::find($imageId);
                $imageName = $image ? $image->name : "ID:{$imageId}";
                $service->analyzeAndStore($imageId);
                $processed++;

                // Get top recognition result
                $topTerm = '';
                $term = \App\Models\ImageIntelligenceTerm::where('image_id', $imageId)
                    ->latest()
                    ->first();
                if ($term) {
                    $topTerm = " -> {$term->term}";
                }
                $this->appendLog("[{$num}/{$total}] {$imageName}{$topTerm}");
            } catch (\Throwable $e) {
                $failed++;
                $errMsg = mb_substr($e->getMessage(), 0, 80);
                $this->appendLog("[{$num}/{$total}] 失败: {$errMsg}");
            }

            // Update progress and heartbeat after EVERY image
            $this->updateProgress($total, $processed, $failed, 'running');
            Cache::put(self::CACHE_PREFIX . 'heartbeat', now()->timestamp, 300);
        }

        $elapsed = round(microtime(true) - $startTime, 1);
        Cache::forget(self::CACHE_PREFIX . 'running');
        Cache::forget(self::CACHE_PREFIX . 'paused');
        $this->updateProgress($total, $processed, $failed, 'completed');
        $this->appendLog("作业完成: 成功 {$processed}, 失败 {$failed}, 耗时 {$elapsed}s");

        // Record for scheduler
        $schedule = Cache::get('intelligence_schedule:config', []);
        $schedule['last_run_at'] = now()->toIso8601String();
        Cache::put('intelligence_schedule:config', $schedule, 86400 * 30);

        return 0;
    }

    private function updateProgress(int $total, int $processed, int $failed, string $status): void
    {
        Cache::put(self::CACHE_PREFIX . 'progress', [
            'total' => $total,
            'processed' => $processed,
            'failed' => $failed,
            'status' => $status,
            'updated_at' => now()->toIso8601String(),
        ], 7200);
    }

    private function appendLog(string $message): void
    {
        $timestamp = now()->format('H:i:s');
        $line = "[{$timestamp}] {$message}\n";
        file_put_contents(self::LOG_FILE, $line, FILE_APPEND | LOCK_EX);
        $this->info(trim($line));
    }
}
