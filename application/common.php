<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 转换文件大小单位
 *
 * @param $size
 * @param $array
 *
 * @return string|array
 */
function format_size($size, $array = false)
{
    if (0 == $size) {
        return "0.00 Bytes";
    }
    $unit = ['', 'K', 'M', 'G', 'T', 'P'];
    $base = 1024;
    $i = floor(log($size, $base));
    $n = count($unit);
    if ($i >= $n) {
        $i = $n - 1;
    }

    if ($array) {
        return [sprintf("%.2f", $size / pow($base, $i)), $unit[$i] . 'B'];
    }

    return sprintf("%.2f", $size / pow($base, $i)) . ' ' . $unit[$i] . 'B';
}

/**
 * 格式化友好时间戳
 *
 * @return false|string
 */
function format_time($remote, $local = null)
{
    $timediff = (is_null($local) || $local ? time() : $local) - $remote;
    $chunks = array(
        array(60 * 60 * 24 * 365, 'year'),
        array(60 * 60 * 24 * 30, 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24, 'day'),
        array(60 * 60, 'hour'),
        array(60, 'minute'),
        array(1, 'second')
    );
    $name = $count ='';
    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($timediff / $seconds)) != 0) {
            break;
        }
    }

    return lang("%s {$name}%s ago", [$count, ($count > 1 ? 's' : '')]);
}

/**
 * 过滤逗号(去除字符串两边的逗号，并将中文逗号转换成英文逗号)
 *
 * @param string $str  字符串
 *
 * @return string
 */
function filter_comma($str)
{
    return trim(str_replace("，", ",", $str), ",");
}

/**
 * 获取文件后缀
 *
 * @param string $name 文件名
 *
 * @return mixed
 */
function get_file_ext($name)
{
    return pathinfo($name, PATHINFO_EXTENSION);
}

/**
 * 随机字符串
 *
 * @param int $length
 * @param string $char
 * @return bool|string
 */
function str_rand($length = 16, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $string = '';
    for ($i = $length; $i > 0; $i--) {
        $string .= $char[mt_rand(0, strlen($char) - 1)];
    }

    return $string;
}

/**
 * Make Token
 *
 * @param bool $recursion 是否递归检测 Token
 * @return string
 */
function make_token($recursion = true)
{
    $token = md5('LSKY PRO' . uniqid() . time());
    if ($recursion) {
        if (\app\common\model\Users::where('token', $token)->count()) {
            return make_token(true);
        }
    }
    return $token;
}

/**
 * Make Url
 *
 * @param $domain
 * @param null $pathname
 * @return mixed
 */
function make_url($domain, $pathname = null)
{
    $domain = rtrim($domain, '/');
    if (false === strpos($domain, 'https://') && false === strpos($domain, 'http://')) {
        $domain = 'http://' . $domain;
    }
    $query = \think\facade\Config::get('system.url_query');
    $url = str_replace('\\', '/', $domain . ($pathname ? '/' . $pathname : null));
    if ($query) $url = $url . $query;
    return $url;
}

/**
 * @param int $length
 * @return int
 */
function generate_code($length = 5)
{
    $min = pow(10, ($length - 1));
    $max = pow(10, $length) - 1;
    return rand($min, $max);
}
