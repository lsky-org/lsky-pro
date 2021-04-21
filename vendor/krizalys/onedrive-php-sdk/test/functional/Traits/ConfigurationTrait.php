<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

trait ConfigurationTrait
{
    private static $config;

    private static function getConfig($key)
    {
        if (self::$config === null) {
            $root = dirname(__DIR__);
            $path = sprintf('%s/config.php', $root);

            if (!file_exists($path)) {
                throw new \Exception(
                    'Configuration file not found.'
                        . " Please create a $path file from the sample provided."
                );
            }

            self::$config = require $path;
        }

        return self::$config[$key];
    }
}
