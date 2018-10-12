<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\route\dispatch;

use think\route\Dispatch;

class Controller extends Dispatch
{
    public function exec()
    {
        // 执行控制器的操作方法
        $vars = array_merge($this->request->param(), $this->param);

        return $this->app->action(
            $this->dispatch, $vars,
            $this->rule->getConfig('url_controller_layer'),
            $this->rule->getConfig('controller_suffix')
        );
    }

}
