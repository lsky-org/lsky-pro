<?php

namespace App\Services\Auth;

use App\Models\AuthIdentityEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

class AuthIdentityGovernanceService
{
    public function payload(User $user, array $identityMatrix, array $passkeys, array $legacy): array
    {
        $passwordReady = $user->hasPasswordLoginReady();
        $passkeyCount = (int) ($passkeys['credential_count'] ?? 0);
        $passkeyLastUsedAt = collect((array) ($passkeys['credentials'] ?? []))
            ->pluck('last_used_at')
            ->filter()
            ->sortDesc()
            ->first();

        $methodInventory = collect();
        $passwordEvent = $this->latestPasswordEvent($user);
        $passwordUpdatedAt = optional($passwordEvent?->created_at)->toDateTimeString();

        $methodInventory->push([
            'provider' => 'password',
            'label' => '密码',
            'ready' => $passwordReady,
            'kind' => 'local',
            'last_used_at' => null,
            'last_changed_at' => $passwordUpdatedAt,
            'detail' => $passwordReady
                ? ($passwordUpdatedAt
                    ? sprintf('本地密码可用，最近一次密码变更时间：%s。', $passwordUpdatedAt)
                    : '本地密码可用，可作为当前账户的恢复路径。')
                : '当前账户未检测到可用的本地密码恢复路径。',
        ]);

        foreach (['google', 'github'] as $provider) {
            $identity = $identityMatrix[$provider] ?? null;
            if (! is_array($identity) || ! ($identity['linked'] ?? false)) {
                continue;
            }

            $methodInventory->push([
                'provider' => $provider,
                'label' => (string) ($identity['label'] ?? ucfirst($provider)),
                'ready' => true,
                'kind' => 'social',
                'last_used_at' => $identity['last_used_at'] ?? null,
                'last_changed_at' => $identity['created_at'] ?? null,
                'detail' => $identity['provider_email']
                    ? sprintf('当前已绑定 %s：%s。', $identity['label'] ?? ucfirst($provider), $identity['provider_email'])
                    : sprintf('当前已绑定 %s，但第三方未返回邮箱。', $identity['label'] ?? ucfirst($provider)),
            ]);
        }

        $methodInventory->push([
            'provider' => 'passkey',
            'label' => 'Passkey',
            'ready' => $passkeyCount > 0,
            'kind' => 'webauthn',
            'last_used_at' => $passkeyLastUsedAt,
            'last_changed_at' => $this->latestEventAt($user, ['passkey_registered', 'passkey_renamed', 'passkey_removed']),
            'detail' => $passkeyCount > 0
                ? sprintf('当前已登记 %d 个 Passkey 凭证。', $passkeyCount)
                : '当前还没有已登记的 Passkey 凭证。',
        ]);

        $readyMethods = $methodInventory->filter(fn (array $item): bool => (bool) ($item['ready'] ?? false))->values();
        $readyCount = $readyMethods->count();
        $recoveryLevel = $readyCount >= 2 ? 'resilient' : ($readyCount === 1 ? 'single_path' : 'critical');
        $recoveryLabel = $readyCount >= 2 ? '恢复路径充足' : ($readyCount === 1 ? '单路径风险' : '无可用恢复路径');
        $legacyConsistent = $this->legacySnapshotConsistent($legacy, $identityMatrix);

        $notices = collect();
        if ($readyCount <= 1) {
            $notices->push([
                'level' => 'warn',
                'code' => 'single_path',
                'message' => '当前账户只剩单一路径或没有额外恢复方式。建议补充密码、Passkey 或其他第三方身份，避免后续被锁死。',
            ]);
        }
        if (! $passwordReady) {
            $notices->push([
                'level' => 'info',
                'code' => 'password_missing',
                'message' => '当前账户没有可用的本地密码恢复路径。若第三方身份失效，后续恢复会更依赖其他登录方式。',
            ]);
        }
        if ($passkeyCount === 0) {
            $notices->push([
                'level' => 'info',
                'code' => 'passkey_missing',
                'message' => '当前账户还没有登记 Passkey。补一个设备凭证可以提升浏览器级恢复能力。',
            ]);
        }
        if (! $legacyConsistent) {
            $notices->push([
                'level' => 'warn',
                'code' => 'legacy_snapshot_drift',
                'message' => 'legacy provider snapshot 与新的多身份记录不一致。当前仍可兼容运行，但建议优先按新的身份表状态进行治理判断。',
            ]);
        }

        return [
            'recovery' => [
                'level' => $recoveryLevel,
                'label' => $recoveryLabel,
                'ready_method_count' => $readyCount,
                'ready_methods' => $readyMethods->pluck('label')->values()->all(),
                'detail' => $readyCount >= 2
                    ? sprintf('当前检测到 %d 条可用登录/恢复路径，账户治理处于相对安全状态。', $readyCount)
                    : ($readyCount === 1
                        ? '当前只剩 1 条可用登录路径。任何解绑、撤销或设备丢失都会显著增加锁死风险。'
                        : '当前没有检测到可用登录路径，这通常意味着数据异常或治理状态不一致。'),
            ],
            'legacy_snapshot' => [
                'provider' => (string) ($legacy['provider'] ?? ''),
                'provider_id_present' => (bool) ($legacy['provider_id_present'] ?? false),
                'consistent' => $legacyConsistent,
                'detail' => $legacyConsistent
                    ? 'legacy provider snapshot 与当前身份记录保持一致。'
                    : 'legacy provider snapshot 未能在当前身份记录中找到对应条目。',
            ],
            'method_inventory' => $methodInventory->values()->all(),
            'notices' => $notices->values()->all(),
            'recent_events' => $this->recentEvents($user),
        ];
    }

    public function record(
        User $user,
        string $eventType,
        array $context = [],
        string $status = 'success',
        ?int $actorUserId = null
    ): void {
        if (! Schema::hasTable('auth_identity_events')) {
            return;
        }

        $request = $this->currentRequest();
        AuthIdentityEvent::query()->create([
            'user_id' => $user->id,
            'actor_user_id' => $actorUserId ?? $user->id,
            'provider' => $this->normalizeProvider((string) ($context['provider'] ?? '')),
            'event_type' => $eventType,
            'status' => $status,
            'summary' => $this->buildSummary($eventType, $context),
            'context' => $context,
            'ip_address' => $request?->ip(),
            'user_agent' => $this->truncate((string) ($request?->userAgent() ?? ''), 500),
        ]);
    }

    private function recentEvents(User $user, int $limit = 8): array
    {
        if (! Schema::hasTable('auth_identity_events')) {
            return [];
        }

        return AuthIdentityEvent::query()
            ->where('user_id', $user->id)
            ->latest('id')
            ->limit($limit)
            ->get()
            ->map(fn (AuthIdentityEvent $event): array => $this->formatEvent($event))
            ->values()
            ->all();
    }

    private function latestPasswordEvent(User $user): ?AuthIdentityEvent
    {
        if (! Schema::hasTable('auth_identity_events')) {
            return null;
        }

        return AuthIdentityEvent::query()
            ->where('user_id', $user->id)
            ->whereIn('event_type', ['password_enabled', 'password_updated', 'password_admin_reset'])
            ->latest('id')
            ->first();
    }

    private function latestEventAt(User $user, array $eventTypes): ?string
    {
        if (! Schema::hasTable('auth_identity_events')) {
            return null;
        }

        return optional(
            AuthIdentityEvent::query()
                ->where('user_id', $user->id)
                ->whereIn('event_type', $eventTypes)
                ->latest('id')
                ->first()
        )->created_at?->toDateTimeString();
    }

    private function legacySnapshotConsistent(array $legacy, array $identityMatrix): bool
    {
        $provider = trim((string) ($legacy['provider'] ?? ''));
        if ($provider === '' || ! ($legacy['provider_id_present'] ?? false)) {
            return true;
        }

        $identity = $identityMatrix[$provider] ?? null;

        return is_array($identity) && (bool) ($identity['linked'] ?? false);
    }

    private function buildSummary(string $eventType, array $context): string
    {
        $provider = $this->providerLabel((string) ($context['provider'] ?? ''));
        $label = trim((string) ($context['label'] ?? ''));
        $email = trim((string) ($context['provider_email'] ?? ''));
        $reason = trim((string) ($context['reason'] ?? ''));

        return match ($eventType) {
            'social_linked' => $email !== ''
                ? sprintf('已绑定 %s：%s', $provider, $email)
                : sprintf('已绑定 %s 身份', $provider),
            'social_unlinked' => sprintf('已解绑 %s 身份', $provider),
            'social_unlink_blocked' => $reason !== ''
                ? sprintf('解绑 %s 被阻止：%s', $provider, $reason)
                : sprintf('解绑 %s 被阻止', $provider),
            'passkey_registered' => $label !== ''
                ? sprintf('已登记 Passkey：%s', $label)
                : '已登记新的 Passkey',
            'passkey_renamed' => $label !== ''
                ? sprintf('已重命名 Passkey：%s', $label)
                : '已更新 Passkey 名称',
            'passkey_removed' => $label !== ''
                ? sprintf('已移除 Passkey：%s', $label)
                : '已移除 Passkey',
            'password_enabled' => '已启用本地密码恢复路径',
            'password_updated' => '已更新本地密码',
            'password_admin_reset' => '管理员已重置本地密码',
            default => $eventType,
        };
    }

    private function formatEvent(AuthIdentityEvent $event): array
    {
        $presentation = $this->eventPresentation((string) $event->event_type);

        return [
            'provider' => (string) ($event->provider ?: ''),
            'provider_label' => $this->providerLabel((string) ($event->provider ?: '')),
            'event_type' => (string) $event->event_type,
            'status' => (string) ($event->status ?: 'success'),
            'tone' => $presentation['tone'],
            'title' => $presentation['title'],
            'summary' => (string) ($event->summary ?: $presentation['title']),
            'context' => (array) ($event->context ?? []),
            'created_at' => optional($event->created_at)->toDateTimeString(),
        ];
    }

    /**
     * @return array{tone: string, title: string}
     */
    private function eventPresentation(string $eventType): array
    {
        return match ($eventType) {
            'social_linked' => ['tone' => 'success', 'title' => '第三方身份已绑定'],
            'social_unlinked' => ['tone' => 'warn', 'title' => '第三方身份已解绑'],
            'social_unlink_blocked' => ['tone' => 'danger', 'title' => '第三方解绑已阻止'],
            'passkey_registered' => ['tone' => 'success', 'title' => 'Passkey 已登记'],
            'passkey_renamed' => ['tone' => 'info', 'title' => 'Passkey 已重命名'],
            'passkey_removed' => ['tone' => 'warn', 'title' => 'Passkey 已移除'],
            'password_enabled' => ['tone' => 'success', 'title' => '本地密码已启用'],
            'password_updated' => ['tone' => 'info', 'title' => '本地密码已更新'],
            'password_admin_reset' => ['tone' => 'warn', 'title' => '本地密码已被管理员重置'],
            default => ['tone' => 'info', 'title' => $eventType],
        };
    }

    private function providerLabel(string $provider): string
    {
        return match ($provider) {
            'google' => 'Google',
            'github' => 'GitHub',
            'passkey' => 'Passkey',
            'password' => '密码',
            default => $provider !== '' ? ucfirst($provider) : '身份',
        };
    }

    private function normalizeProvider(string $provider): ?string
    {
        $provider = trim($provider);

        return $provider === '' ? null : mb_substr($provider, 0, 32);
    }

    private function truncate(string $value, int $limit): string
    {
        return mb_substr(trim($value), 0, $limit);
    }

    private function currentRequest(): ?Request
    {
        return app()->bound('request') ? request() : null;
    }
}
