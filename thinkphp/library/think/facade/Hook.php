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
 * @see \think\Hook
 * @mixin \think\Hook
 * @method \think\Hook alias(mixed $name, mixed $behavior = null) static 指定行为标识
 * @method void add(string $tag, mixed $behavior, bool $first = false) static 动态添加行为扩展到某个标签
 * @method void import(array $tags, bool $recursive = true) static 批量导入插件
 * @method array get(string $tag = '') static 获取插件信息
 * @method mixed listen(string $tag, mixed $params = null, bool $once = false) static 监听标签的行为
 * @method mixed exec(mixed $class, mixed $params = null) static 执行行为
 */
class Hook extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'hook';
    }
}
