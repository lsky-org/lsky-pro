<?php

namespace App\Jobs;

use App\Models\WebhookSubscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DeliverWebhookEventJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries;

    public int $timeout;

    public function __construct(
        public int $subscriptionId,
        public string $event,
        public array $payload,
        public string $eventId,
    ) {
        $this->tries = (int) config('queue.webhook.tries', 3);
        $this->timeout = (int) config('queue.webhook.timeout', 30);
    }

    public function backoff(): array
    {
        $backoff = config('queue.webhook.backoff', [5, 15, 30]);
        if (! is_array($backoff) || empty($backoff)) {
            return [5, 15, 30];
        }

        return array_values(array_map('intval', $backoff));
    }

    public function handle(): void
    {
        $subscription = WebhookSubscription::query()->find($this->subscriptionId);
        if (! $subscription || ! $subscription->enabled) {
            return;
        }

        $body = [
            'event' => $this->event,
            'event_id' => $this->eventId,
            'occurred_at' => now()->toIso8601String(),
            'payload' => $this->payload,
        ];
        $json = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if ($json === false) {
            throw new \RuntimeException('Encode webhook payload failed.');
        }

        $timestamp = (string) now()->timestamp;
        $secret = (string) ($subscription->secret ?? '');
        if ($secret === '') {
            Log::channel('audit')->warning('webhook.delivery.skipped', [
                'subscription_id' => $subscription->id,
                'reason' => 'empty secret',
            ]);
            return;
        }
        $signature = hash_hmac('sha256', $timestamp.'.'.$json, $secret);

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'User-Agent' => 'Lsky-Webhook/1.0',
                'X-Lsky-Event' => $this->event,
                'X-Lsky-Event-Id' => $this->eventId,
                'X-Lsky-Timestamp' => $timestamp,
                'X-Lsky-Signature' => $signature,
            ])
                ->timeout((int) config('queue.webhook.request_timeout', 10))
                ->withBody($json, 'application/json')
                ->post($subscription->url);
        } catch (\Throwable $exception) {
            Log::channel('audit')->warning('webhook.delivery.retry', [
                'subscription_id' => $subscription->id,
                'url' => $subscription->url,
                'event' => $this->event,
                'event_id' => $this->eventId,
                'attempt' => $this->attempts(),
                'error' => $exception->getMessage(),
            ]);

            throw $exception;
        }

        if (! $response->successful()) {
            Log::channel('audit')->warning('webhook.delivery.retry', [
                'subscription_id' => $subscription->id,
                'url' => $subscription->url,
                'event' => $this->event,
                'event_id' => $this->eventId,
                'status' => $response->status(),
                'attempt' => $this->attempts(),
                'response' => mb_substr($response->body(), 0, 500),
            ]);

            throw new \RuntimeException(sprintf('Webhook delivery failed with status %d.', $response->status()));
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::channel('audit')->error('webhook.delivery.failed', [
            'subscription_id' => $this->subscriptionId,
            'event' => $this->event,
            'event_id' => $this->eventId,
            'error' => $exception->getMessage(),
        ]);
    }
}
