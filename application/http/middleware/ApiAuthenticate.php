<?php

namespace app\http\middleware;

use think\Request;

class ApiAuthenticate
{
    public function handle(Request $request, \Closure $next)
    {
        $controller = $request->controller(true);
        $action = $request->action(true);
        $path = $controller . '/' . $action;

        return $next($request);
    }
}
