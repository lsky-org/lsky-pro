<?php

namespace App;

use App\Enums\ConfigKey;
use App\Models\Config;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class Utils
{
    public static function e(\Throwable $e, $message = '', $level = 'error')
    {
        Log::{$level}($message, [
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ]);
    }

    /**
     * 获取头像地址
     *
     * @param $email
     * @param int $s
     * @param string $d
     * @param string $r
     * @return string
     */
    public static function getAvatar($email, int $s = 96, string $d = 'mp', string $r = 'g'): string
    {
        $url = 'https://cravatar.cn/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$s&d=$d&r=$r";
        return $url;
    }

    /**
     * 获取系统配置，获取全部配置时将返回
     *
     * @param  string  $name
     * @param  mixed|null  $default
     *
     * @return mixed
     */
    public static function config(string $name = '', mixed $default = null): mixed
    {
        /** @var Collection $configs */
        $configs = Cache::rememberForever('configs', function () {
            return Config::query()->pluck('value', 'name')->transform(function ($value, $key) {
                switch ($key) {
                    case ConfigKey::IsAllowGuestUpload:
                    case ConfigKey::IsEnableGallery:
                    case ConfigKey::IsEnableApi:
                    case ConfigKey::IsEnableRegistration:
                    case ConfigKey::IsUserNeedVerify:
                        $value = (bool) $value;
                        break;
                    case ConfigKey::Mail:
                    case ConfigKey::Group:
                        $value = collect(json_decode($value, true));
                        break;
                    case ConfigKey::UserInitialCapacity:
                        $value = sprintf('%.2f', $value);
                        break;
                    default:
                }
                return $value;
            });
        });
        return '' === $name ? $configs : $configs->get($name, $default);
    }

    /**
     * 生成连续日期.
     * @param  string  $start  开始日期
     * @param  string  $end  结束日期
     * @param  string  $unit  day=日，month=月，year=年
     * @return array
     */
    public static function makeDateRange(string $start, string $end, string $unit = 'day'): array
    {
        $array = [];
        $format = ['day' => 'Y-m-d', 'month' => 'Y-m', 'year' => 'Y'][$unit] ?? 'Y-m-d';
        Carbon::create($start)->range($end, 1, $unit)->forEach(function (Carbon $item) use (&$array, $format) {
            $array[] = $item->format($format);
        });
        return $array;
    }

    /**
     * 转换字段单位
     *
     * @param  int|float  $size  字节b
     * @return string
     */
    public static function formatSize(int|float $size): string
    {
        if ($size <= 0) {
            return "0.00 Bytes";
        }
        $unit = ['', 'K', 'M', 'G', 'T', 'P'];
        $base = 1024;
        $i = floor(log($size, $base));
        $n = count($unit);
        if ($i >= $n) {
            $i = $n - 1;
        }

        return sprintf("%.2f", $size / pow($base, $i)).' '.$unit[$i].'B';
    }

    /**
     * 格式化数字
     *
     * @param int|string $n 数字
     * @param int $precision 精度
     * @return int|string
     */
    public static function shortenNumber(int|string $n, int $precision = 1): int|string
    {
        if ($n < 1e+3) {
            return number_format($n);
        } else if ($n < 1e+6) {
            return number_format($n / 1e+3, $precision) . 'k';
        } else if ($n < 1e+9) {
            return number_format($n / 1e+6, $precision) . 'm';
        } else if ($n < 1e+12) {
            return number_format($n / 1e+9, $precision) . 'b';
        }

        return $n;
    }

    /**
     * 递归过滤数组元素
     *
     * @param  array  $array
     * @param  callable|null  $callback
     * @param  int  $mode
     * @return array
     */
    public static function filter(array $array, callable $callback = null, int $mode = 0): array
    {
        foreach ($array as &$value) {
            if (is_array($value)) {
                $value = self::filter($value, $callback, $mode);
            }
        }
        return array_filter($array, $callback, $mode);
    }

    /**
     * 格式化配置，设置默认配置以及将字符串数字转换为数字
     *
     * @param  array  $defaults  默认配置
     * @param  array  $configs  新配置
     * @return array
     */
    public static function parseConfigs(array $defaults, array $configs): array
    {
        array_walk_recursive($configs, function (&$item) {
            if (ctype_digit($item)) {
                $item += 0;
            }
            if (is_null($item)) {
                unset($item);
            }
        });
        return self::array_merge_recursive_distinct($defaults, $configs);
    }

    /**
     * @param array<int|string, mixed> $array1
     * @param array<int|string, mixed> $array2
     *
     * @return array<int|string, mixed>
     */
    private static function array_merge_recursive_distinct(array $array1, array &$array2): array
    {
        $merged = $array1;
        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key]) && ! array_is_list($value)) {
                $merged[$key] = self::array_merge_recursive_distinct($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }
}
