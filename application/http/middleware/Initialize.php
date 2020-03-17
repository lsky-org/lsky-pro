<?php

namespace app\http\middleware;

use app\common\model\Users;
use think\facade\Session;
use think\Request;

class Initialize
{
    /**
     * 允许不登录访问的路径
     *
     * @var array
     */
    private $paths = [
        'index/index',
        'auth/login',
        'auth/register',
        'index/api'
    ];

    public function handle(Request $request, \Closure $next)
    {
        $controller = $request->controller(true);
        $action = $request->action(true);
        $path = $controller . '/' . $action;

        // 检测程序是否已安装
        if (!file_exists(app()->getAppPath() . 'install.lock')) {
            if ($request->controller(true) !== 'install' || $request->action(true) !== 'index') {
                return redirect(url('install/index'));
            }
        }

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
