<?php

namespace App;

use App\Models\Config;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class Utils
{
    /**
     * 获取系统配置
     *
     * @param string $name
     * @param mixed|null $default
     *
     * @return mixed
     */
    public static function config(string $name = '', mixed $default = null): mixed
    {
        /** @var Collection $configs */
        $configs = Cache::remember('configs', 86400, function () {
            return Config::query()->pluck('value', 'name')->transform(function ($value) {
                return json_decode($value, true) ?: $value;
            });
        });
        return $configs->get($name, $default);
    }
}
