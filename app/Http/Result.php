<?php

namespace App\Http;

use Illuminate\Http\Response;

trait Result
{
    public function success(string $message = 'success', $data = []): Response
    {
        return $this->response(true, $message, $data);
    }

    public function fail(string $message = 'fail', $data = []): Response
    {
        return $this->response(false, $message, $data);
    }

    public function response(bool $status, string $message = '', $data = []): Response
    {
        $data = $data ?: new \stdClass;
        return response(compact('status', 'message', 'data'));
    }
}
