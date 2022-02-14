<?php

namespace App\Providers;

use App\Enums\ConfigKey;
use App\Models\Group;
use App\Utils;
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
        // 覆盖默认配置
        Config::set('mail', array_merge(\config('mail'), Utils::config(ConfigKey::Mail)->toArray()));

        // 初始化视图中的默认数据
        View::composer('*', function (\Illuminate\View\View $view) {
            $configs = Auth::check() && Auth::user()->group ? Auth::user()->group->configs : Group::getGuestConfigs();
            $view->with('groupConfigs', $configs);
        });
    }
}
