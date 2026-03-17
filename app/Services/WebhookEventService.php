<?php

namespace App\Services;

use App\Jobs\DeliverWebhookEventJob;
use App\Models\WebhookSubscription;
use Illuminate\Support\Str;

class WebhookEventService
{
    public function dispatch(string $event, array $payload): void
    {
        $subscriptions = WebhookSubscription::query()
            ->enabled()
            ->whereJsonContains('events', $event)
            ->get(['id']);

        if ($subscriptions->isEmpty()) {
            return;
        }

        $eventId = (string) Str::uuid();

        foreach ($subscriptions as $subscription) {
            DeliverWebhookEventJob::dispatch(
                subscriptionId: (int) $subscription->id,
                event: $event,
                payload: $payload,
                eventId: $eventId,
            )
                ->onConnection(config('queue.webhook.connection'))
                ->onQueue(config('queue.webhook.queue', 'webhook-events'))
                ->afterCommit();
        }
    }
}
