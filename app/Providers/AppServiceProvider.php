<?php

namespace App\Providers;

use App\Models\Group;
use Illuminate\Support\Facades\Auth;
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
        // 初始化视图中的默认数据
        View::composer('*', function (\Illuminate\View\View $view) {
            $configs = Auth::check() && Auth::user()->group ? Auth::user()->group->configs : Group::getGuestConfigs();
            $view->with('groupConfigs', $configs);
        });
    }
}
