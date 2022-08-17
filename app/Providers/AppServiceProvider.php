<?php

namespace App\Providers;

use App\Enums\ConfigKey;
use App\Models\Group;
use App\Utils;
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
            Config::set('mail', array_merge(\config('mail'), Utils::config(ConfigKey::Mail)->toArray()));

            View::composer('*', function (\Illuminate\View\View $view) {
                /** @var Group $group */
                $group = Auth::check() ? Auth::user()->group : Group::query()->where('is_guest', true)->first();
                $view->with([
                    '_group' => $group,
                    '_is_notice' => strip_tags(Utils::config(ConfigKey::SiteNotice)),
                ]);
            });
        }
    }
}
