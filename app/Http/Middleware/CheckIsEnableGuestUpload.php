<?php

namespace App\Http\Middleware;

use App\Enums\ConfigKey;
use App\Http\Result;
use App\Utils;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsEnableGuestUpload
{
    use Result;

    public function handle(Request $request, Closure $next)
    {
        // 检测是否启用了游客上传，未启用、未登录情况下跳转至登录页面
        if (! Utils::config(ConfigKey::IsAllowGuestUpload) && Auth::guest()) {
            return redirect('login');
        }

        return $next($request);
    }
}
