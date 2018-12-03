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

namespace think\facade;

use think\Facade;

/**
 * @see \think\Template
 * @mixin \think\Template
 * @method void assign(mixed $name, mixed $value = '') static 模板变量赋值
 * @method mixed get(string $name = '') static 获取模板变量
 * @method void fetch(string $template, array $vars = [], array $config = []) static 渲染模板文件
 * @method void display(string $content, array $vars = [], array $config = []) static 渲染模板内容
 * @method mixed layout(string $name, string $replace = '') static 设置模板布局
 */
class Template extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'template';
    }
}
