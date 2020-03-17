<?php

namespace app\http\middleware;

use think\Request;

class Initialize
{
    public function handle(Request $request, \Closure $next)
    {
        // 检测程序是否已安装
        if (!file_exists(app()->getAppPath() . 'install.lock')) {
            if ($request->controller(true) !== 'install' || $request->action(true) !== 'index') {
                return redirect(url('install/index'));
            }
        }

        // ...

        return $next($request);
    }
}
