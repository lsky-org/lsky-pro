<?php

return [
    'ttl' => [
        // 启用后，新上传图片会按 default_seconds 自动写入 expire_at
        'enabled' => env('IMAGE_TTL_ENABLED', false),
        'default_seconds' => (int) env('IMAGE_TTL_DEFAULT_SECONDS', 0),
    ],

    'recycle_bin' => [
        // 启用后，业务删除默认进入回收站（软删）；关闭后回退为硬删
        'enabled' => env('IMAGE_RECYCLE_BIN_ENABLED', false),
    ],
];
