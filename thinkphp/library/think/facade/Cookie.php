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
 * @see \think\Cookie
 * @mixin \think\Cookie
 * @method void init(array $config = []) static 初始化
 * @method bool has(string $name,string $prefix = null) static 判断Cookie数据
 * @method mixed prefix(string $prefix = '') static 设置或者获取cookie作用域（前缀）
 * @method mixed get(string $name,string $prefix = null) static Cookie获取
 * @method mixed set(string $name, mixed $value = null, mixed $option = null) static 设置Cookie
 * @method void forever(string $name, mixed $value = null, mixed $option = null) static 永久保存Cookie数据
 * @method void delete(string $name, string $prefix = null) static Cookie删除
 * @method void clear($prefix = null) static Cookie清空
 */
class Cookie extends Facade
{
}
