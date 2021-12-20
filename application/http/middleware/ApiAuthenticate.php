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
            $this->response('管理员关闭了接口', [], 500);
        }

        $user = null;
        $token = $request->header('token', $request->request('token'));
        if ($token) {
            if (!$user = Users::get(['token' => $token])) {
                $this->response('认证失败', [], 401);
            }
        }

        if (!in_array($request->path(), $this->paths)) {
            if (!$token) $this->response('Token 不存在', [], 401);
        }

        $request->user = $user;

        return $next($request);
    }
}
