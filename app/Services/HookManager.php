<?php

namespace App\Services;

use App\Contracts\HookPluginInterface;
use Illuminate\Support\Facades\Log;

class HookManager
{
    private const ALLOWED_EVENTS = [
        'image.uploading',
        'image.uploaded',
        'image.deleting',
        'image.deleted',
    ];

    public function dispatch(string $event, array $payload = []): void
    {
        if (! in_array($event, self::ALLOWED_EVENTS, true)) {
            return;
        }

        foreach ($this->resolvePluginClasses($event) as $className) {
            try {
                // FIX-23: 仅允许实现 HookPluginInterface 的类
                if (! is_a($className, HookPluginInterface::class, true)) {
                    Log::channel('audit')->warning('hook.plugin.rejected', [
                        'event' => $event,
                        'plugin' => $className,
                        'reason' => 'must implement HookPluginInterface',
                    ]);
                    continue;
                }

                $plugin = app($className);
                $plugin->handle($event, $payload);
            } catch (\Throwable $e) {
                Log::channel('audit')->warning('hook.plugin.failed', [
                    'event' => $event,
                    'plugin' => $className,
                    'error' => $e->getMessage(),
                ]);
            }
        }
    }

    private function resolvePluginClasses(string $event): array
    {
        $hooks = config('plugins.hooks', []);
        $classes = [];

        if (is_array($hooks) && array_is_list($hooks)) {
            $classes = $hooks;
        } elseif (is_array($hooks)) {
            $global = $hooks['*'] ?? [];
            $eventClasses = $hooks[$event] ?? [];
            $classes = array_merge((array) $global, (array) $eventClasses);
        }

        $classes = array_filter(array_map(static fn ($class) => is_string($class) ? trim($class) : '', $classes));

        return array_values(array_unique($classes));
    }
}
