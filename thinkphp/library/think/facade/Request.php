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
 * @see \think\Request
 * @mixin \think\Request
 * @method void hook(mixed $method, mixed $callback = null) static Hook 方法注入
 * @method \think\Request create(string $uri, string $method = 'GET', array $params = [], array $cookie = [], array $files = [], array $server = [], string $content = null) static 创建一个URL请求
 * @method mixed domain(bool $port = false) static 获取当前包含协议、端口的域名
 * @method mixed url(bool $domain = false) static 获取当前完整URL
 * @method mixed baseUrl(bool $domain = false) static 获取当前URL
 * @method mixed baseFile(bool $domain = false) static 获取当前执行的文件
 * @method mixed root(bool $domain = false) static 获取URL访问根地址
 * @method string rootUrl() static 获取URL访问根目录
 * @method string pathinfo() static 获取当前请求URL的pathinfo信息（含URL后缀）
 * @method string path() static 获取当前请求URL的pathinfo信息(不含URL后缀)
 * @method string ext() static 当前URL的访问后缀
 * @method float time(bool $float = false) static 获取当前请求的时间
 * @method mixed type() static 当前请求的资源类型
 * @method void mimeType(mixed $type, string $val = '') static 设置资源类型
 * @method string method(bool $method = false) static 当前的请求类型
 * @method bool isGet() static 是否为GET请求
 * @method bool isPost() static 是否为POST请求
 * @method bool isPut() static 是否为PUT请求
 * @method bool isDelete() static 是否为DELTE请求
 * @method bool isHead() static 是否为HEAD请求
 * @method bool isPatch() static 是否为PATCH请求
 * @method bool isOptions() static 是否为OPTIONS请求
 * @method bool isCli() static 是否为cli
 * @method bool isCgi() static 是否为cgi
 * @method mixed param(string $name = '', mixed $default = null, mixed $filter = '') static 获取当前请求的参数
 * @method mixed route(string $name = '', mixed $default = null, mixed $filter = '') static 设置获取路由参数
 * @method mixed get(string $name = '', mixed $default = null, mixed $filter = '') static 设置获取GET参数
 * @method mixed post(string $name = '', mixed $default = null, mixed $filter = '') static 设置获取POST参数
 * @method mixed put(string $name = '', mixed $default = null, mixed $filter = '') static 设置获取PUT参数
 * @method mixed delete(string $name = '', mixed $default = null, mixed $filter = '') static 设置获取DELETE参数
 * @method mixed patch(string $name = '', mixed $default = null, mixed $filter = '') static 设置获取PATCH参数
 * @method mixed request(string $name = '', mixed $default = null, mixed $filter = '') static 获取request变量
 * @method mixed session(string $name = '', mixed $default = null, mixed $filter = '') static 获取session数据
 * @method mixed cookie(string $name = '', mixed $default = null, mixed $filter = '') static 获取cookie参数
 * @method mixed server(string $name = '', mixed $default = null, mixed $filter = '') static 获取server参数
 * @method mixed env(string $name = '', mixed $default = null, mixed $filter = '') static 获取环境变量
 * @method mixed file(string $name = '') static 获取上传的文件信息
 * @method mixed header(string $name = '', mixed $default = null) static 设置或者获取当前的Header
 * @method mixed input(array $data,mixed $name = '', mixed $default = null, mixed $filter = '') static 获取变量 支持过滤和默认值
 * @method mixed filter(mixed $filter = null) static 设置或获取当前的过滤规则
 * @method mixed has(string $name, string $type = 'param', bool $checkEmpty = false) static 是否存在某个请求参数
 * @method mixed only(mixed $name, string $type = 'param') static 获取指定的参数
 * @method mixed except(mixed $name, string $type = 'param') static 排除指定参数获取
 * @method bool isSsl() static 当前是否ssl
 * @method bool isAjax(bool $ajax = false) static 当前是否Ajax请求
 * @method bool isPjax(bool $pjax = false) static 当前是否Pjax请求
 * @method mixed ip(int $type = 0, bool $adv = true) static 获取客户端IP地址
 * @method bool isMobile() static 检测是否使用手机访问
 * @method string scheme() static 当前URL地址中的scheme参数
 * @method string query() static 当前请求URL地址中的query参数
 * @method string host(bool $stric = false) static 当前请求的host
 * @method string port() static 当前请求URL地址中的port参数
 * @method string protocol() static 当前请求 SERVER_PROTOCOL
 * @method string remotePort() static 当前请求 REMOTE_PORT
 * @method string contentType() static 当前请求 HTTP_CONTENT_TYPE
 * @method array routeInfo() static 获取当前请求的路由信息
 * @method array dispatch() static 获取当前请求的调度信息
 * @method string module() static 获取当前的模块名
 * @method string controller(bool $convert = false) static 获取当前的控制器名
 * @method string action(bool $convert = false) static 获取当前的操作名
 * @method string langset() static 获取当前的语言
 * @method string getContent() static 设置或者获取当前请求的content
 * @method string getInput() static 获取当前请求的php://input
 * @method string token(string $name = '__token__', mixed $type = 'md5') static 生成请求令牌
 * @method string cache(string $key, mixed $expire = null, array $except = [], string $tag = null) static 设置当前地址的请求缓存
 * @method string getCache() static 读取请求缓存设置
 */
class Request extends Facade
{
}
