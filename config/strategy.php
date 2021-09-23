<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午1:40
 * Link: https://github.com/wisp-x
 */

// [策略组]

return [
    'local'     => [
        'name'  => 'Local',
        'class' => \strategy\driver\Local::class
    ],
    'oss'       => [
        'name'  => 'Aliyun OSS',
        'class' => \strategy\driver\Oss::class
    ],
    'cos'       => [
        'name'  => 'Tencent COS',
        'class' => \strategy\driver\Cos::class
    ],
    'kodo'     => [
        'name'  => 'Qiniu KODO',
        'class' => \strategy\driver\Kodo::class
    ],
    'uss'     => [
        'name'  => 'Upyun USS',
        'class' => \strategy\driver\Uss::class
    ],
    'remote'  => [
        'name'  => 'Remote',
        'class' => \strategy\driver\Remote::class
    ],
];
