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
        'index/gallery'
    ];

    public function handle(Request $request, \Closure $next)
    {
        $controller = $request->controller(true);
        $action = $request->action(true);
        $path = $controller . '/' . $action;

        $user = null;
        if ($uid = Session::get('uid')) {
            if (!$user = Users::get($uid)) {
                Session::delete('uid');
            }
        }

        if (!in_array($path, $this->paths) && !$user) {
            return redirect(url('/auth/login'));
        }

        $request->user = $user;

        // 单用户模式下, 只允许访问首页(除了接口)
        if (env('system.single_user_mode') && !$user) {
            if ($path !== 'index/index') {
                return redirect(url('/'));
            }
        }

        return $next($request);
    }
}
