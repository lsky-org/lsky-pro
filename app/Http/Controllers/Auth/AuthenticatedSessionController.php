<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $user = Auth::user();

        // If 2FA is enabled, redirect to challenge page
        if ($user->two_factor_enabled && $user->two_factor_secret) {
            $userId = $user->id;
            $remember = $request->boolean('remember');

            Auth::logout();

            $request->session()->put('2fa:user_id', $userId);
            $request->session()->put('2fa:remember', $remember);
            $request->session()->regenerate();

            return redirect()->route('two-factor.challenge');
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
