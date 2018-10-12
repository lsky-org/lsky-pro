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
 * @see \think\Build
 * @mixin \think\Build
 * @method void run(array $build = [], string $namespace = 'app', bool $suffix = false) static 根据传入的build资料创建目录和文件
 * @method void module(string $module = '', array $list = [], string $namespace = 'app', bool $suffix = false) static 创建模块
 */
class Build extends Facade
{
}
