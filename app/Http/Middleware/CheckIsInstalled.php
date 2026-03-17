<?php

namespace App\Http\Middleware;

use App\Http\Result;
use App\Services\InstallStateService;
use Closure;
use Illuminate\Http\Request;

class CheckIsInstalled
{
    use Result;

    public function handle(Request $request, Closure $next, InstallStateService $installState)
    {
        if (! $installState->isInstalled()) {
            if (! $request->expectsJson()) {
                return redirect('install');
            } else {
                return $this->fail('Application is not installed yet.');
            }
        }

        return $next($request);
    }
}
