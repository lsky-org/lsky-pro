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
        'name'  => '本地',
        'class' => \strategy\driver\Local::class
    ],
    'oss'       => [
        'name'  => '阿里云OSS',
        'class' => \strategy\driver\Oss::class
    ],
    'cos'       => [
        'name'  => '腾讯云COS',
        'class' => \strategy\driver\Cos::class
    ],
    'kodo'     => [
        'name'  => '七牛云KODO',
        'class' => \strategy\driver\Kodo::class
    ],
    'uss'     => [
        'name'  => '又拍云USS',
        'class' => \strategy\driver\Uss::class
    ],
    'remote'  => [
        'name'  => '远程',
        'class' => \strategy\driver\Remote::class
    ],
];
