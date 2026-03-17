<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Hook Plugins
    |--------------------------------------------------------------------------
    |
    | 受控钩子支持两种注册方式：
    | 1) 列表模式：直接填类名数组，表示对所有白名单事件生效。
    | 2) 映射模式：按事件注册，支持 '*' 作为全局插件。
    |
    | 白名单事件：
    | - image.uploading
    | - image.uploaded
    | - image.deleting
    | - image.deleted
    |
    */
    'hooks' => [
        // '*' => [
        //     \App\Plugins\Local\ExamplePlugin::class,
        // ],
        // 'image.uploaded' => [
        //     \App\Plugins\Local\UploadedAuditPlugin::class,
        // ],
    ],
];
