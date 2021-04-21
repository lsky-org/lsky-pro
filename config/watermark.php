<?php

/**
 * 水印配置文件(是否启用受环境变量中的 watermark 配置限制)
 *
 * 每个储存策略都可以设置独立的水印配置，分为文字水印和图片水印两种类型。
 *
 * 文字水印配置说明：
 * `enable`: 是否启用水印功能
 * `type`: 类型[1=文字水印,2=图片水印]
 * `text`: 水印文字
 * `font`: 字体文件绝对路径
 * `size`: 文件大小
 * `color`: 颜色
 * `locate`: 水印位置[1=左上角,2=上居中,3=右上角,4=左居中,5=居中,6=右居中,7=左下角,8=下居中,9=右下角]
 * `offset`: 文字相对当前位置的偏移量，默认0
 * `angle`: 文字倾斜角度，默认0
 *
 * 图片水印配置说明
 * `enable`: 是否启用水印功能
 * `type`: 类型[1=文字水印,2=图片水印]
 * `source`: 水印图片文件绝对路径
 * `locate`: 水印位置[1=左上角,2=上居中,3=右上角,4=左居中,5=居中,6=右居中,7=左下角,8=下居中,9=右下角]
 * `alpha`: 透明度
 *
 * FAQ：
 * 1.字体、水印图片如何配置？
 *     路径下载你的字体文件或水印图片放置到项目任意目录, 变量 $root 则是项目根目录，即 public 上层目录
 *     假如现在有个 test.ttf 字体文件，将它放置到 public 目录下，那么路径则是 $root . 'public/test.ttf'
 * 2.文字偏移量(offset)和倾斜角度(angle)支持负数
 * 3.每个策略的水印配置，只能同时存在一种类型，不可以同时配置文字水印和图片水印
 * 4.启用水印功能后，系统不会保存原图！
 */

$root = app()->getRootPath();

return [
    // 本地
    'local' => [
        'enable' => false,
        'type' => 1,
        'text' => 'Lsky Pro',
        'font' => $root . 'public/static/app/font/test.ttf',
        'size' => 20,
        'color' => '#333333',
        'locate' => 9,
        'offset' => 0,
        'angle' => 0,
    ],
    // 阿里云 OSS
    'oss' => [
        'enable' => false,
        'type' => 2,
        'source' => $root . 'public/static/app/images/icon.png',
        'locate' => 9,
        'alpha' => 100,
    ],
    // 腾讯云 COS
    'cos' => [
        'enable' => false,
    ],
    // 又拍云 USS
    'uss' => [
        'enable' => false,
    ],
    // 七牛云 Kodo
    'kodo' => [
        'enable' => false,
    ],
];