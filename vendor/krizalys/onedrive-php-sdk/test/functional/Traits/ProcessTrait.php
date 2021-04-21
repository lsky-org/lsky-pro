<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

use Symfony\Component\Process\Process;

trait ProcessTrait
{
    private static function withProcess(array $command, callable $callback)
    {
        $process = new Process($command);
        $process->start();

        try {
            return $callback($process);
        } catch (\Exception $exception) {
            throw $exception;
        } finally {
            $process->stop();
        }
    }
}
