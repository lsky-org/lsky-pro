<?php

namespace App\Http;

use Illuminate\Http\Response;
use JetBrains\PhpStorm\Pure;

trait Api
{
    #[Pure]
    public function success(string $message = 'success', array $data = []): Response
    {
        return $this->response(true, $message, $data);
    }

    #[Pure]
    public function error(string $message = 'error', array $data = []): Response
    {
        return $this->response(false, $message, $data);
    }

    #[Pure]
    public function response(bool $status, string $message = '', array $data = []): Response
    {
        $data = $data ?: new \stdClass;
        return response(compact('status', 'message', 'data'));
    }
}
