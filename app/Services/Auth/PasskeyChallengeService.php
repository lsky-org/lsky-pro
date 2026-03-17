<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Models\WebauthnCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class PasskeyChallengeService
{
    private const REGISTER_SESSION_KEY = 'passkey.registration';
    private const AUTHENTICATION_SESSION_KEY = 'passkey.authentication';
    private const CEREMONY_TTL_SECONDS = 300;

    public function __construct(
        private readonly PasskeyWebauthnAdapter $adapter,
        private readonly AuthIdentityService $identityService,
        private readonly WebSessionAuthService $sessionAuth,
        private readonly AuthIdentityGovernanceService $governanceService
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function status(Request $request, User $user): array
    {
        $pending = $this->pendingRegistration($request, $user);
        $credentials = $user->webauthnCredentials()
            ->orderByDesc('last_used_at')
            ->orderBy('id')
            ->get()
            ->map(fn (WebauthnCredential $credential) => $this->credentialPayload($credential))
            ->values()
            ->all();

        return [
            'foundation_ready' => true,
            'verification_enabled' => true,
            'registration' => [
                'pending' => $pending !== null,
                'expires_at' => $pending['expires_at'] ?? null,
                'options_route' => route('passkeys.register.options'),
                'verify_route' => route('passkeys.register.verify'),
            ],
            'authentication' => [
                'options_route' => route('passkeys.login.options'),
                'verify_route' => route('passkeys.login.verify'),
            ],
            'credential_count' => count($credentials),
            'credentials' => $credentials,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function issueRegistrationOptions(Request $request, User $user): array
    {
        $options = $this->adapter->createRegistrationOptions(
            $request,
            $user,
            $user->webauthnCredentials()
                ->orderBy('id')
                ->pluck('credential_id')
                ->all()
        );
        $challenge = trim((string) ($options['challenge'] ?? ''));
        if ($challenge === '') {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey 注册 challenge 生成失败。',
            ]);
        }

        $expiresAt = now()->addSeconds(self::CEREMONY_TTL_SECONDS);
        $payload = [
            'user_id' => $user->id,
            'challenge' => $challenge,
            'expires_at' => $expiresAt->toDateTimeString(),
        ];

        $request->session()->put(self::REGISTER_SESSION_KEY, $payload);

        return [
            'foundation_ready' => true,
            'verification_enabled' => true,
            'challenge_state' => [
                'pending' => true,
                'expires_at' => $payload['expires_at'],
            ],
            'verify_route' => route('passkeys.register.verify'),
            'options' => $options['options'],
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array<string, mixed>
     */
    public function completeRegistration(Request $request, User $user, array $payload): array
    {
        $ceremony = $this->consumePendingRegistration($request, $user);
        $result = $this->adapter->verifyRegistration($request, $payload, (string) $ceremony['challenge']);

        $credentialId = trim((string) ($result['credential_id'] ?? ''));
        if ($credentialId === '') {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey 注册返回了空的 credential id。',
            ]);
        }

        /** @var WebauthnCredential|null $existing */
        $existing = WebauthnCredential::query()
            ->where('credential_id', $credentialId)
            ->first();

        if ($existing && (int) $existing->user_id !== (int) $user->id) {
            throw ValidationException::withMessages([
                'passkey' => '该 Passkey 已绑定到其他账号。',
            ]);
        }

        $credential = $existing ?: new WebauthnCredential();
        $credential->user_id = $user->id;
        $credential->credential_id = $credentialId;
        $credential->label = $this->normalizeLabel(
            (string) ($payload['label'] ?? ''),
            $this->defaultCredentialLabel($user, $existing)
        );
        $credential->public_key = (string) ($result['public_key'] ?? '');
        $credential->transports = $this->normalizeTransports($payload['transports'] ?? data_get($payload, 'response.transports', []));
        $credential->aaguid = (string) ($result['aaguid'] ?? '');
        $credential->sign_count = (int) ($result['sign_count'] ?? 0);
        $credential->type = trim((string) ($result['type'] ?? 'public-key')) ?: 'public-key';
        $credential->meta = [
            'attestation_format' => (string) ($result['attestation_format'] ?? ''),
            'root_valid' => $result['root_valid'] ?? null,
            'user_present' => (bool) ($result['user_present'] ?? false),
            'user_verified' => (bool) ($result['user_verified'] ?? false),
            'is_backup_eligible' => (bool) ($result['is_backup_eligible'] ?? false),
            'is_backed_up' => (bool) ($result['is_backed_up'] ?? false),
        ];
        $credential->save();

        $user = $user->fresh();
        $this->identityService->touchPasskeyIdentity($user);
        $this->governanceService->record($user, 'passkey_registered', [
            'provider' => 'passkey',
            'label' => (string) ($credential->label ?: ''),
            'credential_id' => (string) $credential->credential_id,
        ]);

        return [
            'verification_enabled' => true,
            'credential_count' => $user->webauthnCredentials()->count(),
            'credential' => $this->credentialPayload($credential->fresh()),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function issueAuthenticationOptions(Request $request): array
    {
        $options = $this->adapter->createAuthenticationOptions($request);
        $challenge = trim((string) ($options['challenge'] ?? ''));
        if ($challenge === '') {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey 登录 challenge 生成失败。',
            ]);
        }

        $payload = [
            'challenge' => $challenge,
            'expires_at' => now()->addSeconds(self::CEREMONY_TTL_SECONDS)->toDateTimeString(),
        ];

        $request->session()->put(self::AUTHENTICATION_SESSION_KEY, $payload);

        return [
            'verification_enabled' => true,
            'challenge_state' => [
                'pending' => true,
                'expires_at' => $payload['expires_at'],
            ],
            'verify_route' => route('passkeys.login.verify'),
            'options' => $options['options'],
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array<string, mixed>
     */
    public function completeAuthentication(Request $request, array $payload): array
    {
        $ceremony = $this->consumeCeremony($request, self::AUTHENTICATION_SESSION_KEY);
        $credentialId = trim((string) ($payload['id'] ?? $payload['rawId'] ?? ''));
        if ($credentialId === '') {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey 登录缺少 credential id。',
            ]);
        }

        /** @var WebauthnCredential|null $credential */
        $credential = WebauthnCredential::query()
            ->with('user')
            ->where('credential_id', $credentialId)
            ->first();

        if (! $credential || ! $credential->user) {
            throw ValidationException::withMessages([
                'passkey' => '未找到可用的 Passkey 凭证。',
            ]);
        }

        $this->assertAuthenticationUserHandle($payload, $credential);
        $this->sessionAuth->ensureCanCreateSession($credential->user);

        $result = $this->adapter->verifyAuthentication(
            $request,
            $credential,
            $payload,
            (string) $ceremony['challenge']
        );

        $credential->sign_count = (int) ($result['sign_count'] ?? $credential->sign_count ?? 0);
        $credential->last_used_at = now();
        $credential->save();

        $this->sessionAuth->login($request, $credential->user, false);
        $this->identityService->touchPasskeyIdentity($credential->user);

        return [
            'verification_enabled' => true,
            'redirect_to' => route('dashboard'),
            'credential' => $this->credentialPayload($credential->fresh()),
            'user' => [
                'id' => (int) $credential->user->id,
                'name' => (string) $credential->user->name,
                'email' => (string) $credential->user->email,
            ],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function renameCredential(User $user, WebauthnCredential $credential, string $label): array
    {
        $this->assertCredentialOwnership($user, $credential);

        $credential->label = $this->normalizeLabel($label, '');
        if ($credential->label === '') {
            throw ValidationException::withMessages([
                'label' => 'Passkey 名称不能为空。',
            ]);
        }

        $credential->save();
        $this->governanceService->record($user, 'passkey_renamed', [
            'provider' => 'passkey',
            'label' => (string) ($credential->label ?: ''),
            'credential_id' => (string) $credential->credential_id,
        ]);

        return [
            'credential' => $this->credentialPayload($credential->fresh()),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function removeCredential(User $user, WebauthnCredential $credential): array
    {
        $this->assertCredentialOwnership($user, $credential);
        $context = [
            'provider' => 'passkey',
            'label' => (string) ($credential->label ?: ''),
            'credential_id' => (string) $credential->credential_id,
        ];

        $credential->delete();
        $user = $user->fresh();
        $this->identityService->removePasskeyIdentityIfUnused($user);
        $this->governanceService->record($user, 'passkey_removed', $context);

        return [
            'credential_count' => $user->webauthnCredentials()->count(),
        ];
    }

    /**
     * @return array<string, mixed>|null
     */
    private function pendingRegistration(Request $request, User $user): ?array
    {
        $payload = $this->pendingCeremony($request, self::REGISTER_SESSION_KEY);

        if (! $payload || (int) ($payload['user_id'] ?? 0) !== (int) $user->id) {
            return null;
        }

        return $payload;
    }

    /**
     * @return array<string, mixed>
     */
    private function consumePendingRegistration(Request $request, User $user): array
    {
        $payload = $this->consumeCeremony($request, self::REGISTER_SESSION_KEY);
        if ((int) ($payload['user_id'] ?? 0) !== (int) $user->id) {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey 注册 challenge 与当前账号不匹配。',
            ]);
        }

        return $payload;
    }

    /**
     * @return array<string, mixed>|null
     */
    private function pendingCeremony(Request $request, string $sessionKey): ?array
    {
        $payload = $request->session()->get($sessionKey);
        if (! is_array($payload)) {
            return null;
        }

        $expiresAt = $this->parseExpiry($payload['expires_at'] ?? null);
        if (! $expiresAt || now()->greaterThan($expiresAt)) {
            $request->session()->forget($sessionKey);

            return null;
        }

        return $payload;
    }

    /**
     * @return array<string, mixed>
     */
    private function consumeCeremony(Request $request, string $sessionKey): array
    {
        $payload = $this->pendingCeremony($request, $sessionKey);
        if (! $payload) {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey challenge 不存在或已过期，请刷新后重试。',
            ]);
        }

        $request->session()->forget($sessionKey);

        return $payload;
    }

    private function parseExpiry(mixed $value): ?Carbon
    {
        $value = trim((string) $value);
        if ($value === '') {
            return null;
        }

        try {
            return Carbon::parse($value);
        } catch (\Throwable) {
            return null;
        }
    }

    private function assertAuthenticationUserHandle(array $payload, WebauthnCredential $credential): void
    {
        $encodedUserHandle = trim((string) data_get($payload, 'response.userHandle', ''));
        if ($encodedUserHandle === '') {
            return;
        }

        $decoded = $this->decodeBase64Url($encodedUserHandle);
        if ((string) $credential->user_id !== $decoded) {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey user handle 与账号不匹配。',
            ]);
        }
    }

    private function assertCredentialOwnership(User $user, WebauthnCredential $credential): void
    {
        if ((int) $credential->user_id !== (int) $user->id) {
            throw ValidationException::withMessages([
                'passkey' => '无权操作该 Passkey 凭证。',
            ]);
        }
    }

    /**
     * @param  mixed  $value
     * @return array<int, string>
     */
    private function normalizeTransports(mixed $value): array
    {
        $transports = is_array($value) ? $value : [];

        return collect($transports)
            ->map(fn ($transport) => trim((string) $transport))
            ->filter(fn (string $transport) => $transport !== '')
            ->values()
            ->all();
    }

    private function normalizeLabel(string $label, string $fallback): string
    {
        $label = trim($label);
        if ($label === '') {
            $label = $fallback;
        }

        return mb_substr($label, 0, 120);
    }

    private function defaultCredentialLabel(User $user, ?WebauthnCredential $existing = null): string
    {
        if ($existing && filled($existing->label)) {
            return (string) $existing->label;
        }

        return 'Passkey '.($user->webauthnCredentials()->count() + 1);
    }

    /**
     * @return array<string, mixed>
     */
    private function credentialPayload(WebauthnCredential $credential): array
    {
        return [
            'id' => (int) $credential->id,
            'credential_id' => (string) $credential->credential_id,
            'label' => (string) ($credential->label ?: ''),
            'type' => (string) ($credential->type ?: 'public-key'),
            'transports' => (array) ($credential->transports ?? []),
            'last_used_at' => optional($credential->last_used_at)->toDateTimeString(),
            'created_at' => optional($credential->created_at)->toDateTimeString(),
            'update_route' => route('passkeys.credentials.update', ['credential' => $credential->id]),
            'delete_route' => route('passkeys.credentials.destroy', ['credential' => $credential->id]),
        ];
    }

    private function decodeBase64Url(string $value): string
    {
        $decoded = base64_decode(strtr($value, '-_', '+/').str_repeat('=', (4 - strlen($value) % 4) % 4), true);
        if ($decoded === false) {
            throw ValidationException::withMessages([
                'passkey' => 'Passkey 返回了非法的 user handle。',
            ]);
        }

        return $decoded;
    }
}
