<?php

namespace App\Http\Middleware;

use App\Enums\ConfigKey;
use App\Http\Result;
use App\Utils;
use Closure;
use Illuminate\Http\Request;

class CheckIsEnableApi
{
    use Result;

    public function handle(Request $request, Closure $next)
    {
        if (! Utils::config(ConfigKey::IsEnableApi)) {
            if ($request->expectsJson()) {
                return $this->fail('管理员未启用 API')->setStatusCode(403);
            }
            abort(404);
        }

        return $next($request);
    }
}
