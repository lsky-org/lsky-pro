<?php

namespace app\http\middleware;

use app\common\model\Users;
use think\facade\Session;
use think\Request;

class WebAuthenticate
{
    /**
     * 允许不登录访问的路径
     *
     * @var array
     */
    private $paths = [
        'install/index',
        'index/index',
        'upload/upload',
        'auth/login',
        'auth/register',
        'auth/forgot',
        'index/api',
    ];

    public function handle(Request $request, \Closure $next)
    {
        $controller = $request->controller(true);
        $action = $request->action(true);
        $path = $controller . '/' . $action;

        $user = null;
        if ($uid = Session::get('uid')) {
            $user = Users::get($uid);
        }

        if (!in_array($path, $this->paths) && !$user) {
            return redirect(url('/auth/login'));
        }

        $request->user = $user;

        return $next($request);
    }
}
