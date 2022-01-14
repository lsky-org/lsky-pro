<?php

namespace App\Http;

use Illuminate\Http\Response;

trait Api
{
    public function success(string $message = 'success', array $data = []): Response
    {
        return $this->response(true, $message, $data);
    }

    public function error(string $message = 'error', array $data = []): Response
    {
        return $this->response(false, $message, $data);
    }

    public function response(bool $status, string $message = '', array $data = []): Response
    {
        $data = $data ?: new \stdClass;
        return response(compact('status', 'message', 'data'));
    }
}
