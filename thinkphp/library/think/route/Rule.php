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

namespace think\route;

use think\Container;
use think\Request;
use think\Response;
use think\route\dispatch\Callback as CallbackDispatch;
use think\route\dispatch\Controller as ControllerDispatch;
use think\route\dispatch\Module as ModuleDispatch;
use think\route\dispatch\Redirect as RedirectDispatch;
use think\route\dispatch\Response as ResponseDispatch;
use think\route\dispatch\View as ViewDispatch;

abstract class Rule
{
    /**
     * 路由标识
     * @var string
     */
    protected $name;

    /**
     * 路由对象
     * @var Route
     */
    protected $router;

    /**
     * 路由所属分组
     * @var RuleGroup
     */
    protected $parent;

    /**
     * 路由规则
     * @var mixed
     */
    protected $rule;

    /**
     * 路由地址
     * @var string|\Closure
     */
    protected $route;

    /**
     * 请求类型
     * @var string
     */
    protected $method;

    /**
     * 路由变量
     * @var array
     */
    protected $vars = [];

    /**
     * 路由参数
     * @var array
     */
    protected $option = [];

    /**
     * 路由变量规则
     * @var array
     */
    protected $pattern = [];

    /**
     * 需要和分组合并的路由参数
     * @var array
     */
    protected $mergeOptions = ['after', 'before', 'model', 'header', 'response', 'append', 'middleware'];

    /**
     * 是否需要后置操作
     * @var bool
     */
    protected $doAfter;

    abstract public function check($request, $url, $completeMatch = false);

    /**
     * 获取Name
     * @access public
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 获取当前路由规则
     * @access public
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * 获取当前路由地址
     * @access public
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * 获取当前路由的请求类型
     * @access public
     * @return string
     */
    public function getMethod()
    {
        return strtolower($this->method);
    }

    /**
     * 获取当前路由的变量
     * @access public
     * @return array
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * 获取路由对象
     * @access public
     * @return Route
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * 路由是否有后置操作
     * @access public
     * @return bool
     */
    public function doAfter()
    {
        return $this->doAfter;
    }

    /**
     * 获取路由分组
     * @access public
     * @return RuleGroup|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * 获取路由所在域名
     * @access public
     * @return string
     */
    public function getDomain()
    {
        return $this->parent->getDomain();
    }

    /**
     * 获取变量规则定义
     * @access public
     * @param  string  $name 变量名
     * @return mixed
     */
    public function getPattern($name = '')
    {
        if ('' === $name) {
            return $this->pattern;
        }

        return isset($this->pattern[$name]) ? $this->pattern[$name] : null;
    }

    /**
     * 获取路由参数
     * @access public
     * @param  string  $name 变量名
     * @return mixed
     */
    public function getConfig($name = '')
    {
        return $this->router->config($name);
    }

    /**
     * 获取路由参数定义
     * @access public
     * @param  string  $name 参数名
     * @return mixed
     */
    public function getOption($name = '')
    {
        if ('' === $name) {
            return $this->option;
        }

        return isset($this->option[$name]) ? $this->option[$name] : null;
    }

    /**
     * 注册路由参数
     * @access public
     * @param  string|array  $name  参数名
     * @param  mixed         $value 值
     * @return $this
     */
    public function option($name, $value = '')
    {
        if (is_array($name)) {
            $this->option = array_merge($this->option, $name);
        } else {
            $this->option[$name] = $value;
        }

        return $this;
    }

    /**
     * 注册变量规则
     * @access public
     * @param  string|array  $name 变量名
     * @param  string        $rule 变量规则
     * @return $this
     */
    public function pattern($name, $rule = '')
    {
        if (is_array($name)) {
            $this->pattern = array_merge($this->pattern, $name);
        } else {
            $this->pattern[$name] = $rule;
        }

        return $this;
    }

    /**
     * 设置标识
     * @access public
     * @param  string  $name 标识名
     * @return $this
     */
    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * 设置变量
     * @access public
     * @param  array  $vars 变量
     * @return $this
     */
    public function vars($vars)
    {
        $this->vars = $vars;

        return $this;
    }

    /**
     * 设置路由请求类型
     * @access public
     * @param  string     $method
     * @return $this
     */
    public function method($method)
    {
        return $this->option('method', strtolower($method));
    }

    /**
     * 设置路由前置行为
     * @access public
     * @param  array|\Closure    $before
     * @return $this
     */
    public function before($before)
    {
        return $this->option('before', $before);
    }

    /**
     * 设置路由后置行为
     * @access public
     * @param  array|\Closure     $after
     * @return $this
     */
    public function after($after)
    {
        return $this->option('after', $after);
    }

    /**
     * 检查后缀
     * @access public
     * @param  string     $ext
     * @return $this
     */
    public function ext($ext = '')
    {
        return $this->option('ext', $ext);
    }

    /**
     * 检查禁止后缀
     * @access public
     * @param  string     $ext
     * @return $this
     */
    public function denyExt($ext = '')
    {
        return $this->option('deny_ext', $ext);
    }

    /**
     * 检查域名
     * @access public
     * @param  string     $domain
     * @return $this
     */
    public function domain($domain)
    {
        return $this->option('domain', $domain);
    }

    /**
     * 设置参数过滤检查
     * @access public
     * @param  string|array     $name
     * @param  mixed            $value
     * @return $this
     */
    public function filter($name, $value = null)
    {
        if (is_array($name)) {
            $this->option['filter'] = $name;
        } else {
            $this->option['filter'][$name] = $value;
        }

        return $this;
    }

    /**
     * 绑定模型
     * @access public
     * @param  array|string      $var  路由变量名 多个使用 & 分割
     * @param  string|\Closure   $model 绑定模型类
     * @param  bool              $exception 是否抛出异常
     * @return $this
     */
    public function model($var, $model = null, $exception = true)
    {
        if ($var instanceof \Closure) {
            $this->option['model'][] = $var;
        } elseif (is_array($var)) {
            $this->option['model'] = $var;
        } elseif (is_null($model)) {
            $this->option['model']['id'] = [$var, true];
        } else {
            $this->option['model'][$var] = [$model, $exception];
        }

        return $this;
    }

    /**
     * 附加路由隐式参数
     * @access public
     * @param  array     $append
     * @return $this
     */
    public function append(array $append = [])
    {
        if (isset($this->option['append'])) {
            $this->option['append'] = array_merge($this->option['append'], $append);
        } else {
            $this->option['append'] = $append;
        }

        return $this;
    }

    /**
     * 绑定验证
     * @access public
     * @param  mixed    $validate 验证器类
     * @param  string   $scene 验证场景
     * @param  array    $message 验证提示
     * @param  bool     $batch 批量验证
     * @return $this
     */
    public function validate($validate, $scene = null, $message = [], $batch = false)
    {
        $this->option['validate'] = [$validate, $scene, $message, $batch];

        return $this;
    }

    /**
     * 绑定Response对象
     * @access public
     * @param  mixed     $response
     * @return $this
     */
    public function response($response)
    {
        $this->option['response'][] = $response;
        return $this;
    }

    /**
     * 设置Response Header信息
     * @access public
     * @param  string|array $name  参数名
     * @param  string       $value 参数值
     * @return $this
     */
    public function header($header, $value = null)
    {
        if (is_array($header)) {
            $this->option['header'] = $header;
        } else {
            $this->option['header'][$header] = $value;
        }

        return $this;
    }

    /**
     * 指定路由中间件
     * @access public
     * @param  string|array|\Closure    $middleware
     * @param  mixed                    $param
     * @return $this
     */
    public function middleware($middleware, $param = null)
    {
        if (is_null($param) && is_array($middleware)) {
            $this->option['middleware'] = $middleware;
        } else {
            foreach ((array) $middleware as $item) {
                $this->option['middleware'][] = [$item, $param];
            }
        }

        return $this;
    }

    /**
     * 设置路由缓存
     * @access public
     * @param  array|string     $cache
     * @return $this
     */
    public function cache($cache)
    {
        return $this->option('cache', $cache);
    }

    /**
     * 检查URL分隔符
     * @access public
     * @param  bool     $depr
     * @return $this
     */
    public function depr($depr)
    {
        return $this->option('param_depr', $depr);
    }

    /**
     * 是否合并额外参数
     * @access public
     * @param  bool     $merge
     * @return $this
     */
    public function mergeExtraVars($merge = true)
    {
        return $this->option('merge_extra_vars', $merge);
    }

    /**
     * 设置需要合并的路由参数
     * @access public
     * @param  array     $option
     * @return $this
     */
    public function mergeOptions($option = [])
    {
        $this->mergeOptions = array_merge($this->mergeOptions, $option);
        return $this;
    }

    /**
     * 检查是否为HTTPS请求
     * @access public
     * @param  bool     $https
     * @return $this
     */
    public function https($https = true)
    {
        return $this->option('https', $https);
    }

    /**
     * 检查是否为AJAX请求
     * @access public
     * @param  bool     $ajax
     * @return $this
     */
    public function ajax($ajax = true)
    {
        return $this->option('ajax', $ajax);
    }

    /**
     * 检查是否为PJAX请求
     * @access public
     * @param  bool     $pjax
     * @return $this
     */
    public function pjax($pjax = true)
    {
        return $this->option('pjax', $pjax);
    }

    /**
     * 检查是否为手机访问
     * @access public
     * @param  bool     $mobile
     * @return $this
     */
    public function mobile($mobile = true)
    {
        return $this->option('mobile', $mobile);
    }

    /**
     * 当前路由到一个模板地址 当使用数组的时候可以传入模板变量
     * @access public
     * @param  bool|array     $view
     * @return $this
     */
    public function view($view = true)
    {
        return $this->option('view', $view);
    }

    /**
     * 当前路由为重定向
     * @access public
     * @param  bool   $redirect 是否为重定向
     * @return $this
     */
    public function redirect($redirect = true)
    {
        return $this->option('redirect', $redirect);
    }

    /**
     * 设置路由完整匹配
     * @access public
     * @param  bool     $match
     * @return $this
     */
    public function completeMatch($match = true)
    {
        return $this->option('complete_match', $match);
    }

    /**
     * 是否去除URL最后的斜线
     * @access public
     * @param  bool     $remove
     * @return $this
     */
    public function removeSlash($remove = true)
    {
        return $this->option('remove_slash', $remove);
    }

    /**
     * 设置是否允许跨域
     * @access public
     * @param  bool     $allow
     * @param  array    $header
     * @return $this
     */
    public function allowCrossDomain($allow = true, $header = [])
    {
        if (!empty($header)) {
            $this->header($header);
        }

        if ($allow && $this->parent) {
            $this->parent->addRuleItem($this, 'options');
        }

        return $this->option('cross_domain', $allow);
    }

    /**
     * 检查OPTIONS请求
     * @access public
     * @param  Request     $request
     * @return Dispatch|void
     */
    protected function checkCrossDomain($request)
    {
        if (!empty($this->option['cross_domain'])) {

            $header = [
                'Access-Control-Allow-Origin'  => '*',
                'Access-Control-Allow-Methods' => 'GET, POST, PATCH, PUT, DELETE',
                'Access-Control-Allow-Headers' => 'Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With',
            ];

            if (!empty($this->option['header'])) {
                $header = array_merge($header, $this->option['header']);
            }

            $this->option['header'] = $header;

            if ($request->method(true) == 'OPTIONS') {
                return new ResponseDispatch($request, $this, Response::create()->code(204)->header($header));
            }
        }
    }

    /**
     * 设置路由规则全局有效
     * @access public
     * @return $this
     */
    public function crossDomainRule()
    {
        if ($this instanceof RuleGroup) {
            $method = '*';
        } else {
            $method = $this->method;
        }

        $this->router->setCrossDomainRule($this, $method);

        return $this;
    }

    /**
     * 合并分组参数
     * @access protected
     * @return void
     */
    protected function mergeGroupOptions()
    {
        $parentOption = $this->parent->getOption();
        // 合并分组参数
        foreach ($this->mergeOptions as $item) {
            if (isset($parentOption[$item]) && isset($this->option[$item])) {
                $this->option[$item] = array_merge($parentOption[$item], $this->option[$item]);
            }
        }

        $this->option = array_merge($parentOption, $this->option);

        return $this->option;
    }

    /**
     * 解析匹配到的规则路由
     * @access public
     * @param  Request   $request 请求对象
     * @param  string    $rule 路由规则
     * @param  string    $route 路由地址
     * @param  string    $url URL地址
     * @param  array     $option 路由参数
     * @param  array     $matches 匹配的变量
     * @return Dispatch
     */
    public function parseRule($request, $rule, $route, $url, $option = [], $matches = [])
    {
        if (is_string($route) && isset($option['prefix'])) {
            // 路由地址前缀
            $route = $option['prefix'] . $route;
        }

        // 替换路由地址中的变量
        if (is_string($route) && !empty($matches)) {
            foreach ($matches as $key => $val) {
                if (false !== strpos($route, '<' . $key . '>')) {
                    $route = str_replace('<' . $key . '>', $val, $route);
                } elseif (false !== strpos($route, ':' . $key)) {
                    $route = str_replace(':' . $key, $val, $route);
                }
            }
        }

        // 解析额外参数
        $count = substr_count($rule, '/');
        $url   = array_slice(explode('|', $url), $count + 1);
        $this->parseUrlParams($request, implode('|', $url), $matches);

        $this->route   = $route;
        $this->vars    = $matches;
        $this->option  = $option;
        $this->doAfter = true;

        // 发起路由调度
        return $this->dispatch($request, $route, $option);
    }

    /**
     * 检查路由前置行为
     * @access protected
     * @param  mixed   $before 前置行为
     * @return mixed
     */
    protected function checkBefore($before)
    {
        $hook = Container::get('hook');

        foreach ((array) $before as $behavior) {
            $result = $hook->exec($behavior);

            if (false === $result) {
                return false;
            }
        }
    }

    /**
     * 发起路由调度
     * @access protected
     * @param  Request   $request Request对象
     * @param  mixed     $route  路由地址
     * @param  array     $option 路由参数
     * @return Dispatch
     */
    protected function dispatch($request, $route, $option)
    {
        if ($route instanceof \Closure) {
            // 执行闭包
            $result = new CallbackDispatch($request, $this, $route);
        } elseif ($route instanceof Response) {
            $result = new ResponseDispatch($request, $this, $route);
        } elseif (isset($option['view']) && false !== $option['view']) {
            $result = new ViewDispatch($request, $this, $route, is_array($option['view']) ? $option['view'] : []);
        } elseif (!empty($option['redirect']) || 0 === strpos($route, '/') || strpos($route, '://')) {
            // 路由到重定向地址
            $result = new RedirectDispatch($request, $this, $route, [], isset($option['status']) ? $option['status'] : 301);
        } elseif (false !== strpos($route, '\\')) {
            // 路由到方法
            $result = $this->dispatchMethod($request, $route);
        } elseif (0 === strpos($route, '@')) {
            // 路由到控制器
            $result = $this->dispatchController($request, substr($route, 1));
        } else {
            // 路由到模块/控制器/操作
            $result = $this->dispatchModule($request, $route);
        }

        return $result;
    }

    /**
     * 解析URL地址为 模块/控制器/操作
     * @access protected
     * @param  Request   $request Request对象
     * @param  string    $route 路由地址
     * @return CallbackDispatch
     */
    protected function dispatchMethod($request, $route)
    {
        list($path, $var) = $this->parseUrlPath($route);

        $route  = str_replace('/', '@', implode('/', $path));
        $method = strpos($route, '@') ? explode('@', $route) : $route;

        return new CallbackDispatch($request, $this, $method, $var);
    }

    /**
     * 解析URL地址为 模块/控制器/操作
     * @access protected
     * @param  Request   $request Request对象
     * @param  string    $route 路由地址
     * @return ControllerDispatch
     */
    protected function dispatchController($request, $route)
    {
        list($route, $var) = $this->parseUrlPath($route);

        $result = new ControllerDispatch($request, $this, implode('/', $route), $var);

        $request->setAction(array_pop($route));
        $request->setController($route ? array_pop($route) : $this->getConfig('default_controller'));
        $request->setModule($route ? array_pop($route) : $this->getConfig('default_module'));

        return $result;
    }

    /**
     * 解析URL地址为 模块/控制器/操作
     * @access protected
     * @param  Request   $request Request对象
     * @param  string    $route 路由地址
     * @return ModuleDispatch
     */
    protected function dispatchModule($request, $route)
    {
        list($path, $var) = $this->parseUrlPath($route);

        $action     = array_pop($path);
        $controller = !empty($path) ? array_pop($path) : null;
        $module     = $this->getConfig('app_multi_module') && !empty($path) ? array_pop($path) : null;
        $method     = $request->method();

        if ($this->getConfig('use_action_prefix') && $this->router->getMethodPrefix($method)) {
            $prefix = $this->router->getMethodPrefix($method);
            // 操作方法前缀支持
            $action = 0 !== strpos($action, $prefix) ? $prefix . $action : $action;
        }

        // 设置当前请求的路由变量
        $request->setRouteVars($var);

        // 路由到模块/控制器/操作
        return new ModuleDispatch($request, $this, [$module, $controller, $action], ['convert' => false]);
    }

    /**
     * 路由检查
     * @access protected
     * @param  array     $option 路由参数
     * @param  Request   $request Request对象
     * @return bool
     */
    protected function checkOption($option, Request $request)
    {
        // 请求类型检测
        if (!empty($option['method'])) {
            if (is_string($option['method']) && false === stripos($option['method'], $request->method())) {
                return false;
            }
        }

        // AJAX PJAX 请求检查
        foreach (['ajax', 'pjax', 'mobile'] as $item) {
            if (isset($option[$item])) {
                $call = 'is' . $item;
                if ($option[$item] && !$request->$call() || !$option[$item] && $request->$call()) {
                    return false;
                }
            }
        }

        // 伪静态后缀检测
        if ($request->url() != '/' && ((isset($option['ext']) && false === stripos('|' . $option['ext'] . '|', '|' . $request->ext() . '|'))
            || (isset($option['deny_ext']) && false !== stripos('|' . $option['deny_ext'] . '|', '|' . $request->ext() . '|')))) {
            return false;
        }

        // 域名检查
        if ((isset($option['domain']) && !in_array($option['domain'], [$request->host(true), $request->subDomain()]))) {
            return false;
        }

        // HTTPS检查
        if ((isset($option['https']) && $option['https'] && !$request->isSsl())
            || (isset($option['https']) && !$option['https'] && $request->isSsl())) {
            return false;
        }

        // 请求参数检查
        if (isset($option['filter'])) {
            foreach ($option['filter'] as $name => $value) {
                if ($request->param($name, '', null) != $value) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * 解析URL地址中的参数Request对象
     * @access protected
     * @param  Request   $request
     * @param  string    $rule 路由规则
     * @param  array     $var 变量
     * @return void
     */
    protected function parseUrlParams($request, $url, &$var = [])
    {
        if ($url) {
            if ($this->getConfig('url_param_type')) {
                $var += explode('|', $url);
            } else {
                preg_replace_callback('/(\w+)\|([^\|]+)/', function ($match) use (&$var) {
                    $var[$match[1]] = strip_tags($match[2]);
                }, $url);
            }
        }
    }

    /**
     * 解析URL的pathinfo参数和变量
     * @access public
     * @param  string    $url URL地址
     * @return array
     */
    public function parseUrlPath($url)
    {
        // 分隔符替换 确保路由定义使用统一的分隔符
        $url = str_replace('|', '/', $url);
        $url = trim($url, '/');
        $var = [];

        if (false !== strpos($url, '?')) {
            // [模块/控制器/操作?]参数1=值1&参数2=值2...
            $info = parse_url($url);
            $path = explode('/', $info['path']);
            parse_str($info['query'], $var);
        } elseif (strpos($url, '/')) {
            // [模块/控制器/操作]
            $path = explode('/', $url);
        } elseif (false !== strpos($url, '=')) {
            // 参数1=值1&参数2=值2...
            $path = [];
            parse_str($url, $var);
        } else {
            $path = [$url];
        }

        return [$path, $var];
    }

    /**
     * 生成路由的正则规则
     * @access protected
     * @param  string    $rule 路由规则
     * @param  array     $match 匹配的变量
     * @param  array     $pattern   路由变量规则
     * @param  array     $option    路由参数
     * @param  bool      $completeMatch   路由是否完全匹配
     * @param  string    $suffix   路由正则变量后缀
     * @return string
     */
    protected function buildRuleRegex($rule, $match, $pattern = [], $option = [], $completeMatch = false, $suffix = '')
    {
        foreach ($match as $name) {
            $replace[] = $this->buildNameRegex($name, $pattern, $suffix);
        }

        // 是否区分 / 地址访问
        if ('/' != $rule) {
            if (!empty($option['remove_slash'])) {
                $rule = rtrim($rule, '/');
            } elseif (substr($rule, -1) == '/') {
                $rule     = rtrim($rule, '/');
                $hasSlash = true;
            }
        }

        $regex = str_replace($match, $replace, $rule);
        $regex = str_replace([')?/', ')/', ')?-', ')-', '\\\\/'], [')\/', ')\/', ')\-', ')\-', '\/'], $regex);

        if (isset($hasSlash)) {
            $regex .= '\/';
        }

        return $regex . ($completeMatch ? '$' : '');
    }

    /**
     * 生成路由变量的正则规则
     * @access protected
     * @param  string    $name      路由变量
     * @param  string    $pattern   变量规则
     * @param  string    $suffix    路由正则变量后缀
     * @return string
     */
    protected function buildNameRegex($name, $pattern, $suffix)
    {
        $optional = '';
        $slash    = substr($name, 0, 1);

        if (in_array($slash, ['/', '-'])) {
            $prefix = '\\' . $slash;
            $name   = substr($name, 1);
            $slash  = substr($name, 0, 1);
        } else {
            $prefix = '';
        }

        if ('<' != $slash) {
            return $prefix . preg_quote($name, '/');
        }

        if (strpos($name, '?')) {
            $name     = substr($name, 1, -2);
            $optional = '?';
        } elseif (strpos($name, '>')) {
            $name = substr($name, 1, -1);
        }

        if (isset($pattern[$name])) {
            $nameRule = $pattern[$name];
            if (0 === strpos($nameRule, '/') && '/' == substr($nameRule, -1)) {
                $nameRule = substr($nameRule, 1, -1);
            }
        } else {
            $nameRule = $this->getConfig('default_route_pattern');
        }

        return '(' . $prefix . '(?<' . $name . $suffix . '>' . $nameRule . '))' . $optional;
    }

    /**
     * 分析路由规则中的变量
     * @access protected
     * @param  string    $rule 路由规则
     * @return array
     */
    protected function parseVar($rule)
    {
        // 提取路由规则中的变量
        $var = [];

        if (preg_match_all('/<\w+\??>/', $rule, $matches)) {
            foreach ($matches[0] as $name) {
                $optional = false;

                if (strpos($name, '?')) {
                    $name     = substr($name, 1, -2);
                    $optional = true;
                } else {
                    $name = substr($name, 1, -1);
                }

                $var[$name] = $optional ? 2 : 1;
            }
        }

        return $var;
    }

    /**
     * 设置路由参数
     * @access public
     * @param  string    $method     方法名
     * @param  array     $args       调用参数
     * @return $this
     */
    public function __call($method, $args)
    {
        if (count($args) > 1) {
            $args[0] = $args;
        }
        array_unshift($args, $method);

        return call_user_func_array([$this, 'option'], $args);
    }

    public function __sleep()
    {
        return ['name', 'rule', 'route', 'method', 'vars', 'option', 'pattern', 'doAfter'];
    }

    public function __wakeup()
    {
        $this->router = Container::get('route');
    }
}
