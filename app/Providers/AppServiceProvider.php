<?php

namespace App\Providers;

use App\Enums\ConfigKey;
use App\Models\Group;
use App\Services\InstallStateService;
use App\Utils;
use Illuminate\Console\Events\CommandStarting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use App\Models\PersonalAccessToken;
use RuntimeException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConsoleSafetyGuards();

        // Bind custom Sanctum PAT model to support per-token expiry and IP whitelist
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);

        // 是否需要生成 env 文件
        if (! file_exists(base_path('.env'))) {
            file_put_contents(base_path('.env'), file_get_contents(base_path('.env.example')));
            // 生成 key
            Artisan::call('key:generate');
        }

        /** @var InstallStateService $installState */
        $installState = $this->app->make(InstallStateService::class);
        $installStateInfo = $installState->inspect();

        // 只有真实安装健康时才从数据库读取运行期配置，避免 lock 存在但库未就绪时把整个应用拖死。
        if ($installStateInfo['healthy']) {
            // 覆盖默认配置
            Config::set('app.name', Utils::config(ConfigKey::AppName));
            $mail = Utils::config(ConfigKey::Mail);
            if ($mail instanceof \Illuminate\Support\Collection) {
                Config::set('mail', array_merge(\config('mail'), $mail->toArray()));
            } elseif (is_array($mail)) {
                Config::set('mail', array_merge(\config('mail'), $mail));
            }
        }

        View::composer('*', function (\Illuminate\View\View $view) use ($installStateInfo) {
            $group = $this->makeFallbackSharedGroup();

            try {
                if ($installStateInfo['db_ready']) {
                    $group = Auth::check()
                        ? Auth::user()->group?->loadMissing('strategies') ?? $group
                        : Group::query()->with('strategies')->where('is_guest', true)->first() ?? $group;
                }
            } catch (\Throwable $e) {
                Utils::e($e, 'Failed to hydrate shared view data during boot.', 'warning');
            }

            $view->with([
                '_group' => $group,
                '_is_notice' => strip_tags((string) Utils::config(ConfigKey::SiteNotice, '')),
            ]);
        });
    }

    private function makeFallbackSharedGroup(): object
    {
        $configs = collect(config('convention.group', []));

        return (object) [
            'configs' => $configs,
            'strategies' => new Collection(),
        ];
    }

    private function registerConsoleSafetyGuards(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        Event::listen(CommandStarting::class, function (CommandStarting $event) {
            $command = trim((string) ($event->command ?? ''));
            $commandName = strtolower((string) strtok($command, ' '));
            $destructive = [
                'migrate:fresh',
                'migrate:refresh',
                'migrate:reset',
                'migrate:rollback',
                'db:wipe',
            ];

            if (! in_array($commandName, $destructive, true)) {
                return;
            }

            $allowDestructive = (string) env('ALLOW_DESTRUCTIVE', '0') === '1';
            $isTesting = $this->app->environment('testing');
            $databaseDriver = (string) Config::get('database.default', '');

            if ($isTesting && $databaseDriver !== 'sqlite' && ! $allowDestructive) {
                throw new RuntimeException(sprintf(
                    'Refusing to run destructive artisan command "%s" in testing because DB_CONNECTION=%s. Use sqlite for testing or set ALLOW_DESTRUCTIVE=1 explicitly.',
                    $command,
                    $databaseDriver ?: 'unknown'
                ));
            }

            if ($allowDestructive || $isTesting) {
                return;
            }

            throw new RuntimeException(sprintf(
                'Refusing to run destructive artisan command "%s". Set ALLOW_DESTRUCTIVE=1 explicitly if this is intentional.',
                $command
            ));
        });
    }
}
