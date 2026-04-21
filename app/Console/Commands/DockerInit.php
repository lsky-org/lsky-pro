<?php

namespace App\Console\Commands;

use App\Enums\StrategyKey;
use App\Enums\UserStatus;
use App\Models\Strategy;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DockerInit extends Command
{
    protected $signature = 'lsky:docker-init';

    protected $description = 'Initialize Lsky Pro for Docker Compose startup.';

    public function handle(): int
    {
        $this->ensureEnvironmentFile();
        $this->ensureAppKey();
        $this->prepareSqliteDatabase();

        if (! $this->isInstalled()) {
            $this->info('Installing application data...');
            $exitCode = Artisan::call('lsky:install', $this->installArguments(), outputBuffer: $this->output);
            if ($exitCode !== 0) {
                return $exitCode;
            }
        } else {
            $this->line('Application already installed, skipping database bootstrap.');
            $this->ensureInstalledLock();
        }

        $this->syncLocalStrategyUrl();
        $this->ensureAdminUser();

        return 0;
    }

    protected function ensureEnvironmentFile(): void
    {
        if (! file_exists(base_path('.env'))) {
            copy(base_path('.env.example'), base_path('.env'));
        }
    }

    protected function ensureAppKey(): void
    {
        if (! config('app.key')) {
            $this->info('Generating application key...');
            Artisan::call('key:generate', ['--force' => true], outputBuffer: $this->output);
        }
    }

    protected function prepareSqliteDatabase(): void
    {
        if (config('database.default') !== 'sqlite') {
            return;
        }

        $database = config('database.connections.sqlite.database');
        if (! $database) {
            return;
        }

        $directory = dirname($database);
        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        if (! file_exists($database)) {
            file_put_contents($database, '');
        }
    }

    protected function isInstalled(): bool
    {
        try {
            DB::connection()->getPdo();

            return Schema::hasTable('users')
                && Schema::hasTable('configs')
                && Schema::hasTable('strategies');
        } catch (\Throwable) {
            return false;
        }
    }

    protected function installArguments(): array
    {
        $driver = config('database.default', 'sqlite');

        $arguments = [
            '--connection' => $driver,
        ];

        if ($driver === 'sqlite') {
            $arguments['--database'] = config('database.connections.sqlite.database');

            return $arguments;
        }

        return array_merge($arguments, [
            '--host' => config("database.connections.{$driver}.host"),
            '--port' => config("database.connections.{$driver}.port"),
            '--database' => config("database.connections.{$driver}.database"),
            '--username' => config("database.connections.{$driver}.username"),
            '--password' => config("database.connections.{$driver}.password"),
        ]);
    }

    protected function ensureInstalledLock(): void
    {
        if (! file_exists(base_path('installed.lock'))) {
            file_put_contents(base_path('installed.lock'), '');
        }
    }

    protected function syncLocalStrategyUrl(): void
    {
        if (! Schema::hasTable('strategies')) {
            return;
        }

        Strategy::query()
            ->where('key', StrategyKey::Local)
            ->update(['configs->url' => rtrim(config('app.url'), '/').'/i']);
    }

    protected function ensureAdminUser(): void
    {
        if (! Schema::hasTable('users')) {
            return;
        }

        $email = env('LSKY_ADMIN_EMAIL');
        $password = env('LSKY_ADMIN_PASSWORD');

        if (! $email || ! $password) {
            $this->warn('Missing LSKY_ADMIN_EMAIL or LSKY_ADMIN_PASSWORD, skipping admin bootstrap.');

            return;
        }

        $user = User::query()->where('email', $email)->first();

        if (! $user) {
            $user = new User([
                'name' => env('LSKY_ADMIN_NAME', 'admin'),
                'email' => $email,
                'password' => Hash::make($password),
                'registered_ip' => '127.0.0.1',
            ]);
            $user->status = UserStatus::Normal;
            $user->is_adminer = true;
            $user->email_verified_at = now();
            $user->save();
            $this->info("Created admin user: {$email}");

            return;
        }

        $dirty = false;

        if (! $user->is_adminer) {
            $user->is_adminer = true;
            $dirty = true;
        }

        if (! $user->email_verified_at) {
            $user->email_verified_at = now();
            $dirty = true;
        }

        if ($user->status !== UserStatus::Normal) {
            $user->status = UserStatus::Normal;
            $dirty = true;
        }

        if ($dirty) {
            $user->save();
            $this->info("Updated admin user: {$email}");
        } else {
            $this->line("Admin user already ready: {$email}");
        }
    }
}
