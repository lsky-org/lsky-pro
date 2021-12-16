<?php

namespace App\Http;

use JetBrains\PhpStorm\Pure;

trait Api
{
    #[Pure]
    public function success(string $message = 'success', bool $status = true, array $data = []): array
    {
        return $this->response($status, $message, $data);
    }

    #[Pure]
    public function error(string $message = 'error', bool $status = false, array $data = []): array
    {
        return $this->response($status, $message, $data);
    }

    #[Pure]
    public function response(bool $status, string $message = '', array $data = []): array
    {
        $data = $data ?: new \stdClass;
        return compact('status', 'message', 'data');
    }
}
