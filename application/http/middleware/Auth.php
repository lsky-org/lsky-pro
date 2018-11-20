<?php

namespace app\http\middleware;

use think\facade\Session;

class Auth
{
    /**
     * 无需登录可访问的方法
     *
     * @var array
     */
    private $noNeedLogin = [
        'Index/index',
        'Auth/login',
        'Auth/register',
        'Auth/forgot',
        'Auth/sendCode',
        'Api/upload',
    ];

    public function handle($request, \Closure $next)
    {
        $uri = strtolower($request->controller() . '/' . $request->action());
        if (!in_array($uri, array_map('strtolower', $this->noNeedLogin))) {
            if (!Session::has('uid') || !Session::has('token')) {
                return redirect(url('auth/login'));
            }
        }

        return $next($request);
    }
}
