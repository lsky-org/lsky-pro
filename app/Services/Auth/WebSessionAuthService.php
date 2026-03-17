<?php

namespace App\Services\Auth;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class WebSessionAuthService
{
    public function ensureCanCreateSession(?User $user): void
    {
        if (! $user) {
            return;
        }

        if ((int) $user->status === UserStatus::Frozen) {
            throw ValidationException::withMessages([
                'email' => 'This account has been frozen.',
            ]);
        }
    }

    public function login(Request $request, User $user, bool $remember = false): void
    {
        $this->ensureCanCreateSession($user);

        Auth::login($user, $remember);
        $request->session()->regenerate();
    }
}
