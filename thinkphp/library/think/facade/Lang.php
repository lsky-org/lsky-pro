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
 * @see \think\Lang
 * @mixin \think\Lang
 * @method mixed range($range = '') static 设定当前的语言
 * @method mixed set(mixed $name, string $value = null, string $range = '') static 设置语言定义
 * @method array load(mixed $file, string $range = '') static 加载语言定义
 * @method mixed get(string $name = null, array $vars = [], string $range = '') static 获取语言定义
 * @method mixed has(string $name, string $range = '') static 获取语言定义
 * @method string detect() static 自动侦测设置获取语言选择
 * @method void saveToCookie(string $lang = null) static 设置当前语言到Cookie
 * @method void setLangDetectVar(string $var) static 设置语言自动侦测的变量
 * @method void setLangCookieVar(string $var) static 设置语言的cookie保存变量
 * @method void setAllowLangList(array $list) static 设置允许的语言列表
 */
class Lang extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'lang';
    }
}
