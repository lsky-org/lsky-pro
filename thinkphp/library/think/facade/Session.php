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
 * @see \think\Session
 * @mixin \think\Session
 * @method void init(array $config = []) static session初始化
 * @method bool has(string $name,string $prefix = null) static 判断session数据
 * @method mixed prefix(string $prefix = '') static 设置或者获取session作用域（前缀）
 * @method mixed get(string $name = '',string $prefix = null) static session获取
 * @method mixed pull(string $name,string $prefix = null) static session获取并删除
 * @method void push(string $key, mixed $value) static 添加数据到一个session数组
 * @method void set(string $name, mixed $value , string $prefix = null) static 设置session数据
 * @method void flash(string $name, mixed $value = null) static session设置 下一次请求有效
 * @method void flush() static 清空当前请求的session数据
 * @method void delete(string $name, string $prefix = null) static 删除session数据
 * @method void clear($prefix = null) static 清空session数据
 * @method void start() static 启动session
 * @method void destroy() static 销毁session
 * @method void pause() static 暂停session
 * @method void regenerate(bool $delete = false) static 重新生成session_id
 */
class Session extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'session';
    }
}
