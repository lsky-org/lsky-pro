<?php

require_once sprintf('%s/../../vendor/autoload.php', __DIR__);
require_once sprintf('%s/functions.php', __DIR__);
require_once sprintf('%s/Legacy/functions.php', __DIR__);

spl_autoload_register(function ($class) {
    if (substr_compare($class, 'Test\\Unit\\Mock\\', 0, 15) === 0) {
        $suffix = substr($class, 15);
        $path   = str_replace('\\', DIRECTORY_SEPARATOR, $suffix) . '.php';
        require_once sprintf('%s/Legacy/Mock/%s', __DIR__, $path);
    }
});
