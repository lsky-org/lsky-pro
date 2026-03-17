<?php

namespace App\Http\Controllers\Auth;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Auth\AuthIdentityService;
use App\Services\Auth\WebSessionAuthService;
use App\Utils;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class SocialAuthController extends Controller
{
    private const LINK_SESSION_KEY = 'oauth.linking';
    private const LINK_TTL_SECONDS = 300;

    /**
     * @return array<string, bool>
     */
    public static function providersStatus(): array
    {
        $providers = self::supportedProviders();
        $status = [];

        foreach ($providers as $provider) {
            $status[$provider] = self::isProviderConfigured($provider);
        }

        return $status;
    }

    public static function isProviderAvailable(string $provider): bool
    {
        return in_array($provider, self::supportedProviders(), true) && self::isProviderConfigured($provider);
    }

    public function redirect(string $provider): RedirectResponse
    {
        if (!self::isProviderAvailable($provider)) {
            return redirect()->route('login')->withErrors([
                'email' => sprintf('%s 登录暂不可用，请联系管理员配置后再试', ucfirst($provider)),
            ]);
        }

        try {
            return Socialite::driver($provider)->redirect();
        } catch (Throwable $e) {
            Log::warning('Social auth redirect failed.', [
                'provider' => $provider,
                'error' => $e->getMessage(),
            ]);

            return redirect()->route('login')->withErrors([
                'email' => sprintf('%s 登录暂不可用，请稍后重试', ucfirst($provider)),
            ]);
        }
    }

    public function redirectForLink(Request $request, string $provider): RedirectResponse
    {
        if (! self::isProviderAvailable($provider)) {
            return $this->redirectToSettingsNotice('error', sprintf('%s 绑定暂不可用，请联系管理员配置后再试', ucfirst($provider)));
        }

        /** @var User $user */
        $user = $request->user();
        $request->session()->put(self::LINK_SESSION_KEY, [
            'provider' => $provider,
            'user_id' => (int) $user->id,
            'expires_at' => now()->addSeconds(self::LINK_TTL_SECONDS)->toDateTimeString(),
        ]);

        try {
            return Socialite::driver($provider)->redirect();
        } catch (Throwable $e) {
            Log::warning('Social identity link redirect failed.', [
                'provider' => $provider,
                'user_id' => $user->id,
                'error' => $e->getMessage(),
            ]);

            return $this->redirectToSettingsNotice('error', sprintf('%s 绑定暂不可用，请稍后重试', ucfirst($provider)));
        }
    }

    public function callback(Request $request, string $provider): RedirectResponse
    {
        $pendingLink = $this->pendingLinkIntent($request, $provider);

        if (!self::isProviderAvailable($provider)) {
            return $pendingLink
                ? $this->redirectToSettingsNotice('error', sprintf('%s 绑定暂不可用，请联系管理员配置后再试', ucfirst($provider)))
                : redirect()->route('login')->withErrors([
                    'email' => sprintf('%s 登录暂不可用，请联系管理员配置后再试', ucfirst($provider)),
                ]);
        }

        $identityService = app(AuthIdentityService::class);
        $sessionAuth = app(WebSessionAuthService::class);

        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (Throwable $e) {
            Log::warning($pendingLink ? 'Social identity link callback failed.' : 'Social auth callback failed.', [
                'provider' => $provider,
                'error' => $e->getMessage(),
            ]);

            return $pendingLink
                ? $this->redirectToSettingsNotice('error', sprintf('%s 绑定失败，请重试', ucfirst($provider)))
                : redirect()->route('login')->withErrors([
                    'email' => sprintf('%s 登录失败，请重试', ucfirst($provider)),
                ]);
        }

        $providerId = (string) ($socialUser->getId() ?: '');
        $email = (string) ($socialUser->getEmail() ?: '');
        if ($providerId === '' || $email === '') {
            return $pendingLink
                ? $this->redirectToSettingsNotice('error', '第三方账户未返回可用邮箱，请更换账号或改用其他方式绑定')
                : redirect()->route('login')->withErrors(['email' => '第三方账户未返回可用邮箱，请更换账号']);
        }

        if ($pendingLink) {
            $payload = $this->consumeLinkIntent($request, $provider);
            /** @var User|null $user */
            $user = $request->user();
            if (! $user || (int) $user->id !== (int) ($payload['user_id'] ?? 0)) {
                return redirect()->route('login')->withErrors([
                    'email' => '第三方绑定会话已失效，请重新登录后再试。',
                ]);
            }

            try {
                $identityService->linkSocialIdentity(
                    $user,
                    $provider,
                    $providerId,
                    $email,
                    (string) ($socialUser->getAvatar() ?: ''),
                    [
                        'name' => (string) ($socialUser->getName() ?: ''),
                        'email' => $email,
                        'source' => 'settings-link',
                    ]
                );
            } catch (ValidationException $e) {
                return $this->redirectToSettingsNotice('error', $this->firstValidationMessage($e));
            }

            return $this->redirectToSettingsNotice('success', sprintf('%s 已绑定到当前账户。', ucfirst($provider)));
        }

        if ($request->user()) {
            return $this->redirectToSettingsNotice('error', '未找到待完成的第三方绑定请求。');
        }

        $user = $identityService->resolveUserForSocialLogin($provider, $providerId, $email);

        if (! $user) {
            if (User::query()->where('email', $email)->exists()) {
                return redirect()->route('login')->withErrors([
                    'email' => '该邮箱已存在，请先使用现有方式登录后再绑定第三方身份。',
                ]);
            }

            if (!Utils::config(ConfigKey::IsEnableRegistration)) {
                return redirect()->route('login')->withErrors(['email' => '站点已关闭注册']);
            }
            $user = User::query()->create([
                'name' => (string) ($socialUser->getName() ?: Str::before($email, '@') ?: 'User'),
                'email' => $email,
                'password' => Hash::make(Str::random(40)),
                'configs' => [
                    User::CONFIG_PASSWORD_LOGIN_READY => false,
                ],
                'registered_ip' => request()->ip(),
                'status' => 1,
                'email_verified_at' => now(),
            ]);
        } else {
            try {
                $sessionAuth->ensureCanCreateSession($user);
            } catch (ValidationException $e) {
                return redirect()->route('login')->withErrors($e->errors());
            }
        }

        $identityService->linkSocialIdentity(
            $user,
            $provider,
            $providerId,
            $email,
            (string) ($socialUser->getAvatar() ?: ''),
            [
                'name' => (string) ($socialUser->getName() ?: ''),
                'email' => $email,
            ]
        );

        try {
            $sessionAuth->login(request(), $user, false);
        } catch (ValidationException $e) {
            return redirect()->route('login')->withErrors($e->errors());
        }

        return redirect()->intended(route('dashboard'));
    }

    public function unlink(Request $request, string $provider, AuthIdentityService $identityService): Response
    {
        if (! in_array($provider, self::supportedProviders(), true)) {
            return $this->fail('不支持的第三方身份。');
        }

        /** @var User $user */
        $user = $request->user();

        try {
            $identityService->unlinkSocialIdentity($user, $provider);
        } catch (ValidationException $e) {
            return $this->fail($this->firstValidationMessage($e));
        } catch (Throwable $e) {
            Log::warning('Social identity unlink failed.', [
                'provider' => $provider,
                'user_id' => $user->id,
                'error' => $e->getMessage(),
            ]);

            return $this->fail(config('app.debug') ? $e->getMessage() : sprintf('%s 解绑失败，请稍后重试', ucfirst($provider)));
        }

        return $this->success('success', [
            'provider' => $provider,
        ]);
    }

    /**
     * @return array<int, string>
     */
    private static function supportedProviders(): array
    {
        return ['google', 'github'];
    }

    private static function isProviderConfigured(string $provider): bool
    {
        $config = config("services.{$provider}");

        if (! is_array($config)) {
            return false;
        }

        return filled($config['client_id'] ?? null)
            && filled($config['client_secret'] ?? null)
            && filled($config['redirect'] ?? null);
    }

    /**
     * @return array<string, mixed>|null
     */
    private function pendingLinkIntent(Request $request, string $provider): ?array
    {
        $payload = $request->session()->get(self::LINK_SESSION_KEY);
        if (! is_array($payload)) {
            return null;
        }

        if (($payload['provider'] ?? null) !== $provider) {
            $request->session()->forget(self::LINK_SESSION_KEY);

            return null;
        }

        $expiresAt = trim((string) ($payload['expires_at'] ?? ''));
        try {
            $isExpired = $expiresAt === '' || Carbon::parse($expiresAt)->isPast();
        } catch (Throwable $e) {
            $isExpired = true;
        }

        if ($isExpired) {
            $request->session()->forget(self::LINK_SESSION_KEY);

            return null;
        }

        return $payload;
    }

    /**
     * @return array<string, mixed>
     */
    private function consumeLinkIntent(Request $request, string $provider): array
    {
        $payload = $this->pendingLinkIntent($request, $provider);
        $request->session()->forget(self::LINK_SESSION_KEY);

        return is_array($payload) ? $payload : [];
    }

    private function redirectToSettingsNotice(string $type, string $message): RedirectResponse
    {
        return redirect()
            ->route('settings')
            ->with('settings_identity_notice', [
                'type' => $type,
                'message' => $message,
            ]);
    }

    private function firstValidationMessage(ValidationException $e): string
    {
        foreach ($e->errors() as $messages) {
            if (is_array($messages) && isset($messages[0]) && is_string($messages[0])) {
                return $messages[0];
            }
        }

        return '请求验证失败。';
    }
}
