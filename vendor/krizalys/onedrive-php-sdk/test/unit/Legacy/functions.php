<?php

/**
 * Global function mocks.
 */

namespace Krizalys\Onedrive;

use Test\Unit\Mock\GlobalNamespace;

function fopen($filename, $mode, $use_include_path = false, $context = null)
{
    return GlobalNamespace::$functions->fopen(
        $filename,
        $mode,
        $use_include_path,
        $context
    );
}

function fclose($handle)
{
    return GlobalNamespace::$functions->fclose($handle);
}

function fwrite($handle, $string, $length = null)
{
    return GlobalNamespace::$functions->fwrite($handle, $string, $length);
}

function rewind($handle)
{
    return GlobalNamespace::$functions->rewind($handle);
}

function fstat($handle)
{
    return GlobalNamespace::$functions->fstat($handle);
}

function curl_init($url = null)
{
    return GlobalNamespace::$functions->curl_init($url);
}

function curl_setopt($ch, $option, $value)
{
    return GlobalNamespace::$functions->curl_setopt($ch, $option, $value);
}

function curl_setopt_array($ch, array $options)
{
    return GlobalNamespace::$functions->curl_setopt_array($ch, $options);
}

function curl_exec($ch)
{
    return GlobalNamespace::$functions->curl_exec($ch);
}

function curl_getinfo($ch, $opt = 0)
{
    return GlobalNamespace::$functions->curl_getinfo($ch, $opt);
}
