<?php

namespace app\http\middleware;

use think\facade\Session;

class WebAuth
{
    /**
     * 无需登录可访问的方法(除分层控制器)
     *
     * @var array
     */
    private $noNeedLogin = [
        'Index/*',
        'Upload/upload',
        'Auth/*',
    ];

    public function handle($request, \Closure $next)
    {
        $uri = strtolower($request->controller() . '/' . $request->action());
        $noNeedLogin = array_map('strtolower', $this->noNeedLogin);
        if (!in_array($uri, $noNeedLogin)) {
            foreach ($noNeedLogin as &$value) {
                list($controller, $action) = explode('/', strtolower($value));
                if ($controller === strtolower($request->controller())) {
                    if ('*' === $action) {
                        return $next($request);
                    }
                }
            }

            if (!Session::has('uid')) {
                return redirect(url('auth/login'));
            }
        }

        return $next($request);
    }
}
