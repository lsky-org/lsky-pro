<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Image Processing Driver
    |--------------------------------------------------------------------------
    |
    | Supported drivers: imagick, libvips
    |
    */
    'driver' => env('IMAGE_PROCESS_DRIVER', 'imagick'),

    /*
    |--------------------------------------------------------------------------
    | AI Prompt Template
    |--------------------------------------------------------------------------
    |
    | Placeholders:
    | - {{intent}}
    | - {{language}}
    | - {{style}}
    | - {{metadata_block}}
    |
    */
    'ai_prompt_template' => <<<'TEMPLATE'
你是资深视觉内容助手。请基于以下信息输出可执行、可复用的高质量提示词。

用户意图：
{{intent}}

输出语言：{{language}}
风格约束：{{style}}

图片元信息：
{{metadata_block}}

请输出：
1) 主提示词
2) 反向提示词（negative prompt）
3) 可选参数建议（如风格强度、构图、镜头感）
TEMPLATE,
];
