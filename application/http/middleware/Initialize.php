<?php

namespace app\http\middleware;

use app\common\traits\Core;
use think\exception\HttpResponseException;
use think\facade\Response;
use think\Request;

class Initialize
{
    use Core;

    public function handle(Request $request, \Closure $next)
    {
        // 检测程序是否已安装
        if (!file_exists(app()->getAppPath() . 'install.lock')) {
            if ($request->controller(true) !== 'install' || $request->action(true) !== 'index') {
                return redirect(url('install/index'));
            }
        }

        // 检测封禁IP
        $banIp = $this->getConfig('ban_ip');
        if ($banIp) {
            $ips = explode(',', str_replace('，', ',', $banIp));
            if (in_array($request->ip(), $ips)) {
                throw new HttpResponseException(Response::code(403));
            }
        }

        return $next($request);
    }
}
