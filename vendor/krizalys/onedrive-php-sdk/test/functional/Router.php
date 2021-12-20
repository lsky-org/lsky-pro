<?php

namespace Test\Functional\Krizalys\Onedrive;

require __DIR__ . '/../../vendor/autoload.php';

class Router
{
    public static function route()
    {
        $uri        = $_SERVER['REQUEST_URI'];
        $components = parse_url($uri);
        $path       = array_key_exists('path', $components) ? $components['path'] : '';

        if ($path == '/') {
            if (!array_key_exists('query', $components)) {
                throw new \Exception('Code not given');
            }

            parse_str($components['query'], $query);
            $query  = json_encode($query);
            $stdout = fopen('php://stdout', 'w');
            fwrite($stdout, $query);
            fclose($stdout);
        }

        return true;
    }
}

return Router::route();
