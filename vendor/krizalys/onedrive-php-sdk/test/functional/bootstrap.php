<?php

namespace Test\Functional\Krizalys\Onedrive;

spl_autoload_register(function ($name) {
    $namespace = 'Test\\Functional\\Krizalys\\Onedrive\\';
    $len       = strlen($namespace);

    if (substr_compare($name, $namespace, 0, $len) != 0) {
        return;
    }

    $tail = substr($name, $len);
    $path = __DIR__ . '/' . str_replace('\\', '/', $tail) . '.php';

    if (is_file($path)) {
        require_once $path;
    }
});

return require_once __DIR__ . '/../../vendor/autoload.php';
