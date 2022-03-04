<?php

namespace App\Providers;

use App\Enums\ConfigKey;
use App\Enums\Mail\SmtpOption;
use App\Models\Group;
use App\Utils;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // 是否需要生成 env 文件
        if (! file_exists(base_path('.env'))) {
            file_put_contents(base_path('.env'), file_get_contents(base_path('.env.example')));
            // 生成 key
            Artisan::call('key:generate');
        }

        // 如果已经安装程序，初始化一些配置
        if (file_exists(base_path('installed.lock'))) {
            // 覆盖默认配置
            Config::set('app.name', Utils::config(ConfigKey::AppName));

            /** @var Collection $mailConfigs */
            $mailConfigs = Utils::config(ConfigKey::Mail);
            if ($mailConfigs->get(SmtpOption::Host)) {
                Config::set('mail', array_merge(\config('mail'), $mailConfigs->toArray()));
            }

            $configs = Auth::check() && Auth::user()->group ?
                Auth::user()->group->configs :
                Group::query()->where('is_guest', true)->value('configs');
            // 初始化视图中的默认数据
            View::share('groupConfigs', $configs);
        }
    }
}
