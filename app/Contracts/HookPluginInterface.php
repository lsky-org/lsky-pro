<?php

namespace App\Contracts;

interface HookPluginInterface
{
    public function handle(string $event, array $payload = []): void;
}
