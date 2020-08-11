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
        } else {
            // 检测封禁IP
            $banIp = $this->getConfig('ban_ip');
            if ($banIp) {
                $ips = explode(',', str_replace('，', ',', $banIp));
                if ($this->banIp($request->ip(), $ips)) {
                    throw new HttpResponseException(Response::code(403));
                }
            }
        }

        return $next($request);
    }

    /**
     * 拦截某个IP, 支持通配符
     *
     * @param string $ip
     * @param array $ips
     * @return bool
     */
    private function banIp($ip, array $ips)
    {
        $parts = explode('.', $ip); // 分段当前 IP
        $ban = false;
        foreach ($ips as $item) {
            // 如果直接匹配到
            if ($item === $ip) {
                $ban = true;
                continue;
            }

            if (strpos($item, '*') !== false) {
                $array = explode('.', $item);
                $check = true;
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] !== '*' && $array[$i] !== $parts[$i]) {
                        $check = false;
                        break;
                    }
                }
                if ($check) {
                    $ban = true;
                    break;
                }
            }
        }
        return $ban;
    }
}
