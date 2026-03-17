<?php

namespace App\Console\Commands;

use App\Services\InstallStateService;
use App\Utils;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class Install extends Command
{
    private const KNOWN_TABLES = [
        'migrations',
        'password_resets',
        'failed_jobs',
        'personal_access_tokens',
        'groups',
        'users',
        'strategies',
        'albums',
        'images',
        'configs',
        'group_strategy',
        'upload_tasks',
        'image_batch_operations',
        'tags',
        'webhook_subscriptions',
        'image_tag',
        'team_spaces',
        'team_memberships',
        'image_process_templates',
        'image_process_jobs',
        'ai_prompt_tasks',
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lsky:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Lsky Pro.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->signature = implode(' ', [
            'lsky:install',
            '{--connection=mysql : Database type}',
            '{--host=127.0.0.1 : Database connection address}',
            '{--port=3306 : Database connection port}',
            '{--database= : Database name}',
            '{--username=root : Database connection user name}',
            '{--password=root : Database connection password}',
            '{--admin-email= : Initial admin email}',
            '{--admin-password= : Initial admin password}',
            '{--admin-name=超级管理员 : Initial admin name}',
            '{--app-url= : Application base url}',
        ]);
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        /** @var InstallStateService $installState */
        $installState = app(InstallStateService::class);
        if ($installState->isInstalled()) {
            $this->warn('Already installed. if you want to reinstall, please remove installed.lock file.');
            return 0;
        }

        $driver = $this->option('connection');
        $connection = "database.connections.{$driver}";
        $options = [
            'connection' => $this->option('connection'),
            'host' => $this->option('host'),
            'port' => $this->option('port'),
            'database' => $this->option('database'),
            'username' => $this->option('username'),
            'password' => $this->option('password'),
        ];
        $configs = array_intersect_key($options, config($connection));

        // 覆盖默认配置
        Config::set($connection, array_merge(config($connection), $configs));
        // 设置默认数据库驱动
        Config::set('database.default', $driver);

        try {
            $options = $this->prepareConnectionOptions($options);
            $this->assertRequiredDriverExtensionAvailable((string) $options['connection']);
            $this->assertEnvironmentFileWritable();
            $appUrl = trim((string) $this->option('app-url'));
            $this->applyRuntimeConfiguration($options, $appUrl);
            $this->assertConnectionAvailable($driver);
            $this->assertInstallTargetSafe($driver, $options);
            $this->persistEnvironment($options, $appUrl);

            $bootstrapOptions = array_filter([
                '--admin-email' => $this->option('admin-email'),
                '--admin-password' => $this->option('admin-password'),
                '--admin-name' => $this->option('admin-name'),
                '--app-url' => $appUrl,
            ], fn ($value) => ! is_null($value) && $value !== '');

            $exitCode = Artisan::call('lsky:bootstrap', $bootstrapOptions, $this->output);
            if ($exitCode !== 0) {
                return $exitCode;
            }
        } catch (\Throwable $e) {
            $this->warn("Installation error!\n");
            $this->error($e->getMessage());
            Utils::e($e, '执行数据库安装程序时出现异常');
            return 1;
        }

        $this->info('Install success!');
        return 0;
    }

    private function prepareConnectionOptions(array $options): array
    {
        if ($options['connection'] === 'sqlite' && ! $options['database']) {
            $options['database'] = database_path('database.sqlite');
        }

        if ($options['connection'] === 'sqlite') {
            $directory = dirname((string) $options['database']);
            if (! is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
            if (! file_exists((string) $options['database'])) {
                file_put_contents((string) $options['database'], '');
            }
        }

        return $options;
    }

    private function applyRuntimeConfiguration(array $options, string $appUrl): void
    {
        $driver = (string) $options['connection'];
        $connection = "database.connections.{$driver}";
        Config::set($connection, array_merge(config($connection), array_intersect_key($options, config($connection))));
        Config::set('database.default', $driver);
        DB::purge($driver);
        DB::setDefaultConnection($driver);

        if ($appUrl !== '') {
            Config::set('app.url', rtrim($appUrl, '/'));
        }

        clearstatcache(true);
    }

    private function assertConnectionAvailable(string $driver): void
    {
        DB::connection($driver)->getPdo();
    }

    private function assertInstallTargetSafe(string $driver, array $options): void
    {
        $tables = $this->listTableNames($driver, $options);
        if ($tables === []) {
            return;
        }

        $unexpected = array_values(array_diff($tables, self::KNOWN_TABLES));
        if ($unexpected === []) {
            return;
        }

        if ((string) env('ALLOW_DESTRUCTIVE', '0') === '1') {
            $this->warn('ALLOW_DESTRUCTIVE=1, skipping non-empty database guard.');
            return;
        }

        throw new RuntimeException(
            'Target database is not empty and contains non-LSky tables: '.implode(', ', array_slice($unexpected, 0, 10))
        );
    }

    private function assertRequiredDriverExtensionAvailable(string $driver): void
    {
        $requirements = match ($driver) {
            'mysql' => ['pdo_mysql'],
            'pgsql' => ['pdo_pgsql'],
            'sqlite' => ['pdo_sqlite'],
            'sqlsrv' => ['sqlsrv', 'pdo_sqlsrv'],
            default => [],
        };

        $missing = array_values(array_filter($requirements, static fn (string $extension): bool => ! extension_loaded($extension)));
        if ($missing === []) {
            return;
        }

        throw new RuntimeException(sprintf(
            '当前 PHP 运行环境缺少 %s 驱动扩展，无法连接 %s。请先在运行镜像中安装并启用这些扩展后再执行安装。',
            implode(', ', $missing),
            strtoupper($driver)
        ));
    }

    private function assertEnvironmentFileWritable(): void
    {
        $envPath = $this->laravel->environmentFilePath();
        $envDirectory = dirname($envPath);

        if (! file_exists($envPath) && ! is_writable($envDirectory)) {
            throw new RuntimeException(sprintf(
                '安装器无法写入环境配置文件。当前目录不可写: %s',
                $envDirectory
            ));
        }

        if (file_exists($envPath) && ! is_writable($envPath)) {
            throw new RuntimeException(sprintf(
                '安装器无法写入环境配置文件。当前 .env 为只读: %s',
                $envPath
            ));
        }
    }

    private function listTableNames(string $driver, array $options): array
    {
        $rows = match ($driver) {
            'mysql' => DB::connection($driver)->select(
                'select table_name from information_schema.tables where table_schema = ?',
                [$options['database']]
            ),
            'pgsql' => DB::connection($driver)->select(
                "select tablename as table_name from pg_tables where schemaname = 'public'"
            ),
            'sqlite' => DB::connection($driver)->select(
                "select name as table_name from sqlite_master where type = 'table' and name not like 'sqlite_%'"
            ),
            'sqlsrv' => DB::connection($driver)->select(
                'select name as table_name from sys.tables'
            ),
            default => [],
        };

        return array_values(array_filter(array_unique(array_map(function ($row) {
            $value = (string) ($row->table_name ?? '');
            return strtolower(trim($value));
        }, $rows))));
    }

    private function persistEnvironment(array $options, string $appUrl): void
    {
        $envPath = $this->laravel->environmentFilePath();
        if (! file_exists($envPath)) {
            copy(base_path('.env.example'), $envPath);
        }

        $pairs = [
            'DB_CONNECTION' => $options['connection'],
            'DB_HOST' => $options['host'],
            'DB_PORT' => $options['port'],
            'DB_DATABASE' => $options['database'],
            'DB_USERNAME' => $options['username'],
            'DB_PASSWORD' => $options['password'],
        ];

        if ($appUrl !== '') {
            $pairs['APP_URL'] = rtrim($appUrl, '/');
        }

        $contents = (string) file_get_contents($envPath);
        foreach ($pairs as $key => $value) {
            $contents = $this->upsertEnvValue($contents, $key, (string) $value);
        }

        file_put_contents($envPath, $contents);
    }

    private function upsertEnvValue(string $contents, string $key, string $value): string
    {
        $line = $key.'='.$this->normalizeEnvValue($value);
        $pattern = '/^'.preg_quote($key, '/').'=.*/m';

        if (preg_match($pattern, $contents) === 1) {
            return (string) preg_replace($pattern, $line, $contents);
        }

        return rtrim($contents).PHP_EOL.$line.PHP_EOL;
    }

    private function normalizeEnvValue(string $value): string
    {
        if ($value === '') {
            return '';
        }

        if (preg_match('/^[A-Za-z0-9_:\\/.@-]+$/', $value) === 1) {
            return $value;
        }

        return '"'.addcslashes($value, "\\\"").'"';
    }
}
