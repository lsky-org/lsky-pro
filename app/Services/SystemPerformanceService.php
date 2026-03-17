<?php

namespace App\Services;

use App\Enums\ConfigKey;
use App\Models\AiPromptTask;
use App\Models\Image;
use App\Models\ImageProcessJob;
use App\Models\User;
use App\Services\ImageProcessing\ImageProcessingManager;
use App\Utils;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SystemPerformanceService
{
    public function __construct(
        private readonly ImageProcessingManager $processingManager
    ) {
    }

    public function summary(): array
    {
        $loadAverage = function_exists('sys_getloadavg') ? (sys_getloadavg() ?: []) : [];
        $diskRoot = base_path();
        $storagePath = storage_path();
        $databaseOk = true;
        $databaseMessage = '连接正常';

        try {
            DB::connection()->getPdo();
        } catch (\Throwable) {
            $databaseOk = false;
            $databaseMessage = '连接异常';
        }

        $tableExists = [
            'jobs' => Schema::hasTable('jobs'),
            'failed_jobs' => Schema::hasTable('failed_jobs'),
            'upload_tasks' => Schema::hasTable('upload_tasks'),
            'ai_prompt_tasks' => Schema::hasTable('ai_prompt_tasks'),
            'image_process_jobs' => Schema::hasTable('image_process_jobs'),
            'tags' => Schema::hasTable('tags'),
            'webhook_subscriptions' => Schema::hasTable('webhook_subscriptions'),
            'users' => Schema::hasTable('users'),
        ];

        return [
            'overview' => [
                'images' => Image::query()->count(),
                'users' => $tableExists['users'] ? User::query()->count() : null,
                'tags' => $tableExists['tags'] ? DB::table('tags')->count() : 0,
                'jobs_pending' => $tableExists['jobs'] ? DB::table('jobs')->count() : 0,
                'jobs_failed' => $tableExists['failed_jobs'] ? DB::table('failed_jobs')->count() : 0,
                'upload_tasks_processing' => $tableExists['upload_tasks']
                    ? DB::table('upload_tasks')->whereIn('status', ['pending', 'processing'])->count()
                    : 0,
                'ai_prompt_processing' => $tableExists['ai_prompt_tasks']
                    ? DB::table('ai_prompt_tasks')->whereIn('status', [
                        AiPromptTask::STATUS_PENDING,
                        AiPromptTask::STATUS_PROCESSING,
                    ])->count()
                    : 0,
                'image_process_processing' => $tableExists['image_process_jobs']
                    ? DB::table('image_process_jobs')->whereIn('status', [
                        ImageProcessJob::STATUS_PENDING,
                        ImageProcessJob::STATUS_RETRYING,
                        ImageProcessJob::STATUS_PROCESSING,
                    ])->count()
                    : 0,
                'webhooks' => $tableExists['webhook_subscriptions'] ? DB::table('webhook_subscriptions')->count() : null,
            ],
            'app' => [
                'app_version' => (string) Utils::config(ConfigKey::AppVersion, '-'),
                'php_version' => PHP_VERSION,
                'laravel_version' => app()->version(),
                'environment' => app()->environment(),
                'debug' => (bool) config('app.debug'),
                'timezone' => (string) config('app.timezone', 'UTC'),
            ],
            'runtime' => [
                'hostname' => gethostname() ?: php_uname('n'),
                'memory_limit' => ini_get('memory_limit') ?: '-1',
                'memory_usage_mb' => round(memory_get_usage(true) / 1024 / 1024, 2),
                'memory_peak_mb' => round(memory_get_peak_usage(true) / 1024 / 1024, 2),
                'upload_max_filesize' => (string) ini_get('upload_max_filesize'),
                'post_max_size' => (string) ini_get('post_max_size'),
                'cpu_cores' => $this->cpuCores(),
                'load_average' => array_values(array_map(
                    static fn ($value) => is_numeric($value) ? round((float) $value, 2) : null,
                    $loadAverage
                )),
                'disk_total_gb' => $this->formatDiskValue(@disk_total_space($diskRoot)),
                'disk_free_gb' => $this->formatDiskValue(@disk_free_space($diskRoot)),
                'storage_free_gb' => $this->formatDiskValue(@disk_free_space($storagePath)),
                'queue_default' => (string) config('queue.default'),
                'queue_upload_pipeline' => (string) config('queue.upload_pipeline.queue', 'upload-critical'),
                'queue_ai_prompt' => (string) config('queue.ai_prompt.queue', 'ai-prompt'),
                'database_driver' => (string) config('database.default', 'unknown'),
                'database_ok' => $databaseOk,
                'database_message' => $databaseMessage,
                'recent_audit_log_at' => $this->recentAuditLogAt(),
                'server_time' => now()->toDateTimeString(),
            ],
            'extensions' => [
                'imagick' => extension_loaded('imagick'),
                'vips' => extension_loaded('vips') || class_exists(\Jcupitt\Vips\Image::class),
                'gd' => extension_loaded('gd'),
                'redis' => extension_loaded('redis'),
                'opcache' => extension_loaded('Zend OPcache'),
                'swoole' => extension_loaded('swoole'),
            ],
            'database' => [
                'default_connection' => (string) config('database.default'),
                'driver' => (string) DB::connection()->getDriverName(),
                'version' => $this->databaseVersion(),
            ],
            'queue' => [
                'default' => (string) config('queue.default'),
                'upload_pipeline' => (string) config('queue.upload_pipeline.connection', config('queue.default')),
                'image_delete' => (string) config('queue.image_delete.connection', config('queue.default')),
                'ai_prompt' => (string) config('queue.ai_prompt.connection', config('queue.default')),
            ],
            'schedule' => [
                'cleanup_expired_images' => 'hourly',
                'cleanup_temp_uploads' => 'daily',
                'prune_failed_jobs' => 'weekly',
                'reclaim_stale_tasks' => 'hourly',
            ],
            'storage' => [
                'storage_writable' => is_writable($storagePath),
                'public_writable' => is_writable(public_path()),
                'temp_preview_writable' => $this->isWritableOrCreatable(public_path(trim(config('app.thumbnail_path'), '/').'/previews')),
            ],
            'processing' => $this->processingManager->status(),
        ];
    }

    private function cpuCores(): int
    {
        $value = (int) trim((string) @shell_exec('nproc 2>/dev/null'));

        return max(1, $value);
    }

    private function databaseVersion(): string
    {
        try {
            $driver = DB::connection()->getDriverName();

            return match ($driver) {
                'sqlite' => (string) optional(DB::selectOne('select sqlite_version() as version'))->version,
                'pgsql' => (string) optional(DB::selectOne('select version() as version'))->version,
                'mysql' => (string) optional(DB::selectOne('select version() as version'))->version,
                default => 'unknown',
            };
        } catch (\Throwable) {
            return 'unavailable';
        }
    }

    private function formatDiskValue(float|int|false $bytes): ?float
    {
        if (! is_numeric($bytes) || $bytes <= 0) {
            return null;
        }

        return round(((float) $bytes) / 1024 / 1024 / 1024, 2);
    }

    private function isWritableOrCreatable(string $path): bool
    {
        if (is_dir($path)) {
            return is_writable($path);
        }

        return is_writable(dirname($path));
    }

    private function recentAuditLogAt(): ?string
    {
        $paths = glob(storage_path('logs/audit*.log')) ?: [];
        if ($paths === []) {
            return null;
        }

        $timestamps = array_map(static fn (string $path) => @filemtime($path) ?: 0, $paths);
        $latest = max($timestamps);

        return $latest > 0 ? date('Y-m-d H:i:s', $latest) : null;
    }
}
