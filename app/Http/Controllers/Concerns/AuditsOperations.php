<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait AuditsOperations
{
    protected function auditOperation(
        Request $request,
        string $action,
        string $resource,
        string $result,
        array $context = [],
        string $level = 'info'
    ): void {
        $user = $request->user();

        $payload = array_merge([
            'request_id' => $request->attributes->get('request_id'),
            'trace_id' => $request->attributes->get('trace_id'),
            'user_id' => $user ? $user->id : null,
            'resource' => $resource,
            'target' => $context['target'] ?? null,
            'action' => $action,
            'result' => $result,
            'ip' => $request->ip(),
        ], $context);

        $logger = Log::channel('audit');
        if (!method_exists($logger, $level)) {
            $level = 'info';
        }

        $logger->{$level}('operation.audit', $payload);
    }
}
