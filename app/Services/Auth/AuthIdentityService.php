<?php

namespace App\Services\Auth;

use App\Models\AuthIdentity;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthIdentityService
{
    public function __construct(
        private readonly AuthIdentityGovernanceService $governanceService
    ) {
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function socialIdentityMatrix(User $user, array $providerStatuses): array
    {
        $providers = ['google', 'github'];
        $identities = $user->authIdentities()
            ->whereIn('provider', $providers)
            ->orderByDesc('last_used_at')
            ->orderBy('id')
            ->get()
            ->keyBy('provider');

        $matrix = [];
        foreach ($providers as $provider) {
            /** @var AuthIdentity|null $identity */
            $identity = $identities->get($provider);
            $disconnect = $this->disconnectState($user, $provider, $identity);
            $label = $provider === 'github' ? 'GitHub' : ucfirst($provider);

            $matrix[$provider] = [
                'provider' => $provider,
                'label' => $label,
                'available' => (bool) ($providerStatuses[$provider] ?? false),
                'linked' => $identity !== null,
                'provider_email' => (string) ($identity?->provider_email ?: ''),
                'avatar_url' => (string) ($identity?->avatar_url ?: ''),
                'last_used_at' => optional($identity?->last_used_at)->toDateTimeString(),
                'created_at' => optional($identity?->created_at)->toDateTimeString(),
                'is_legacy_snapshot' => $identity !== null
                    && $user->provider === $identity->provider
                    && $user->provider_id === $identity->provider_subject,
                'connect_route' => (($providerStatuses[$provider] ?? false) && ! $identity)
                    ? route('oauth.link.redirect', ['provider' => $provider])
                    : null,
                'disconnect_route' => $identity
                    ? route('oauth.link.destroy', ['provider' => $provider])
                    : null,
                'can_disconnect' => $disconnect['allowed'],
                'disconnect_block_reason' => (string) $disconnect['reason'],
                'action_mode' => $identity
                    ? ($disconnect['allowed'] ? 'disconnect' : 'blocked')
                    : (($providerStatuses[$provider] ?? false) ? 'connect' : 'unavailable'),
                'action_label' => $identity
                    ? ($disconnect['allowed'] ? sprintf('解绑 %s', $label) : sprintf('%s 暂不可解绑', $label))
                    : (($providerStatuses[$provider] ?? false) ? sprintf('绑定 %s', $label) : '站点未接入'),
            ];
        }

        return $matrix;
    }

    public function resolveUserForSocialLogin(string $provider, string $providerSubject, string $email): ?User
    {
        $identityUser = AuthIdentity::query()
            ->where('provider', $provider)
            ->where('provider_subject', $providerSubject)
            ->with('user')
            ->first()?->user;

        if ($identityUser) {
            return $identityUser;
        }

        return User::query()
            ->where('provider', $provider)
            ->where('provider_id', $providerSubject)
            ->first();
    }

    public function linkSocialIdentity(
        User $user,
        string $provider,
        string $providerSubject,
        string $email,
        ?string $avatarUrl = null,
        array $meta = []
    ): AuthIdentity {
        $source = (string) ($meta['source'] ?? 'social-login');
        $identityBySubject = AuthIdentity::query()
            ->where('provider', $provider)
            ->where('provider_subject', $providerSubject)
            ->first();

        if ($identityBySubject && (int) $identityBySubject->user_id !== (int) $user->id) {
            throw ValidationException::withMessages([
                'email' => '该第三方身份已绑定到其他账号。',
            ]);
        }

        /** @var AuthIdentity|null $identity */
        $identity = AuthIdentity::query()
            ->where('user_id', $user->id)
            ->where('provider', $provider)
            ->first();
        $wasLinkedBefore = $identity !== null
            || ($identityBySubject && (int) $identityBySubject->user_id === (int) $user->id);

        if (! $identity) {
            $identity = $identityBySubject ?: new AuthIdentity();
            $identity->user_id = $user->id;
            $identity->provider = $provider;
        }

        $identity->provider_subject = $providerSubject;
        $identity->provider_email = $email;
        $identity->avatar_url = $avatarUrl ?: null;
        $identity->meta = $meta;
        $identity->last_used_at = now();
        $identity->save();

        $this->syncLegacyProviderSnapshot($user, $identity, $avatarUrl);
        if (! $wasLinkedBefore || $source === 'settings-link') {
            $this->governanceService->record($user, 'social_linked', [
                'provider' => $provider,
                'provider_email' => $email,
                'source' => $source,
            ]);
        }

        return $identity;
    }

    public function touchPasskeyIdentity(User $user): AuthIdentity
    {
        /** @var AuthIdentity $identity */
        $identity = AuthIdentity::query()->updateOrCreate(
            [
                'user_id' => $user->id,
                'provider' => 'passkey',
            ],
            [
                'provider_subject' => 'user:'.$user->id,
                'provider_email' => $user->email,
                'avatar_url' => null,
                'meta' => [
                    'credential_count' => $user->webauthnCredentials()->count(),
                ],
                'last_used_at' => now(),
            ]
        );

        return $identity;
    }

    public function removePasskeyIdentityIfUnused(User $user): void
    {
        if ($user->webauthnCredentials()->exists()) {
            $this->touchPasskeyIdentity($user);

            return;
        }

        $user->authIdentities()
            ->where('provider', 'passkey')
            ->delete();
    }

    public function unlinkIdentity(User $user, string $provider): void
    {
        /** @var AuthIdentity|null $identity */
        $identity = $user->authIdentities()
            ->where('provider', $provider)
            ->first();

        $user->authIdentities()
            ->where('provider', $provider)
            ->delete();

        if ($provider !== 'passkey' && $user->provider === $provider) {
            $this->refreshLegacyProviderSnapshot($user);
        }

        if ($provider !== 'passkey' && $identity) {
            $this->governanceService->record($user, 'social_unlinked', [
                'provider' => $provider,
                'provider_email' => (string) ($identity->provider_email ?: ''),
            ]);
        }
    }

    public function unlinkSocialIdentity(User $user, string $provider): void
    {
        /** @var AuthIdentity|null $identity */
        $identity = $user->authIdentities()
            ->where('provider', $provider)
            ->first();

        if (! $identity) {
            $this->governanceService->record($user, 'social_unlink_blocked', [
                'provider' => $provider,
                'reason' => '当前账户没有绑定该第三方身份。',
            ], 'blocked');
            throw ValidationException::withMessages([
                'identity' => '当前账户没有绑定该第三方身份。',
            ]);
        }

        $disconnect = $this->disconnectState($user, $provider, $identity);
        if (! $disconnect['allowed']) {
            $this->governanceService->record($user, 'social_unlink_blocked', [
                'provider' => $provider,
                'reason' => $disconnect['reason'],
            ], 'blocked');
            throw ValidationException::withMessages([
                'identity' => $disconnect['reason'],
            ]);
        }

        $this->unlinkIdentity($user, $provider);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function statusPayload(User $user): array
    {
        return $user->authIdentities()
            ->orderByDesc('last_used_at')
            ->orderBy('id')
            ->get()
            ->map(function (AuthIdentity $identity) use ($user): array {
                return [
                    'provider' => (string) $identity->provider,
                    'provider_subject_masked' => $this->maskProviderSubject((string) $identity->provider_subject),
                    'provider_email' => (string) ($identity->provider_email ?: ''),
                    'avatar_url' => (string) ($identity->avatar_url ?: ''),
                    'last_used_at' => optional($identity->last_used_at)->toDateTimeString(),
                    'created_at' => optional($identity->created_at)->toDateTimeString(),
                    'is_legacy_snapshot' => $user->provider === $identity->provider
                        && $user->provider_id === $identity->provider_subject,
                ];
            })
            ->values()
            ->all();
    }

    private function syncLegacyProviderSnapshot(User $user, AuthIdentity $identity, ?string $avatarUrl = null): void
    {
        $user->provider = (string) $identity->provider;
        $user->provider_id = (string) $identity->provider_subject;
        if ($avatarUrl) {
            $user->provider_avatar = $avatarUrl;
        } elseif (filled($identity->avatar_url)) {
            $user->provider_avatar = (string) $identity->avatar_url;
        }
        if (! $user->email_verified_at) {
            $user->email_verified_at = now();
        }
        $user->save();
    }

    private function refreshLegacyProviderSnapshot(User $user): void
    {
        /** @var AuthIdentity|null $snapshot */
        $snapshot = $user->authIdentities()
            ->where('provider', '!=', 'passkey')
            ->orderByDesc('last_used_at')
            ->orderByDesc('id')
            ->first();

        if (! $snapshot) {
            $user->provider = null;
            $user->provider_id = null;
            $user->provider_avatar = null;
            $user->save();

            return;
        }

        $this->syncLegacyProviderSnapshot($user, $snapshot, $snapshot->avatar_url);
    }

    /**
     * @return array{allowed: bool, reason: string}
     */
    private function disconnectState(User $user, string $provider, ?AuthIdentity $identity = null): array
    {
        if (! $identity) {
            return [
                'allowed' => false,
                'reason' => '当前账户没有绑定该第三方身份。',
            ];
        }

        if ($user->hasPasswordLoginReady()) {
            return [
                'allowed' => true,
                'reason' => '',
            ];
        }

        if ($user->webauthnCredentials()->exists()) {
            return [
                'allowed' => true,
                'reason' => '',
            ];
        }

        $hasOtherSocialIdentity = $user->authIdentities()
            ->where('provider', '!=', $provider)
            ->where('provider', '!=', 'passkey')
            ->exists();

        if ($hasOtherSocialIdentity) {
            return [
                'allowed' => true,
                'reason' => '',
            ];
        }

        return [
            'allowed' => false,
            'reason' => '请先设置密码、绑定其他第三方身份或登记 Passkey，再解绑最后一个第三方登录。',
        ];
    }

    private function maskProviderSubject(string $providerSubject): string
    {
        $trimmed = trim($providerSubject);
        if ($trimmed === '') {
            return '';
        }

        if (mb_strlen($trimmed) <= 6) {
            return str_repeat('*', mb_strlen($trimmed));
        }

        return mb_substr($trimmed, 0, 3).'***'.mb_substr($trimmed, -3);
    }
}
