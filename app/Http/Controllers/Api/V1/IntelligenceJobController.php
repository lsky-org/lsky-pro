<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ImageIntelligenceRecord;
use App\Models\ImageIntelligenceTerm;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IntelligenceJobController extends Controller
{
    private const CACHE_PREFIX = 'intelligence_batch:';
    private const SCHEDULE_KEY = 'intelligence_schedule:config';
    private const LOG_FILE = '/tmp/intelligence-batch.log';

    public function status(Request $request): JsonResponse
    {
        $batchProgress = Cache::get(self::CACHE_PREFIX . 'progress');
        $isRunning = (bool) Cache::get(self::CACHE_PREFIX . 'running');
        $isPaused = (bool) Cache::get(self::CACHE_PREFIX . 'paused');

        // Heartbeat check: if running flag is set but process is dead, auto-clear
        if ($isRunning) {
            $heartbeat = Cache::get(self::CACHE_PREFIX . 'heartbeat', 0);
            if ($heartbeat > 0 && now()->timestamp - $heartbeat > 90) {
                Cache::forget(self::CACHE_PREFIX . 'running');
                Cache::forget(self::CACHE_PREFIX . 'paused');
                $isRunning = false;
                if ($batchProgress && $batchProgress['status'] === 'running') {
                    $batchProgress['status'] = 'stopped';
                    Cache::put(self::CACHE_PREFIX . 'progress', $batchProgress, 7200);
                }
            }
        }

        $user = $request->user();
        $totalImages = $user->images()->count();
        $processedImages = ImageIntelligenceRecord::query()
            ->where('source', 'local_intelligence')
            ->whereIn('image_id', $user->images()->select('id'))
            ->count();

        return response()->json([
            'total_images' => $totalImages,
            'processed_images' => $processedImages,
            'pending_images' => $totalImages - $processedImages,
            'total_terms' => ImageIntelligenceTerm::query()
                ->whereIn('image_id', $user->images()->select('id'))
                ->count(),
            'batch' => $batchProgress,
            'is_running' => $isRunning,
            'is_paused' => $isPaused,
        ]);
    }

    public function start(Request $request): JsonResponse
    {
        if (Cache::get(self::CACHE_PREFIX . 'running')) {
            // Check heartbeat - auto-clear if process is dead
            $heartbeat = Cache::get(self::CACHE_PREFIX . 'heartbeat', 0);
            if ($heartbeat > 0 && now()->timestamp - $heartbeat > 90) {
                Cache::forget(self::CACHE_PREFIX . 'running');
                Cache::forget(self::CACHE_PREFIX . 'paused');
            } else {
                return response()->json(['error' => '已有作业正在运行'], 409);
            }
        }

        $reprocess = $request->boolean('reprocess');
        $flag = $reprocess ? ' --reprocess' : '';

        // Clear old log - ensure writable by www-data
        if (file_exists(self::LOG_FILE) && !is_writable(self::LOG_FILE)) {
            @chmod(self::LOG_FILE, 0666);
        }
        @file_put_contents(self::LOG_FILE, '');
        if (!file_exists(self::LOG_FILE) || !is_writable(self::LOG_FILE)) {
            @touch(self::LOG_FILE);
            @chmod(self::LOG_FILE, 0666);
        }

        $cmd = 'cd /var/www/html && php artisan intelligence:batch' . $flag . ' > /dev/null 2>&1 &';
        $process = proc_open(['bash', '-c', $cmd], [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ], $pipes);
        if (is_resource($process)) {
            fclose($pipes[0]);
            fclose($pipes[1]);
            fclose($pipes[2]);
            proc_close($process);
        }

        return response()->json(['message' => '作业已启动']);
    }

    public function pause(): JsonResponse
    {
        if (! Cache::get(self::CACHE_PREFIX . 'running')) {
            return response()->json(['error' => '没有正在运行的作业'], 404);
        }
        Cache::put(self::CACHE_PREFIX . 'paused', true, 7200);
        return response()->json(['message' => '作业已暂停']);
    }

    public function resume(): JsonResponse
    {
        if (! Cache::get(self::CACHE_PREFIX . 'running')) {
            return response()->json(['error' => '没有正在运行的作业'], 404);
        }
        Cache::put(self::CACHE_PREFIX . 'paused', false, 7200);
        return response()->json(['message' => '作业已恢复']);
    }

    public function stop(): JsonResponse
    {
        Cache::put(self::CACHE_PREFIX . 'running', false, 10);
        Cache::put(self::CACHE_PREFIX . 'paused', false, 10);
        return response()->json(['message' => '作业已停止']);
    }

    public function clear(Request $request): JsonResponse
    {
        if (Cache::get(self::CACHE_PREFIX . 'running')) {
            return response()->json(['error' => '作业正在运行，请先停止'], 409);
        }

        $user = $request->user();
        $userImageIds = $user->images()->pluck('id');

        $terms = ImageIntelligenceTerm::whereIn('image_id', $userImageIds)->delete();
        $records = ImageIntelligenceRecord::whereIn('image_id', $userImageIds)->delete();
        \Illuminate\Support\Facades\DB::table('images')
            ->whereIn('id', $userImageIds)
            ->whereNotNull('ocr_text')
            ->update(['ocr_text' => null]);

        Cache::forget(self::CACHE_PREFIX . 'progress');

        return response()->json([
            'message' => '已清除所有识别数据',
            'cleared_records' => $records,
            'cleared_terms' => $terms,
        ]);
    }

    /**
     * Return log lines after a given offset for real-time streaming.
     */
    public function logs(Request $request): JsonResponse
    {
        $after = (int) $request->query('after', 0);

        $lines = [];
        if (file_exists(self::LOG_FILE)) {
            $content = file_get_contents(self::LOG_FILE);
            if ($content !== false && $content !== '') {
                $lines = explode("\n", rtrim($content, "\n"));
            }
        }

        $total = count($lines);
        $newLines = $after < $total ? array_slice($lines, $after) : [];

        return response()->json([
            'lines' => $newLines,
            'total' => $total,
        ]);
    }

    public function scheduleGet(): JsonResponse
    {
        $config = Cache::get(self::SCHEDULE_KEY, [
            'enabled' => false,
            'cron' => '0 */6 * * *',
            'last_run_at' => null,
        ]);

        // Check scheduler daemon
        $schedulerAlive = false;
        $process = proc_open(['pgrep', '-f', 'intelligence:scheduler'], [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ], $pipes);
        if (is_resource($process)) {
            fclose($pipes[0]);
            $output = stream_get_contents($pipes[1]);
            fclose($pipes[1]);
            fclose($pipes[2]);
            $exitCode = proc_close($process);
            $schedulerAlive = ($exitCode === 0 && trim($output) !== '');
        }

        // Compute next run from cron
        $nextRunAt = null;
        if (!empty($config['enabled']) && !empty($config['cron'])) {
            $nextRunAt = $this->computeNextRun($config['cron']);
        }

        return response()->json([
            'enabled' => (bool) ($config['enabled'] ?? false),
            'cron' => $config['cron'] ?? '0 */6 * * *',
            'last_run_at' => $config['last_run_at'] ?? null,
            'next_run_at' => $nextRunAt,
            'scheduler_alive' => $schedulerAlive,
        ]);
    }

    public function scheduleSet(Request $request): JsonResponse
    {
        $enabled = $request->boolean('enabled');
        $cron = trim($request->input('cron', '0 */6 * * *'));

        // Validate cron format
        $parts = preg_split('/\s+/', $cron);
        if (count($parts) !== 5) {
            return response()->json(['error' => 'Cron 表达式格式错误，需要 5 个字段'], 422);
        }

        $existing = Cache::get(self::SCHEDULE_KEY, []);

        $config = [
            'enabled' => $enabled,
            'cron' => $cron,
            'last_run_at' => $existing['last_run_at'] ?? null,
        ];

        Cache::put(self::SCHEDULE_KEY, $config, 86400 * 30);

        return response()->json([
            'message' => $enabled ? '定时任务已启用' : '定时任务已关闭',
            'config' => $config,
        ]);
    }

    /**
     * Compute the next matching minute for a cron expression (up to 48h ahead).
     */
    private function computeNextRun(string $cron): ?string
    {
        $parts = preg_split('/\s+/', trim($cron));
        if (count($parts) !== 5) {
            return null;
        }

        $time = now()->addMinute()->startOfMinute();
        $limit = now()->addHours(48);

        while ($time->lte($limit)) {
            $values = [$time->minute, $time->hour, $time->day, $time->month, $time->dayOfWeek];
            $match = true;
            foreach ($parts as $i => $part) {
                if (! $this->fieldMatches($part, $values[$i])) {
                    $match = false;
                    break;
                }
            }
            if ($match) {
                return $time->toIso8601String();
            }
            $time->addMinute();
        }
        return null;
    }

    private function fieldMatches(string $field, int $value): bool
    {
        foreach (explode(',', $field) as $segment) {
            $segment = trim($segment);
            if ($segment === '*') {
                return true;
            }
            if (str_starts_with($segment, '*/')) {
                $step = (int) substr($segment, 2);
                if ($step > 0 && $value % $step === 0) {
                    return true;
                }
                continue;
            }
            if (str_contains($segment, '-')) {
                $rangeParts = explode('/', $segment, 2);
                [$from, $to] = array_map('intval', explode('-', $rangeParts[0], 2));
                $step = isset($rangeParts[1]) ? (int) $rangeParts[1] : 1;
                if ($value >= $from && $value <= $to && ($value - $from) % $step === 0) {
                    return true;
                }
                continue;
            }
            if ((int) $segment === $value) {
                return true;
            }
        }
        return false;
    }
}
