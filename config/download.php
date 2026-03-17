<?php

return [
    'signed_url' => [
        // 是否启用安全下载链接（默认关闭，保持兼容）
        'enabled' => env('SIGNED_URL_ENABLED', false),
        // true 时仅对私有图片启用签名
        'private_only' => env('SIGNED_URL_PRIVATE_ONLY', false),
        // 签名有效期（秒）
        'ttl' => (int) env('SIGNED_URL_TTL', 300),
        // 签名密钥，默认复用 APP_KEY
        'key' => env('SIGNED_URL_KEY', env('APP_KEY', '')),
        // 查询参数名
        'expires_query_key' => 'expires',
        'signature_query_key' => 'signature',
    ],
];
