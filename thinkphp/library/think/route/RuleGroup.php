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
use think\Exception;
use think\Request;
use think\Response;
use think\Route;
use think\route\dispatch\Response as ResponseDispatch;
use think\route\dispatch\Url as UrlDispatch;

class RuleGroup extends Rule
{
    // 分组路由（包括子分组）
    protected $rules = [
        '*'       => [],
        'get'     => [],
        'post'    => [],
        'put'     => [],
        'patch'   => [],
        'delete'  => [],
        'head'    => [],
        'options' => [],
    ];

    // MISS路由
    protected $miss;

    // 自动路由
    protected $auto;

    // 完整名称
    protected $fullName;

    // 所在域名
    protected $domain;

    /**
     * 架构函数
     * @access public
     * @param  Route       $router   路由对象
     * @param  RuleGroup   $parent   上级对象
     * @param  string      $name     分组名称
     * @param  mixed       $rule     分组路由
     * @param  array       $option   路由参数
     * @param  array       $pattern  变量规则
     */
    public function __construct(Route $router, RuleGroup $parent = null, $name = '', $rule = [], $option = [], $pattern = [])
    {
        $this->router  = $router;
        $this->parent  = $parent;
        $this->rule    = $rule;
        $this->name    = trim($name, '/');
        $this->option  = $option;
        $this->pattern = $pattern;

        $this->setFullName();

        if ($this->parent) {
            $this->domain = $this->parent->getDomain();
            $this->parent->addRuleItem($this);
        }

        if (!empty($option['cross_domain'])) {
            $this->router->setCrossDomainRule($this);
        }
    }

    /**
     * 设置分组的路由规则
     * @access public
     * @return void
     */
    protected function setFullName()
    {
        if (false !== strpos($this->name, ':')) {
            $this->name = preg_replace(['/\[\:(\w+)\]/', '/\:(\w+)/'], ['<\1?>', '<\1>'], $this->name);
        }

        if ($this->parent && $this->parent->getFullName()) {
            $this->fullName = $this->parent->getFullName() . ($this->name ? '/' . $this->name : '');
        } else {
            $this->fullName = $this->name;
        }
    }

    /**
     * 获取所属域名
     * @access public
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * 检测分组路由
     * @access public
     * @param  Request      $request  请求对象
     * @param  string       $url      访问地址
     * @param  bool         $completeMatch   路由是否完全匹配
     * @return Dispatch|false
     */
    public function check($request, $url, $completeMatch = false)
    {
        if ($dispatch = $this->checkCrossDomain($request)) {
            // 跨域OPTIONS请求
            return $dispatch;
        }

        // 检查分组有效性
        if (!$this->checkOption($this->option, $request) || !$this->checkUrl($url)) {
            return false;
        }

        // 解析分组路由
        if ($this instanceof Resource) {
            $this->buildResourceRule($this->resource, $this->option);
        } elseif ($this->rule) {
            if ($this->rule instanceof Response) {
                return new ResponseDispatch($request, $this, $this->rule);
            }

            $this->parseGroupRule($this->rule);
        }

        // 获取当前路由规则
        $method = strtolower($request->method());
        $rules  = $this->getMethodRules($method);

        if (count($rules) == 0) {
            return false;
        }

        if ($this->parent) {
            // 合并分组参数
            $this->mergeGroupOptions();
            // 合并分组变量规则
            $this->pattern = array_merge($this->parent->getPattern(), $this->pattern);
        }

        if (isset($this->option['complete_match'])) {
            $completeMatch = $this->option['complete_match'];
        }

        if (!empty($this->option['merge_rule_regex'])) {
            // 合并路由正则规则进行路由匹配检查
            $result = $this->checkMergeRuleRegex($request, $rules, $url, $completeMatch);

            if (false !== $result) {
                return $result;
            }
        }

        // 检查分组路由
        foreach ($rules as $key => $item) {
            $result = $item->check($request, $url, $completeMatch);

            if (false !== $result) {
                return $result;
            }
        }

        if ($this->auto) {
            // 自动解析URL地址
            $result = new UrlDispatch($request, $this, $this->auto . '/' . $url, ['auto_search' => false]);
        } elseif ($this->miss && in_array($this->miss->getMethod(), ['*', $method])) {
            // 未匹配所有路由的路由规则处理
            $result = $this->miss->parseRule($request, '', $this->miss->getRoute(), $url, $this->miss->getOption());
        } else {
            $result = false;
        }

        return $result;
    }

    /**
     * 获取当前请求的路由规则（包括子分组、资源路由）
     * @access protected
     * @param  string      $method
     * @return array
     */
    protected function getMethodRules($method)
    {
        return array_merge($this->rules[$method], $this->rules['*']);
    }

    /**
     * 分组URL匹配检查
     * @access protected
     * @param  string     $url
     * @return bool
     */
    protected function checkUrl($url)
    {
        if ($this->fullName) {
            $pos = strpos($this->fullName, '<');

            if (false !== $pos) {
                $str = substr($this->fullName, 0, $pos);
            } else {
                $str = $this->fullName;
            }

            if ($str && 0 !== stripos(str_replace('|', '/', $url), $str)) {
                return false;
            }
        }

        return true;
    }

    /**
     * 延迟解析分组的路由规则
     * @access public
     * @param  bool     $lazy   路由是否延迟解析
     * @return $this
     */
    public function lazy($lazy = true)
    {
        if (!$lazy) {
            $this->parseGroupRule($this->rule);
            $this->rule = null;
        }

        return $this;
    }

    /**
     * 解析分组和域名的路由规则及绑定
     * @access public
     * @param  mixed        $rule    路由规则
     * @return void
     */
    public function parseGroupRule($rule)
    {
        $origin = $this->router->getGroup();
        $this->router->setGroup($this);

        if ($rule instanceof \Closure) {
            Container::getInstance()->invokeFunction($rule);
        } elseif (is_array($rule)) {
            $this->addRules($rule);
        } elseif (is_string($rule) && $rule) {
            $this->router->bind($rule, $this->domain);
        }

        $this->router->setGroup($origin);
    }

    /**
     * 检测分组路由
     * @access public
     * @param  Request      $request  请求对象
     * @param  array        $rules    路由规则
     * @param  string       $url      访问地址
     * @param  bool         $completeMatch   路由是否完全匹配
     * @return Dispatch|false
     */
    protected function checkMergeRuleRegex($request, &$rules, $url, $completeMatch)
    {
        $depr = $this->router->config('pathinfo_depr');
        $url  = $depr . str_replace('|', $depr, $url);

        foreach ($rules as $key => $item) {
            if ($item instanceof RuleItem) {
                $rule = $depr . str_replace('/', $depr, $item->getRule());
                if ($depr == $rule && $depr != $url) {
                    unset($rules[$key]);
                    continue;
                }

                $complete = null !== $item->getOption('complete_match') ? $item->getOption('complete_match') : $completeMatch;

                if (false === strpos($rule, '<')) {
                    if (0 === strcasecmp($rule, $url) || (!$complete && 0 === strncasecmp($rule, $url, strlen($rule)))) {
                        return $item->checkRule($request, $url, []);
                    }

                    unset($rules[$key]);
                    continue;
                }

                $slash = preg_quote('/-' . $depr, '/');

                if ($matchRule = preg_split('/[' . $slash . ']<\w+\??>/', $rule, 2)) {
                    if ($matchRule[0] && 0 !== strncasecmp($rule, $url, strlen($matchRule[0]))) {
                        unset($rules[$key]);
                        continue;
                    }
                }

                if (preg_match_all('/[' . $slash . ']?<?\w+\??>?/', $rule, $matches)) {
                    unset($rules[$key]);
                    $pattern = array_merge($this->getPattern(), $item->getPattern());
                    $option  = array_merge($this->getOption(), $item->getOption());

                    $regex[$key] = $this->buildRuleRegex($rule, $matches[0], $pattern, $option, $complete, '_THINK_' . $key);
                    $items[$key] = $item;
                }
            }
        }

        if (empty($regex)) {
            return false;
        }

        try {
            $result = preg_match('/^(?:' . implode('|', $regex) . ')/u', $url, $match);
        } catch (\Exception $e) {
            throw new Exception('route pattern error');
        }

        if ($result) {
            $var = [];
            foreach ($match as $key => $val) {
                if (is_string($key) && '' !== $val) {
                    list($name, $pos) = explode('_THINK_', $key);

                    $var[$name] = $val;
                }
            }

            if (!isset($pos)) {
                foreach ($regex as $key => $item) {
                    if (0 === strpos(str_replace(['\/', '\-', '\\' . $depr], ['/', '-', $depr], $item), $match[0])) {
                        $pos = $key;
                        break;
                    }
                }
            }

            $rule  = $items[$pos]->getRule();
            $array = $this->router->getRule($rule);

            foreach ($array as $item) {
                if (in_array($item->getMethod(), ['*', strtolower($request->method())])) {
                    $result = $item->checkRule($request, $url, $var);

                    if (false !== $result) {
                        return $result;
                    }
                }
            }
        }

        return false;
    }

    /**
     * 获取分组的MISS路由
     * @access public
     * @return RuleItem|null
     */
    public function getMissRule()
    {
        return $this->miss;
    }

    /**
     * 获取分组的自动路由
     * @access public
     * @return string
     */
    public function getAutoRule()
    {
        return $this->auto;
    }

    /**
     * 注册自动路由
     * @access public
     * @param  string     $route   路由规则
     * @return void
     */
    public function addAutoRule($route)
    {
        $this->auto = $route;
    }

    /**
     * 注册MISS路由
     * @access public
     * @param  string    $route      路由地址
     * @param  string    $method     请求类型
     * @param  array     $option     路由参数
     * @return RuleItem
     */
    public function addMissRule($route, $method = '*', $option = [])
    {
        // 创建路由规则实例
        $ruleItem = new RuleItem($this->router, $this, null, '', $route, strtolower($method), $option);

        $this->miss = $ruleItem;

        return $ruleItem;
    }

    /**
     * 添加分组下的路由规则或者子分组
     * @access public
     * @param  string    $rule       路由规则
     * @param  string    $route      路由地址
     * @param  string    $method     请求类型
     * @param  array     $option     路由参数
     * @param  array     $pattern    变量规则
     * @return $this
     */
    public function addRule($rule, $route, $method = '*', $option = [], $pattern = [])
    {
        // 读取路由标识
        if (is_array($rule)) {
            $name = $rule[0];
            $rule = $rule[1];
        } elseif (is_string($route)) {
            $name = $route;
        } else {
            $name = null;
        }

        $method = strtolower($method);

        if ('/' === $rule || '' === $rule) {
            // 首页自动完整匹配
            $rule .= '$';
        }

        // 创建路由规则实例
        $ruleItem = new RuleItem($this->router, $this, $name, $rule, $route, $method, $option, $pattern);

        if (!empty($option['cross_domain'])) {
            $this->router->setCrossDomainRule($ruleItem, $method);
        }

        $this->addRuleItem($ruleItem, $method);

        return $ruleItem;
    }

    /**
     * 批量注册路由规则
     * @access public
     * @param  array     $rules      路由规则
     * @param  string    $method     请求类型
     * @param  array     $option     路由参数
     * @param  array     $pattern    变量规则
     * @return void
     */
    public function addRules($rules, $method = '*', $option = [], $pattern = [])
    {
        foreach ($rules as $key => $val) {
            if (is_numeric($key)) {
                $key = array_shift($val);
            }

            if (is_array($val)) {
                $route   = array_shift($val);
                $option  = $val ? array_shift($val) : [];
                $pattern = $val ? array_shift($val) : [];
            } else {
                $route = $val;
            }

            $this->addRule($key, $route, $method, $option, $pattern);
        }
    }

    public function addRuleItem($rule, $method = '*')
    {
        if (strpos($method, '|')) {
            $rule->method($method);
            $method = '*';
        }

        $this->rules[$method][] = $rule;

        return $this;
    }

    /**
     * 设置分组的路由前缀
     * @access public
     * @param  string     $prefix
     * @return $this
     */
    public function prefix($prefix)
    {
        if ($this->parent && $this->parent->getOption('prefix')) {
            $prefix = $this->parent->getOption('prefix') . $prefix;
        }

        return $this->option('prefix', $prefix);
    }

    /**
     * 设置资源允许
     * @access public
     * @param  array     $only
     * @return $this
     */
    public function only($only)
    {
        return $this->option('only', $only);
    }

    /**
     * 设置资源排除
     * @access public
     * @param  array     $except
     * @return $this
     */
    public function except($except)
    {
        return $this->option('except', $except);
    }

    /**
     * 设置资源路由的变量
     * @access public
     * @param  array     $vars
     * @return $this
     */
    public function vars($vars)
    {
        return $this->option('var', $vars);
    }

    /**
     * 合并分组的路由规则正则
     * @access public
     * @param  bool     $merge
     * @return $this
     */
    public function mergeRuleRegex($merge = true)
    {
        return $this->option('merge_rule_regex', $merge);
    }

    /**
     * 获取完整分组Name
     * @access public
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * 获取分组的路由规则
     * @access public
     * @param  string     $method
     * @return array
     */
    public function getRules($method = '')
    {
        if ('' === $method) {
            return $this->rules;
        }

        return isset($this->rules[strtolower($method)]) ? $this->rules[strtolower($method)] : [];
    }

}
