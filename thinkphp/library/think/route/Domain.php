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
use think\Loader;
use think\Request;
use think\Route;
use think\route\dispatch\Callback as CallbackDispatch;
use think\route\dispatch\Controller as ControllerDispatch;
use think\route\dispatch\Module as ModuleDispatch;

class Domain extends RuleGroup
{
    /**
     * 架构函数
     * @access public
     * @param  Route       $router   路由对象
     * @param  string      $name     路由域名
     * @param  mixed       $rule     域名路由
     * @param  array       $option   路由参数
     * @param  array       $pattern  变量规则
     */
    public function __construct(Route $router, $name = '', $rule = null, $option = [], $pattern = [])
    {
        $this->router  = $router;
        $this->domain  = $name;
        $this->option  = $option;
        $this->rule    = $rule;
        $this->pattern = $pattern;
    }

    /**
     * 检测域名路由
     * @access public
     * @param  Request      $request  请求对象
     * @param  string       $url      访问地址
     * @param  bool         $completeMatch   路由是否完全匹配
     * @return Dispatch|false
     */
    public function check($request, $url, $completeMatch = false)
    {
        // 检测别名路由
        $result = $this->checkRouteAlias($request, $url);

        if (false !== $result) {
            return $result;
        }

        // 检测URL绑定
        $result = $this->checkUrlBind($request, $url);

        if (!empty($this->option['append'])) {
            $request->setRouteVars($this->option['append']);
            unset($this->option['append']);
        }

        if (false !== $result) {
            return $result;
        }

        // 添加域名中间件
        if (!empty($this->option['middleware'])) {
            Container::get('middleware')->import($this->option['middleware']);
            unset($this->option['middleware']);
        }

        return parent::check($request, $url, $completeMatch);
    }

    /**
     * 设置路由绑定
     * @access public
     * @param  string     $bind 绑定信息
     * @return $this
     */
    public function bind($bind)
    {
        $this->router->bind($bind, $this->domain);
        return $this;
    }

    /**
     * 检测路由别名
     * @access private
     * @param  Request   $request
     * @param  string    $url URL地址
     * @return Dispatch|false
     */
    private function checkRouteAlias($request, $url)
    {
        $alias = strpos($url, '|') ? strstr($url, '|', true) : $url;

        $item = $this->router->getAlias($alias);

        return $item ? $item->check($request, $url) : false;
    }

    /**
     * 检测URL绑定
     * @access private
     * @param  Request   $request
     * @param  string    $url URL地址
     * @return Dispatch|false
     */
    private function checkUrlBind($request, $url)
    {
        $bind = $this->router->getBind($this->domain);

        if (!empty($bind)) {
            $this->parseBindAppendParam($bind);

            // 记录绑定信息
            Container::get('app')->log('[ BIND ] ' . var_export($bind, true));

            // 如果有URL绑定 则进行绑定检测
            $type = substr($bind, 0, 1);
            $bind = substr($bind, 1);

            $bindTo = [
                '\\' => 'bindToClass',
                '@'  => 'bindToController',
                ':'  => 'bindToNamespace',
            ];

            if (isset($bindTo[$type])) {
                return $this->{$bindTo[$type]}($request, $url, $bind);
            }
        }

        return false;
    }

    protected function parseBindAppendParam(&$bind)
    {
        if (false !== strpos($bind, '?')) {
            list($bind, $query) = explode('?', $bind);
            parse_str($query, $vars);
            $this->append($vars);
        }
    }

    /**
     * 绑定到类
     * @access protected
     * @param  Request   $request
     * @param  string    $url URL地址
     * @param  string    $class 类名（带命名空间）
     * @return CallbackDispatch
     */
    protected function bindToClass($request, $url, $class)
    {
        $array  = explode('|', $url, 2);
        $action = !empty($array[0]) ? $array[0] : $this->router->config('default_action');
        $param  = [];

        if (!empty($array[1])) {
            $this->parseUrlParams($request, $array[1], $param);
        }

        return new CallbackDispatch($request, $this, [$class, $action], $param);
    }

    /**
     * 绑定到命名空间
     * @access protected
     * @param  Request   $request
     * @param  string    $url URL地址
     * @param  string    $namespace 命名空间
     * @return CallbackDispatch
     */
    protected function bindToNamespace($request, $url, $namespace)
    {
        $array  = explode('|', $url, 3);
        $class  = !empty($array[0]) ? $array[0] : $this->router->config('default_controller');
        $method = !empty($array[1]) ? $array[1] : $this->router->config('default_action');
        $param  = [];

        if (!empty($array[2])) {
            $this->parseUrlParams($request, $array[2], $param);
        }

        return new CallbackDispatch($request, $this, [$namespace . '\\' . Loader::parseName($class, 1), $method], $param);
    }

    /**
     * 绑定到控制器类
     * @access protected
     * @param  Request   $request
     * @param  string    $url URL地址
     * @param  string    $controller 控制器名 （支持带模块名 index/user ）
     * @return ControllerDispatch
     */
    protected function bindToController($request, $url, $controller)
    {
        $array  = explode('|', $url, 2);
        $action = !empty($array[0]) ? $array[0] : $this->router->config('default_action');
        $param  = [];

        if (!empty($array[1])) {
            $this->parseUrlParams($request, $array[1], $param);
        }

        return new ControllerDispatch($request, $this, $controller . '/' . $action, $param);
    }

    /**
     * 绑定到模块/控制器
     * @access protected
     * @param  Request   $request
     * @param  string    $url URL地址
     * @param  string    $controller 控制器类名（带命名空间）
     * @return ModuleDispatch
     */
    protected function bindToModule($request, $url, $controller)
    {
        $array  = explode('|', $url, 2);
        $action = !empty($array[0]) ? $array[0] : $this->router->config('default_action');
        $param  = [];

        if (!empty($array[1])) {
            $this->parseUrlParams($request, $array[1], $param);
        }

        return new ModuleDispatch($request, $this, $controller . '/' . $action, $param);
    }

}
