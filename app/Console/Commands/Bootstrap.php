<?php

namespace App\Console\Commands;

use App\Enums\ConfigKey;
use App\Enums\StrategyKey;
use App\Enums\UserStatus;
use App\Models\Group;
use App\Models\Strategy;
use App\Models\User;
use App\Services\InstallStateService;
use App\Utils;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Bootstrap extends Command
{
    protected $signature = 'lsky:bootstrap
        {--admin-email= : Admin email, fallback to INIT_ADMIN_EMAIL}
        {--admin-password= : Admin password, fallback to INIT_ADMIN_PASSWORD}
        {--admin-name= : Admin name, fallback to INIT_ADMIN_NAME}
        {--app-url= : Override APP_URL when syncing local strategy URL}
        {--force : Continue when installed.lock already exists}';

    protected $description = 'Idempotent first-run bootstrap for DB migrations, base data and admin account.';

    public function handle(): int
    {
        /** @var InstallStateService $installState */
        $installState = app(InstallStateService::class);
        if ($this->option('app-url')) {
            config(['app.url' => rtrim((string) $this->option('app-url'), '/')]);
        }

        if (file_exists(base_path('installed.lock')) && $installState->isInstalled() && ! $this->option('force')) {
            $this->info('installed.lock exists and core install state is healthy, continuing idempotent bootstrap for migrations and repair.');
        }

        if (file_exists(base_path('installed.lock')) && ! $installState->isInstalled()) {
            $this->warn('installed.lock exists but core install state is incomplete, continuing bootstrap repair.');
        }

        $this->info('Running database migrations...');
        Artisan::call('migrate', ['--force' => true], outputBuffer: $this->output);

        $this->ensureBaseData();
        $admin = $this->ensureAdminUser();
        $this->ensureInstallLock();
        $this->syncLocalStrategyUrl();

        $this->info('Bootstrap success.');
        $this->line(sprintf('Admin account: %s', $admin->email));

        return 0;
    }

    private function ensureBaseData(): void
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $rows = collect(config('convention.app'))
            ->map(fn ($value, $key) => [
                'name' => $key,
                'value' => is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : $value,
                'created_at' => $date,
                'updated_at' => $date,
            ])
            ->values()
            ->all();
        DB::table('configs')->upsert($rows, ['name'], ['value', 'updated_at']);
        $this->line('Initialized default app configs.');

        $group = Group::query()->where('is_default', true)->first();
        if (! $group) {
            $group = Group::query()->create([
                'name' => '系统默认组&游客组',
                'is_default' => true,
                'is_guest' => true,
                'configs' => config('convention.group'),
            ]);
            $this->line('Initialized default group.');
        }

        if (! $group->is_guest) {
            $group->is_guest = true;
            $group->save();
        }

        $strategy = Strategy::query()->where('key', StrategyKey::Local)->first();
        if (! $strategy) {
            $strategy = Strategy::query()->create([
                'key' => StrategyKey::Local,
                'name' => '默认本地策略',
                'intro' => '系统默认的本地策略',
                'configs' => config('filesystems.disks.uploads'),
            ]);
            $this->line('Initialized default strategy.');
        }

        $group->strategies()->syncWithoutDetaching([$strategy->id]);
        $this->line('Initialized default strategy binding.');
    }

    private function ensureAdminUser(): User
    {
        $adminEmail = (string) ($this->option('admin-email') ?: env('INIT_ADMIN_EMAIL', ''));
        $adminPassword = (string) ($this->option('admin-password') ?: env('INIT_ADMIN_PASSWORD', ''));
        $adminName = (string) ($this->option('admin-name') ?: env('INIT_ADMIN_NAME', '超级管理员'));

        if ($adminEmail === '') {
            /** @var User|null $existingAdmin */
            $existingAdmin = User::query()->where('is_adminer', true)->first();
            if ($existingAdmin) {
                $this->line('Found existing admin account, skip creating fallback admin email.');
                return $existingAdmin;
            }
        }

        if ($adminEmail === '') {
            $adminEmail = 'admin@local.test';
        }

        if ($adminPassword === '') {
            $adminPassword = Str::random(20);
            $this->warn(sprintf('INIT_ADMIN_PASSWORD not provided, generated password: %s', $adminPassword));
        }

        /** @var User|null $user */
        $user = User::query()->where('email', $adminEmail)->first();
        if (! $user) {
            $user = new User([
                'name' => $adminName,
                'email' => $adminEmail,
                'password' => Hash::make($adminPassword),
                'registered_ip' => '127.0.0.1',
                'status' => UserStatus::Normal,
                'email_verified_at' => now(),
            ]);
            $user->is_adminer = true;
            $user->save();
            $this->line('Created admin account.');
            return $user;
        }

        $dirty = false;
        if (! $user->is_adminer) {
            $user->is_adminer = true;
            $dirty = true;
        }
        if ($user->status !== UserStatus::Normal) {
            $user->status = UserStatus::Normal;
            $dirty = true;
        }
        if ($user->email_verified_at === null) {
            $user->email_verified_at = now();
            $dirty = true;
        }
        if ($adminName !== '' && $user->name !== $adminName) {
            $user->name = $adminName;
            $dirty = true;
        }
        if ($this->option('admin-password') || env('INIT_ADMIN_PASSWORD')) {
            $user->password = Hash::make($adminPassword);
            $dirty = true;
        }

        if ($dirty) {
            $user->save();
            $this->line('Updated existing admin account.');
        } else {
            $this->line('Existing admin account is already valid.');
        }

        return $user;
    }

    private function syncLocalStrategyUrl(): void
    {
        $base = rtrim((string) ($this->option('app-url') ?: config('app.url')), '/');
        if ($base === '') {
            return;
        }

        Strategy::query()->where('key', StrategyKey::Local)->update([
            'configs->url' => $base.'/i',
        ]);
    }

    private function ensureInstallLock(): void
    {
        if (! file_exists(base_path('installed.lock'))) {
            file_put_contents(base_path('installed.lock'), '');
            $this->line('Created installed.lock.');
        }
    }
}
