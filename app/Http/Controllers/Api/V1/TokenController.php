<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\UserStatus;
use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class TokenController extends Controller
{
    use AuditsOperations;

    private const DEFAULT_ABILITIES = [
        'images:read',
        'images:delete',
        'images:process',
        'albums:read',
        'albums:delete',
        'profile:read',
        'analytics:read',
        'processing:read',
        'ai:prompt',
        'spaces:read',
        'spaces:switch',
        'spaces:members:read',
        'spaces:members:update',
        'tokens:revoke',
    ];

    public function store(Request $request): Response
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'abilities' => 'nullable|array',
                'abilities.*' => 'string',
                'expires_in' => 'nullable|integer|min:1|max:525600',
                'expires_at' => 'nullable|date',
                'ip_whitelist' => 'nullable',
            ]);
        } catch (ValidationException $e) {
            $this->auditOperation($request, 'api.token.issue', 'token', 'failed', [
                'target' => $request->input('email'),
                'reason' => 'validation_failed',
            ], 'warning');

            return $this->fail($e->validator->errors()->first());
        }

        /** @var User|null $user */
        $user = User::query()->where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            $this->auditOperation($request, 'api.token.issue', 'token', 'failed', [
                'target' => $request->input('email'),
                'reason' => 'bad_credentials',
            ], 'warning');

            return $this->fail('The email address or password is incorrect.');
        }

        if ((int) $user->status === UserStatus::Frozen) {
            $this->auditOperation($request, 'api.token.issue', 'token', 'failed', [
                'target' => $user->id,
                'reason' => 'frozen_user',
            ], 'warning');

            return $this->fail('This account has been frozen.');
        }

        $abilities = $this->resolveAbilities($request->input('abilities'));
        $expiresAt = $this->resolveExpiresAt(
            $request->input('expires_at'),
            $request->input('expires_in')
        );
        $ipWhitelist = $this->normalizeIpWhitelist($request->input('ip_whitelist'));

        $newToken = $user->createToken($user->email, $abilities);
        $newToken->accessToken->expires_at = $expiresAt;
        $newToken->accessToken->ip_whitelist = $ipWhitelist;
        $newToken->accessToken->save();
        $token = $newToken->plainTextToken;

        $this->auditOperation($request, 'api.token.issue', 'token', 'success', [
            'target' => $newToken->accessToken->id,
            'subject_user_id' => $user->id,
            'abilities' => $abilities,
            'expires_at' => $expiresAt ? $expiresAt->toDateTimeString() : null,
            'ip_whitelist' => $ipWhitelist,
        ]);

        return $this->success('success', compact('token'));
    }

    public function clear(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $deleted = $user->tokens()->count();
        $user->tokens()->delete();

        $this->auditOperation($request, 'api.token.revoke_all', 'token', 'success', [
            'target' => $user->id,
            'deleted_tokens' => $deleted,
        ]);

        return $this->success();
    }

    private function resolveAbilities($requested): array
    {
        if (! is_array($requested) || empty($requested)) {
            return self::DEFAULT_ABILITIES;
        }

        $requested = array_values(array_filter(array_map('trim', $requested)));
        $allowed = array_values(array_intersect($requested, self::DEFAULT_ABILITIES));

        return empty($allowed) ? self::DEFAULT_ABILITIES : $allowed;
    }

    private function resolveExpiresAt($expiresAt, $expiresIn): ?Carbon
    {
        if (filled($expiresAt)) {
            return Carbon::parse((string) $expiresAt);
        }
        if (filled($expiresIn)) {
            return now()->addMinutes((int) $expiresIn);
        }

        return null;
    }

    private function normalizeIpWhitelist($raw): ?string
    {
        if ($raw === null || $raw === '') {
            return null;
        }

        if (is_string($raw)) {
            $raw = preg_split('/[\s,]+/', $raw, -1, PREG_SPLIT_NO_EMPTY);
        }

        if (! is_array($raw)) {
            return null;
        }

        $ips = [];
        foreach ($raw as $rule) {
            $rule = trim((string) $rule);
            if ($rule !== '') {
                $ips[] = $rule;
            }
        }

        return empty($ips) ? null : json_encode($ips, JSON_UNESCAPED_UNICODE);
    }
}
