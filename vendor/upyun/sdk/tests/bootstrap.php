<?php
require dirname(__DIR__) . '/vendor/autoload.php';

define('USER_NAME', 'tester');
define('PWD', 'grjxv2mxELR3');
define('BUCKET', 'sdkimg');
define('PIC_PATH', dirname(__FILE__) . '/assets/sample.jpeg');
define('PIC_SIZE', filesize(PIC_PATH));

function getFileUrl($path)
{
    return "http://" . BUCKET . ".b0.upaiyun.com/" . ltrim($path, '/');
}

function getUpyunFileSize($path)
{
    $url = getFileUrl($path);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    preg_match('~^HTTP/1.1 (\d{3})~', $return, $match1);
    preg_match('~Content-Length: (\d+)~', $return, $match2);

    if (isset($match1[1]) && $match1[1] == 200) {
        return isset($match2[1]) ? intval($match2[1]) : false;
    } else {
        return false;
    }
}
