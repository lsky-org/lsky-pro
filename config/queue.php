<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 2000,
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 2000,
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 2000,
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Image Delete Queue
    |--------------------------------------------------------------------------
    |
    | Controls whether physical file deletion runs asynchronously.
    | When enabled, a worker should listen on the configured queue.
    |
    */

    'image_delete' => [
        'async' => env('IMAGE_DELETE_ASYNC', false),
        // Follow global QUEUE_CONNECTION by default to keep fresh installs usable without Redis.
        'connection' => env('IMAGE_DELETE_QUEUE_CONNECTION', env('QUEUE_CONNECTION', 'sync')),
        'queue' => env('IMAGE_DELETE_QUEUE', 'image-delete'),
        'tries' => (int) env('IMAGE_DELETE_QUEUE_TRIES', 3),
        'timeout' => (int) env('IMAGE_DELETE_QUEUE_TIMEOUT', 120),
        'backoff' => array_values(array_filter(array_map('intval', explode(',', (string) env('IMAGE_DELETE_QUEUE_BACKOFF', '10,30,60'))))),
    ],

    /*
    |--------------------------------------------------------------------------
    | Upload Pipeline Queue
    |--------------------------------------------------------------------------
    |
    | Controls queue runtime behavior for asynchronous upload processing.
    |
    */

    'upload_pipeline' => [
        'connection' => env('UPLOAD_PIPELINE_QUEUE_CONNECTION', env('QUEUE_CONNECTION', 'sync')),
        'queue' => env('UPLOAD_PIPELINE_QUEUE', 'upload-critical'),
        'tries' => (int) env('UPLOAD_PIPELINE_QUEUE_TRIES', 3),
        'timeout' => (int) env('UPLOAD_PIPELINE_QUEUE_TIMEOUT', 180),
        'backoff' => array_values(array_filter(array_map('intval', explode(',', (string) env('UPLOAD_PIPELINE_QUEUE_BACKOFF', '5,15,30'))))),
    ],

    /*
    |--------------------------------------------------------------------------
    | Webhook Queue
    |--------------------------------------------------------------------------
    |
    | Controls runtime behavior for async webhook event delivery.
    |
    */

    'webhook' => [
        'connection' => env('WEBHOOK_QUEUE_CONNECTION', env('QUEUE_CONNECTION', 'sync')),
        'queue' => env('WEBHOOK_QUEUE', 'webhook-events'),
        'tries' => (int) env('WEBHOOK_QUEUE_TRIES', 3),
        'timeout' => (int) env('WEBHOOK_QUEUE_TIMEOUT', 30),
        'request_timeout' => (int) env('WEBHOOK_REQUEST_TIMEOUT', 10),
        'backoff' => array_values(array_filter(array_map('intval', explode(',', (string) env('WEBHOOK_QUEUE_BACKOFF', '5,15,30'))))),
    ],

    /*
    |--------------------------------------------------------------------------
    | AI Prompt Queue
    |--------------------------------------------------------------------------
    |
    | Controls runtime behavior for asynchronous AI prompt generation jobs.
    |
    */

    'ai_prompt' => [
        'connection' => env('AI_PROMPT_QUEUE_CONNECTION', env('QUEUE_CONNECTION', 'sync')),
        'queue' => env('AI_PROMPT_QUEUE', 'ai-prompt'),
        'tries' => (int) env('AI_PROMPT_QUEUE_TRIES', 2),
        'timeout' => (int) env('AI_PROMPT_QUEUE_TIMEOUT', 60),
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
