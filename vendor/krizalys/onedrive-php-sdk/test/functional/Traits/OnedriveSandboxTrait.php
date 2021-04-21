<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

use Krizalys\Onedrive\Proxy\DriveItemProxy;

trait OnedriveSandboxTrait
{
    private static function withOnedriveSandbox(DriveItemProxy $root, $name, callable $callback)
    {
        $name    = str_replace(['\\', '::'], '_', $name);
        $suffix  = sprintf('%08X', rand(0x00000000, 0xffffffff));
        $time    = gmdate('YmdHis');
        $name    = "{$name}_{$time}_{$suffix}";
        $sandbox = $root->createFolder($name);

        try {
            return $callback($sandbox);
        } catch (\Exception $exception) {
            throw $exception;
        } finally {
            $sandbox->delete();
        }
    }
}
