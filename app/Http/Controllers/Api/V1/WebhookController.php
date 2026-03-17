<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\WebhookSubscription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class WebhookController extends Controller
{
    use AuditsOperations;

    private const ALLOWED_EVENTS = [
        'image.uploaded',
        'image.deleted',
    ];

    public function index(Request $request): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        $items = WebhookSubscription::query()
            ->orderByDesc('id')
            ->get(['id', 'url', 'events', 'enabled', 'created_at', 'updated_at'])
            ->map(function (WebhookSubscription $subscription) {
                return [
                    'id' => $subscription->id,
                    'url' => $subscription->url,
                    'events' => $subscription->events ?: [],
                    'enabled' => (bool) $subscription->enabled,
                    'created_at' => optional($subscription->created_at)->toDateTimeString(),
                    'updated_at' => optional($subscription->updated_at)->toDateTimeString(),
                ];
            })
            ->values();

        return $this->success('success', ['items' => $items]);
    }

    public function store(Request $request): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        try {
            $validated = $request->validate([
                'url' => ['required', 'url', 'max:2048', function ($attribute, $value, $fail) {
                    // FIX-05: SSRF 防护 — 禁止私网/内网 IP
                    $parsed = parse_url($value);
                    $scheme = strtolower($parsed['scheme'] ?? '');
                    if (! in_array($scheme, ['http', 'https'], true)) {
                        $fail('仅允许 http/https 协议');
                        return;
                    }
                    $host = $parsed['host'] ?? '';
                    $ip = gethostbyname($host);
                    if ($ip === $host && ! filter_var($host, FILTER_VALIDATE_IP)) {
                        $fail('无法解析主机名');
                        return;
                    }
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
                        $fail('不允许指向内网地址');
                        return;
                    }
                }],
                'secret' => 'required|string|min:16|max:255',
                'events' => 'required|array|min:1',
                'events.*' => 'required|string|in:'.implode(',', self::ALLOWED_EVENTS),
                'enabled' => 'nullable|boolean',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        $subscription = WebhookSubscription::query()->create([
            'url' => $validated['url'],
            'secret' => $validated['secret'] ?? null,
            'events' => array_values(array_unique($validated['events'] ?? [])),
            'enabled' => array_key_exists('enabled', $validated) ? (bool) $validated['enabled'] : true,
        ]);

        $this->auditOperation($request, 'api.webhook.create', 'webhook', 'success', [
            'target' => $subscription->id,
            'url' => $subscription->url,
            'events' => $subscription->events,
            'enabled' => (bool) $subscription->enabled,
        ]);

        return $this->success('创建成功', [
            'id' => $subscription->id,
            'url' => $subscription->url,
            'events' => $subscription->events,
            'enabled' => (bool) $subscription->enabled,
        ]);
    }

    public function toggle(Request $request, int $id): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        $subscription = WebhookSubscription::query()->find($id);
        if (! $subscription) {
            return $this->fail('订阅不存在');
        }

        $enabledInput = $request->input('enabled');
        if ($enabledInput === null) {
            $subscription->enabled = ! $subscription->enabled;
        } else {
            $subscription->enabled = filter_var($enabledInput, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            if ($subscription->enabled === null) {
                return $this->fail('enabled 参数无效');
            }
        }

        $subscription->save();

        $this->auditOperation($request, 'api.webhook.toggle', 'webhook', 'success', [
            'target' => $subscription->id,
            'enabled' => (bool) $subscription->enabled,
        ]);

        return $this->success('操作成功', [
            'id' => $subscription->id,
            'enabled' => (bool) $subscription->enabled,
        ]);
    }

    public function destroy(Request $request, int $id): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        $subscription = WebhookSubscription::query()->find($id);
        if (! $subscription) {
            return $this->fail('订阅不存在');
        }

        $subscription->delete();

        $this->auditOperation($request, 'api.webhook.delete', 'webhook', 'success', [
            'target' => $id,
        ]);

        return $this->success('删除成功');
    }

    private function ensureAdmin(Request $request): ?Response
    {
        $user = $request->user();
        if (! $user || ! $user->is_adminer) {
            $this->auditOperation($request, 'api.webhook.access', 'webhook', 'failed', [
                'reason' => 'forbidden',
            ], 'warning');

            return $this->fail('无权限操作');
        }

        return null;
    }
}
