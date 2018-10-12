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

namespace think\view\driver;

use think\App;
use think\exception\TemplateNotFoundException;
use think\Loader;

class Php
{
    // 模板引擎参数
    protected $config = [
        // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
        'auto_rule'   => 1,
        // 视图基础目录（集中式）
        'view_base'   => '',
        // 模板起始路径
        'view_path'   => '',
        // 模板文件后缀
        'view_suffix' => 'php',
        // 模板文件名分隔符
        'view_depr'   => DIRECTORY_SEPARATOR,
    ];

    protected $template;
    protected $app;
    protected $content;

    public function __construct(App $app, $config = [])
    {
        $this->app    = $app;
        $this->config = array_merge($this->config, (array) $config);
    }

    /**
     * 检测是否存在模板文件
     * @access public
     * @param  string $template 模板文件或者模板规则
     * @return bool
     */
    public function exists($template)
    {
        if ('' == pathinfo($template, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $template = $this->parseTemplate($template);
        }

        return is_file($template);
    }

    /**
     * 渲染模板文件
     * @access public
     * @param  string    $template 模板文件
     * @param  array     $data 模板变量
     * @return void
     */
    public function fetch($template, $data = [])
    {
        if ('' == pathinfo($template, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $template = $this->parseTemplate($template);
        }

        // 模板不存在 抛出异常
        if (!is_file($template)) {
            throw new TemplateNotFoundException('template not exists:' . $template, $template);
        }

        $this->template = $template;

        // 记录视图信息
        $this->app
            ->log('[ VIEW ] ' . $template . ' [ ' . var_export(array_keys($data), true) . ' ]');

        extract($data, EXTR_OVERWRITE);
        include $this->template;
    }

    /**
     * 渲染模板内容
     * @access public
     * @param  string    $content 模板内容
     * @param  array     $data 模板变量
     * @return void
     */
    public function display($content, $data = [])
    {
        $this->content = $content;

        extract($data, EXTR_OVERWRITE);
        eval('?>' . $this->content);
    }

    /**
     * 自动定位模板文件
     * @access private
     * @param  string $template 模板文件规则
     * @return string
     */
    private function parseTemplate($template)
    {
        if (empty($this->config['view_path'])) {
            $this->config['view_path'] = $this->app->getModulePath() . 'view' . DIRECTORY_SEPARATOR;
        }

        $request = $this->app['request'];

        // 获取视图根目录
        if (strpos($template, '@')) {
            // 跨模块调用
            list($module, $template) = explode('@', $template);
        }

        if ($this->config['view_base']) {
            // 基础视图目录
            $module = isset($module) ? $module : $request->module();
            $path   = $this->config['view_base'] . ($module ? $module . DIRECTORY_SEPARATOR : '');
        } else {
            $path = isset($module) ? $this->app->getAppPath() . $module . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR : $this->config['view_path'];
        }

        $depr = $this->config['view_depr'];

        if (0 !== strpos($template, '/')) {
            $template   = str_replace(['/', ':'], $depr, $template);
            $controller = Loader::parseName($request->controller());

            if ($controller) {
                if ('' == $template) {
                    // 如果模板文件名为空 按照默认规则定位
                    $template = str_replace('.', DIRECTORY_SEPARATOR, $controller) . $depr . $this->getActionTemplate($request);
                } elseif (false === strpos($template, $depr)) {
                    $template = str_replace('.', DIRECTORY_SEPARATOR, $controller) . $depr . $template;
                }
            }
        } else {
            $template = str_replace(['/', ':'], $depr, substr($template, 1));
        }

        return $path . ltrim($template, '/') . '.' . ltrim($this->config['view_suffix'], '.');
    }

    protected function getActionTemplate($request)
    {
        $rule = [$request->action(true), Loader::parseName($request->action(true)), $request->action()];
        $type = $this->config['auto_rule'];

        return isset($rule[$type]) ? $rule[$type] : $rule[0];
    }

    /**
     * 配置模板引擎
     * @access private
     * @param  string|array  $name 参数名
     * @param  mixed         $value 参数值
     * @return void
     */
    public function config($name, $value = null)
    {
        if (is_array($name)) {
            $this->config = array_merge($this->config, $name);
        } elseif (is_null($value)) {
            return isset($this->config[$name]) ? $this->config[$name] : null;
        } else {
            $this->config[$name] = $value;
        }
    }

}
