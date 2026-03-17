<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class IntelligenceSchedulerCommand extends Command
{
    protected $signature = 'intelligence:scheduler';
    protected $description = 'Daemon that runs scheduled intelligence batch jobs based on cron expression';

    private const CACHE_PREFIX = 'intelligence_batch:';
    private const SCHEDULE_KEY = 'intelligence_schedule:config';
    private const LOG_FILE = '/tmp/intelligence-batch.log';

    private string $lastCheckedMinute = '';

    public function handle(): int
    {
        $this->appendLog('[调度] 定时任务守护进程已启动');

        while (true) {
            try {
                $this->tick();
            } catch (\Throwable $e) {
                $this->appendLog('[调度] 异常: ' . mb_substr($e->getMessage(), 0, 80));
            }
            sleep(10);
        }
    }

    private function tick(): void
    {
        $config = Cache::get(self::SCHEDULE_KEY, []);
        if (empty($config['enabled']) || empty($config['cron'])) {
            return;
        }

        $now = now();
        $currentMinute = $now->format('Y-m-d H:i');

        // Only check once per minute
        if ($currentMinute === $this->lastCheckedMinute) {
            return;
        }
        $this->lastCheckedMinute = $currentMinute;

        if (! $this->matchesCron($config['cron'], $now)) {
            return;
        }

        // Don't start if already running
        if (Cache::get(self::CACHE_PREFIX . 'running')) {
            return;
        }

        // Prevent double-trigger
        $lastRun = $config['last_run_at'] ?? null;
        if ($lastRun && $now->diffInSeconds(\Carbon\Carbon::parse($lastRun)) < 60) {
            return;
        }

        $this->appendLog("[调度] 定时任务触发 (cron: {$config['cron']})");

        $cmd = 'cd /var/www/html && php artisan intelligence:batch > /dev/null 2>&1 &';
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

        // Update last run
        $config['last_run_at'] = $now->toIso8601String();
        Cache::put(self::SCHEDULE_KEY, $config, 86400 * 30);
    }

    /**
     * Match a cron expression (minute hour day month weekday) against a timestamp.
     */
    private function matchesCron(string $expression, \Carbon\Carbon $time): bool
    {
        $parts = preg_split('/\s+/', trim($expression));
        if (count($parts) !== 5) {
            return false;
        }

        $values = [
            $time->minute,      // 0-59
            $time->hour,        // 0-23
            $time->day,         // 1-31
            $time->month,       // 1-12
            $time->dayOfWeek,   // 0=Sunday, 6=Saturday
        ];

        foreach ($parts as $i => $part) {
            if (! $this->fieldMatches($part, $values[$i])) {
                return false;
            }
        }
        return true;
    }

    private function fieldMatches(string $field, int $value): bool
    {
        foreach (explode(',', $field) as $segment) {
            $segment = trim($segment);

            if ($segment === '*') {
                return true;
            }

            // */N
            if (str_starts_with($segment, '*/')) {
                $step = (int) substr($segment, 2);
                if ($step > 0 && $value % $step === 0) {
                    return true;
                }
                continue;
            }

            // N-M or N-M/S
            if (str_contains($segment, '-')) {
                $rangeParts = explode('/', $segment, 2);
                [$from, $to] = array_map('intval', explode('-', $rangeParts[0], 2));
                $step = isset($rangeParts[1]) ? (int) $rangeParts[1] : 1;
                if ($value >= $from && $value <= $to && ($value - $from) % $step === 0) {
                    return true;
                }
                continue;
            }

            // Exact number
            if ((int) $segment === $value) {
                return true;
            }
        }
        return false;
    }

    private function appendLog(string $message): void
    {
        $timestamp = now()->format('H:i:s');
        $line = "[{$timestamp}] {$message}\n";
        file_put_contents(self::LOG_FILE, $line, FILE_APPEND | LOCK_EX);
        $this->info(trim($line));
    }
}
