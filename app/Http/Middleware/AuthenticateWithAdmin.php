<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateWithAdmin extends Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        /** @var User $user */
        $user = Auth::user();

        if (! $user->is_adminer) {
            return abort(403);
        }

        return $next($request);
    }
}
