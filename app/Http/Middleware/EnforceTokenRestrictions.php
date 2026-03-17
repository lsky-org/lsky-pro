<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EnforceTokenRestrictions
{
    private const ABILITY_MAP = [
        'GET|images' => 'images:read',
        'GET|images/search' => 'images:read',
        'GET|images/ai-search' => 'images:read',
        'POST|images/*/process' => 'images:process',
        'GET|process-templates' => 'images:process',
        'POST|process-templates' => 'images:process',
        'POST|process-templates/*/run' => 'images:process',
        'POST|process-templates/*/dispatch' => 'images:process',
        'GET|process-jobs' => 'images:process',
        'GET|process-jobs/*' => 'images:process',
        'POST|process-jobs/*/retry' => 'images:process',
        'POST|process-jobs/*/cancel' => 'images:process',
        'GET|images/*/signed-url' => 'images:read',
        'DELETE|images/*' => 'images:delete',
        'POST|images/batch-delete/preview' => 'images:delete',
        'POST|images/batch-delete' => 'images:delete',
        'POST|images/batch-delete/rollback/*' => 'images:delete',
        'GET|albums' => 'albums:read',
        'DELETE|albums/*' => 'albums:delete',
        'GET|profile' => 'profile:read',
        'GET|spaces' => 'spaces:read',
        'POST|spaces/switch' => 'spaces:switch',
        'GET|spaces/*/members' => 'spaces:members:read',
        'PUT|spaces/*/members/*/role' => 'spaces:members:update',
        'GET|stats/overview' => 'analytics:read',
        'GET|processing/drivers/status' => 'processing:read',
        'POST|ai/prompt' => 'ai:prompt',
        'DELETE|tokens' => 'tokens:revoke',
        // FIX-13: webhook 和 admin 路由的能力映射
        'GET|webhooks' => 'webhooks:manage',
        'POST|webhooks' => 'webhooks:manage',
        'PATCH|webhooks/*/toggle' => 'webhooks:manage',
        'DELETE|webhooks/*' => 'webhooks:manage',
        'GET|admin/reviews' => 'admin:review',
        'POST|admin/reviews/*/approve' => 'admin:review',
        'POST|admin/reviews/*/reject' => 'admin:review',
    ];

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user) {
            $token = $user->currentAccessToken();
            if ($token) {
                // Expiration enforcement
                if (method_exists($token, 'isExpired') && $token->isExpired()) {
                    return response()->json([
                        'code' => 401,
                        'message' => 'Token expired.',
                    ], 401);
                }

                // IP whitelist enforcement
                $ip = $request->ip();
                if (method_exists($token, 'allowsIp') && ! $token->allowsIp($ip)) {
                    return response()->json([
                        'code' => 403,
                        'message' => 'Access denied from this IP.',
                    ], 403);
                }

                $ability = $this->resolveRequiredAbility($request);
                if ($ability && ! $request->user()->tokenCan($ability)) {
                    return response()->json([
                        'code' => 403,
                        'message' => "Missing token ability: {$ability}",
                    ], 403);
                }
            }
        }

        return $next($request);
    }

    private function resolveRequiredAbility(Request $request): ?string
    {
        $route = $request->route();
        if (! $route) {
            return null;
        }

        $method = strtoupper((string) $request->method());
        $uri = trim((string) $route->uri(), '/');
        $uri = preg_replace('#^api/v1/#', '', $uri);
        $uri = ltrim((string) $uri, '/');

        foreach (self::ABILITY_MAP as $pattern => $ability) {
            [$verb, $pathPattern] = explode('|', $pattern, 2);
            if ($verb !== $method) {
                continue;
            }
            $pathRegex = '#^'.str_replace('\*', '.*', preg_quote($pathPattern, '#')).'$#';
            if (preg_match($pathRegex, $uri) === 1) {
                return $ability;
            }
        }

        return null;
    }
}
