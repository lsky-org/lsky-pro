<?php

namespace App\Console\Commands;

use App\Utils;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class Install extends Command
{
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
        // 判断是否已经安装
        if (file_exists(base_path('installed.lock'))) {
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

        clearstatcache(true);

        try {
            if ($options['connection'] === 'sqlite' && ! $options['database']) {
                $options['database'] = database_path('database.sqlite');
                file_put_contents($options['database'], '');
                Config::set('database.connections.sqlite.database', $options['database']);
            }
            // 执行数据库迁移
            Artisan::call('migrate:fresh', ['--force' => true], outputBuffer: $this->output);
            // 填充数据
            Artisan::call('db:seed', ['--force' => true, '--class' => 'InstallSeeder'], outputBuffer: $this->output);
            // 更新 env 文件
            $replaces = collect($options)->transform(fn ($item, $key) => ['DB_'.strtoupper($key) => $item])->collapse();
            file_put_contents($this->laravel->environmentFilePath(), preg_replace(
                $replaces->map(fn ($item, $key) => $this->replacementPattern($key, env($key, '')))->values()->toArray(),
                $replaces->map(fn ($item, $key) => "{$key}={$item}")->values()->toArray(),
                file_get_contents($this->laravel->environmentFilePath())
            ));
            // 创建锁文件
            file_put_contents(base_path('installed.lock'), '');
        } catch (\Throwable $e) {
            $this->warn("Installation error!\n");
            $this->error($e->getMessage());
            Utils::e($e, '执行数据库安装程序时出现异常');
            return 1;
        }

        $this->info('Install success!');
        return 0;
    }

    protected function replacementPattern(string $name, string $value): string
    {
        $escaped = preg_quote('='.$value, '/');

        return "/^{$name}{$escaped}/m";
    }
}
