<?php

namespace App\Http\Middleware;

use App\Enums\ConfigKey;
use App\Http\Result;
use App\Utils;
use Closure;
use Illuminate\Http\Request;

class CheckIsEnableRegistration
{
    use Result;

    public function handle(Request $request, Closure $next)
    {
        if (! Utils::config(ConfigKey::IsEnableRegistration)) {
            if ($request->expectsJson()) {
                return $this->fail('站点管理员关闭了注册功能')->setStatusCode(403);
            }
            abort(404);
        }

        return $next($request);
    }
}
