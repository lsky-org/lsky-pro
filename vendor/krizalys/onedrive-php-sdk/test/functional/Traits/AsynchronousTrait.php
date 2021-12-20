<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

trait AsynchronousTrait
{
    /**
     * @var int
     *      The poll interval, in seconds.
     */
    private static $pollingInterval = 1;

    /**
     * @var int
     *      The poll timeout, in seconds.
     */
    private static $pollingTimeout = 10;

    private static function waitUntil(callable $callback)
    {
        $now = time();

        while (!$callback()) {
            sleep(self::$pollingInterval);

            if (time() - $now > self::$pollingTimeout) {
                throw new \Exception("Timed out while waiting for operation to complete: $uri");
            }
        }
    }
}
