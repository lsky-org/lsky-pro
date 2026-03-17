<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasskeyAuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Middleware\CheckIsEnableRegistration;
use Illuminate\Support\Facades\Route;

Route::get('/register', [
    RegisteredUserController::class, 'create'
])->middleware('guest')->middleware(CheckIsEnableRegistration::class)->name('register');

Route::post('/register', [
    RegisteredUserController::class, 'store'
])->middleware('guest')->middleware(CheckIsEnableRegistration::class);

Route::get('/login', [
    AuthenticatedSessionController::class, 'create',
])->middleware('guest')->name('login');

Route::post('/login', [
    AuthenticatedSessionController::class, 'store'
])->middleware('guest');

Route::get('/auth/{provider}/redirect', [
    SocialAuthController::class, 'redirect',
])->middleware('guest')->whereIn('provider', ['google', 'github'])->name('oauth.redirect');

Route::get('/auth/{provider}/callback', [
    SocialAuthController::class, 'callback',
])->whereIn('provider', ['google', 'github'])->name('oauth.callback');

Route::post('/auth/passkeys/login/options', [
    PasskeyAuthController::class, 'loginOptions',
])->middleware(['guest', 'throttle:10,1'])->name('passkeys.login.options');

Route::post('/auth/passkeys/login/verify', [
    PasskeyAuthController::class, 'loginVerify',
])->middleware(['guest', 'throttle:10,1'])->name('passkeys.login.verify');

Route::get('/forgot-password', [
    PasswordResetLinkController::class, 'create',
])->middleware('guest')->name('password.request');

Route::post('/forgot-password', [
    PasswordResetLinkController::class, 'store',
])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [
    NewPasswordController::class, 'create',
])->middleware('guest')->name('password.reset');

Route::post('/reset-password', [
    NewPasswordController::class, 'store',
])->middleware('guest')->name('password.update');

Route::get('/verify-email', [
    EmailVerificationPromptController::class, '__invoke',
])->middleware('auth')->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [
    VerifyEmailController::class, '__invoke',
])->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

Route::post('/email/verification-notification', [
    EmailVerificationNotificationController::class, 'store',
])->middleware(['auth', 'throttle:3,1'])->name('verification.send');

Route::get('/confirm-password', [
    ConfirmablePasswordController::class, 'show',
])->middleware('auth')->name('password.confirm');

Route::post('/confirm-password', [
    ConfirmablePasswordController::class, 'store',
])->middleware('auth');

Route::post('/logout', [
    AuthenticatedSessionController::class, 'destroy',
])->middleware('auth')->name('logout');

Route::middleware('auth')->prefix('/auth/passkeys')->group(function () {
    Route::get('/status', [
        PasskeyAuthController::class, 'status',
    ])->name('passkeys.status');

    Route::post('/register/options', [
        PasskeyAuthController::class, 'registerOptions',
    ])->middleware('throttle:10,1')->name('passkeys.register.options');

    Route::post('/register/verify', [
        PasskeyAuthController::class, 'registerVerify',
    ])->middleware('throttle:10,1')->name('passkeys.register.verify');

    Route::patch('/credentials/{credential}', [
        PasskeyAuthController::class, 'updateCredential',
    ])->middleware('throttle:20,1')->name('passkeys.credentials.update');

    Route::delete('/credentials/{credential}', [
        PasskeyAuthController::class, 'destroyCredential',
    ])->middleware('throttle:20,1')->name('passkeys.credentials.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/auth/{provider}/link/redirect', [
        SocialAuthController::class, 'redirectForLink',
    ])->whereIn('provider', ['google', 'github'])->name('oauth.link.redirect');

    Route::delete('/auth/identities/{provider}', [
        SocialAuthController::class, 'unlink',
    ])->whereIn('provider', ['google', 'github'])->name('oauth.link.destroy');
});

// Two-Factor Authentication
use App\Http\Controllers\Auth\TwoFactorController;

Route::get('/two-factor/challenge', [TwoFactorController::class, 'challenge'])
    ->middleware('guest')->name('two-factor.challenge');

Route::post('/two-factor/verify', [TwoFactorController::class, 'verify'])
    ->middleware(['guest', 'throttle:5,1'])->name('two-factor.verify');

Route::middleware('auth')->prefix('two-factor')->name('two-factor.')->group(function () {
    Route::get('/setup', [TwoFactorController::class, 'setup'])->name('setup');
    Route::post('/enable', [TwoFactorController::class, 'enable'])->name('enable');
    Route::post('/disable', [TwoFactorController::class, 'disable'])->name('disable');
});
