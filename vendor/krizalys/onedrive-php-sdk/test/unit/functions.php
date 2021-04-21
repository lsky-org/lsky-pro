<?php

namespace
{
    class FunctionsMock
    {
        public static $timeCallback;
    }
}

namespace Krizalys\Onedrive
{
    function time()
    {
        $function = \FunctionsMock::$timeCallback;

        return $function();
    }
}
