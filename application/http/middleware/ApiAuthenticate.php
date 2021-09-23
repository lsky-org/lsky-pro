<?php

namespace app\http\middleware;

use app\common\model\Users;
use app\common\traits\Core;
use think\Request;

class ApiAuthenticate
{
    use Core;

    /**
     * 允许不登录访问的路径
     *
     * @var array
     */
    private $paths = [
        'api/token',
        'api/upload'
    ];

    public function handle(Request $request, \Closure $next)
    {
        if (!$this->getConfig('open_api')) { // 站点是否开启了接口
            $this->response(lang('The administrator turned off API functionality'), [], 500);
        }

        $user = null;
        $token = $request->header('token', $request->request('token'));
        if ($token) {
            if (!$user = Users::get(['token' => $token])) {
                $this->response(lang('Authentication failed'), [], 401);
            }
        }

        if (!in_array($request->path(), $this->paths)) {
            if (!$token) $this->response(lang('Token does not exist'), [], 401);
        }

        $request->user = $user;

        return $next($request);
    }
}
