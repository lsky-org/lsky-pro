<?php

namespace App\Http\Middleware;

use App\Enums\ConfigKey;
use App\Http\Result;
use App\Utils;
use Closure;
use Illuminate\Http\Request;

class CheckIsEnableGallery
{
    use Result;

    public function handle(Request $request, Closure $next)
    {
        if (! Utils::config(ConfigKey::IsEnableGallery)) {
            if ($request->expectsJson()) {
                return $this->fail('管理员未启用画廊功能')->setStatusCode(403);
            }
            abort(404);
        }

        return $next($request);
    }
}
