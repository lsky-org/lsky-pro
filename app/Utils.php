<?php

namespace App;

use App\Enums\ConfigKey;
use App\Models\Config;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class Utils
{
    /**
     * 获取系统配置，获取全部配置时将返回
     *
     * @param string $name
     * @param mixed|null $default
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
                    case ConfigKey::IsEnableRegistration:
                        $value = (bool) $value;
                        break;
                    case ConfigKey::MailConfigs:
                    case ConfigKey::GuestGroupConfigs:
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
}
