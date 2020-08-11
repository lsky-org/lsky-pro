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
 * @param $unixTime
 * @return false|string
 */
function format_time($unixTime)
{
    $showTime = date('Y', $unixTime) . "年" . date('n', $unixTime) . "月" . date('j', $unixTime) . "日";
    if (date('Y', $unixTime) == date('Y')) {
        $showTime = date('n', $unixTime) . "月" . date('j', $unixTime) . "日 " . date('H:i', $unixTime);
        if (date('n.j', $unixTime) == date('n.j')) {
            $timeDifference = time() - $unixTime + 1;
            if ($timeDifference < 30) {
                return "刚刚";
            }
            if ($timeDifference >= 30 && $timeDifference < 60) {
                return $timeDifference . "秒前";
            }
            if ($timeDifference >= 60 && $timeDifference < 3600) {
                return floor($timeDifference / 60) . "分钟前";
            }
            return date('H:i', $unixTime);
        }
        if (date('n.j', ($unixTime + 86400)) == date('n.j')) {
            return "昨天 " . date('H:i', $unixTime);
        }
    }

    return $showTime;
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
