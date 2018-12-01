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
 * @see \think\Response
 * @mixin \think\Response
 * @method \think\response create(mixed $data = '', string $type = '', int $code = 200, array $header = [], array $options = []) static 创建Response对象
 * @method void send() static 发送数据到客户端
 * @method \think\Response options(mixed $options = []) static 输出的参数
 * @method \think\Response data(mixed $data) static 输出数据设置
 * @method \think\Response header(mixed $name, string $value = null) static 设置响应头
 * @method \think\Response content(mixed $content) static 设置页面输出内容
 * @method \think\Response code(int $code) static 发送HTTP状态
 * @method \think\Response lastModified(string $time) static LastModified
 * @method \think\Response expires(string $time) static expires
 * @method \think\Response eTag(string $eTag) static eTag
 * @method \think\Response cacheControl(string $cache) static 页面缓存控制
 * @method \think\Response contentType(string $contentType, string $charset = 'utf-8') static 页面输出类型
 * @method mixed getHeader(string $name) static 获取头部信息
 * @method mixed getData() static 获取原始数据
 * @method mixed getContent() static 获取输出数据
 * @method int getCode() static 获取状态码
 */
class Response extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'response';
    }
}
