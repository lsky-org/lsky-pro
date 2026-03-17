<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RequestContext
{
    public function handle(Request $request, Closure $next)
    {
        $requestId = $this->normalizeId($request->headers->get('X-Request-Id')) ?: (string) Str::uuid();
        $traceId = $this->normalizeId($request->headers->get('X-Trace-Id')) ?: (string) Str::uuid();

        $request->attributes->set('request_id', $requestId);
        $request->attributes->set('trace_id', $traceId);

        Log::withContext([
            'request_id' => $requestId,
            'trace_id' => $traceId,
            'method' => $request->method(),
            'path' => '/'.ltrim($request->path(), '/'),
            'ip' => $request->ip(),
        ]);

        $response = $next($request);

        $response->headers->set('X-Request-Id', $requestId);
        $response->headers->set('X-Trace-Id', $traceId);

        return $response;
    }

    private function normalizeId(?string $value): ?string
    {
        $value = trim((string) $value);

        if ($value === '' || strlen($value) > 128) {
            return null;
        }

        return preg_match('/^[a-zA-Z0-9\\-_.]+$/', $value) ? $value : null;
    }
}
