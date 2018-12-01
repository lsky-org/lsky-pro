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
 * @see \think\View
 * @mixin \think\View
 * @method \think\View init(mixed $engine = [], array $replace = []) static 初始化
 * @method \think\View share(mixed $name, mixed $value = '') static 模板变量静态赋值
 * @method \think\View assign(mixed $name, mixed $value = '') static 模板变量赋值
 * @method \think\View config(mixed $name, mixed $value = '') static 配置模板引擎
 * @method \think\View exists(mixed $name) static 检查模板是否存在
 * @method \think\View filter(Callable $filter) static 视图内容过滤
 * @method \think\View engine(mixed $engine = []) static 设置当前模板解析的引擎
 * @method string fetch(string $template = '', array $vars = [], array $config = [], bool $renderContent = false) static 解析和获取模板内容
 * @method string display(string $content = '', array $vars = [], array $config = []) static 渲染内容输出
 */
class View extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'view';
    }
}
