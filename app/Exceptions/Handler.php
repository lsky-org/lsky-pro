<?php

namespace App\Exceptions;

use App\Http\Result;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    use Result;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (ThrottleRequestsException $e) {
            $request = request();
            $retryAfter = (int)($e->getHeaders()['Retry-After'] ?? 0);
            $requestId = $request ? $request->attributes->get('request_id') : null;
            $traceId = $request ? $request->attributes->get('trace_id') : null;
            $message = '请求过于频繁，请稍后再试';

            if ($retryAfter > 0) {
                $message .= "（建议 {$retryAfter} 秒后重试）";
            }

            Log::warning('Throttle hit', [
                'request_id' => $requestId,
                'trace_id' => $traceId,
                'path' => $request ? $request->path() : null,
                'method' => $request ? $request->method() : null,
                'retry_after' => $retryAfter,
            ]);

            $response = $this->fail($message, [
                'retry_after' => $retryAfter,
                'request_id' => $requestId,
                'trace_id' => $traceId,
            ])->setStatusCode(429);

            if ($retryAfter > 0) {
                $response->headers->set('Retry-After', (string) $retryAfter);
            }

            return $response;
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->shouldReturnJson($request, $exception)
            ? $this->fail($exception->getMessage())->setStatusCode(401)
            : redirect()->guest($exception->redirectTo() ?? route('login'));
    }
}
