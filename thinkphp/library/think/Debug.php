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

namespace think;

use think\model\Collection as ModelCollection;
use think\response\Redirect;

class Debug
{
    /**
     * 配置参数
     * @var array
     */
    protected $config = [];

    /**
     * 区间时间信息
     * @var array
     */
    protected $info = [];

    /**
     * 区间内存信息
     * @var array
     */
    protected $mem = [];

    /**
     * 应用对象
     * @var App
     */
    protected $app;

    public function __construct(App $app, array $config = [])
    {
        $this->app    = $app;
        $this->config = $config;
    }

    public static function __make(App $app, Config $config)
    {
        return new static($app, $config->pull('trace'));
    }

    public function setConfig(array $config)
    {
        $this->config = array_merge($this->config, $config);
    }

    /**
     * 记录时间（微秒）和内存使用情况
     * @access public
     * @param  string    $name 标记位置
     * @param  mixed     $value 标记值 留空则取当前 time 表示仅记录时间 否则同时记录时间和内存
     * @return void
     */
    public function remark($name, $value = '')
    {
        // 记录时间和内存使用
        $this->info[$name] = is_float($value) ? $value : microtime(true);

        if ('time' != $value) {
            $this->mem['mem'][$name]  = is_float($value) ? $value : memory_get_usage();
            $this->mem['peak'][$name] = memory_get_peak_usage();
        }
    }

    /**
     * 统计某个区间的时间（微秒）使用情况
     * @access public
     * @param  string            $start 开始标签
     * @param  string            $end 结束标签
     * @param  integer|string    $dec 小数位
     * @return integer
     */
    public function getRangeTime($start, $end, $dec = 6)
    {
        if (!isset($this->info[$end])) {
            $this->info[$end] = microtime(true);
        }

        return number_format(($this->info[$end] - $this->info[$start]), $dec);
    }

    /**
     * 统计从开始到统计时的时间（微秒）使用情况
     * @access public
     * @param  integer|string $dec 小数位
     * @return integer
     */
    public function getUseTime($dec = 6)
    {
        return number_format((microtime(true) - $this->app->getBeginTime()), $dec);
    }

    /**
     * 获取当前访问的吞吐率情况
     * @access public
     * @return string
     */
    public function getThroughputRate()
    {
        return number_format(1 / $this->getUseTime(), 2) . 'req/s';
    }

    /**
     * 记录区间的内存使用情况
     * @access public
     * @param  string            $start 开始标签
     * @param  string            $end 结束标签
     * @param  integer|string    $dec 小数位
     * @return string
     */
    public function getRangeMem($start, $end, $dec = 2)
    {
        if (!isset($this->mem['mem'][$end])) {
            $this->mem['mem'][$end] = memory_get_usage();
        }

        $size = $this->mem['mem'][$end] - $this->mem['mem'][$start];
        $a    = ['B', 'KB', 'MB', 'GB', 'TB'];
        $pos  = 0;

        while ($size >= 1024) {
            $size /= 1024;
            $pos++;
        }

        return round($size, $dec) . " " . $a[$pos];
    }

    /**
     * 统计从开始到统计时的内存使用情况
     * @access public
     * @param  integer|string $dec 小数位
     * @return string
     */
    public function getUseMem($dec = 2)
    {
        $size = memory_get_usage() - $this->app->getBeginMem();
        $a    = ['B', 'KB', 'MB', 'GB', 'TB'];
        $pos  = 0;

        while ($size >= 1024) {
            $size /= 1024;
            $pos++;
        }

        return round($size, $dec) . " " . $a[$pos];
    }

    /**
     * 统计区间的内存峰值情况
     * @access public
     * @param  string            $start 开始标签
     * @param  string            $end 结束标签
     * @param  integer|string    $dec 小数位
     * @return string
     */
    public function getMemPeak($start, $end, $dec = 2)
    {
        if (!isset($this->mem['peak'][$end])) {
            $this->mem['peak'][$end] = memory_get_peak_usage();
        }

        $size = $this->mem['peak'][$end] - $this->mem['peak'][$start];
        $a    = ['B', 'KB', 'MB', 'GB', 'TB'];
        $pos  = 0;

        while ($size >= 1024) {
            $size /= 1024;
            $pos++;
        }

        return round($size, $dec) . " " . $a[$pos];
    }

    /**
     * 获取文件加载信息
     * @access public
     * @param  bool  $detail 是否显示详细
     * @return integer|array
     */
    public function getFile($detail = false)
    {
        if ($detail) {
            $files = get_included_files();
            $info  = [];

            foreach ($files as $key => $file) {
                $info[] = $file . ' ( ' . number_format(filesize($file) / 1024, 2) . ' KB )';
            }

            return $info;
        }

        return count(get_included_files());
    }

    /**
     * 浏览器友好的变量输出
     * @access public
     * @param  mixed         $var 变量
     * @param  boolean       $echo 是否输出 默认为true 如果为false 则返回输出字符串
     * @param  string        $label 标签 默认为空
     * @param  integer       $flags htmlspecialchars flags
     * @return void|string
     */
    public function dump($var, $echo = true, $label = null, $flags = ENT_SUBSTITUTE)
    {
        $label = (null === $label) ? '' : rtrim($label) . ':';
        if ($var instanceof Model || $var instanceof ModelCollection) {
            $var = $var->toArray();
        }

        ob_start();
        var_dump($var);

        $output = ob_get_clean();
        $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

        if (PHP_SAPI == 'cli') {
            $output = PHP_EOL . $label . $output . PHP_EOL;
        } else {
            if (!extension_loaded('xdebug')) {
                $output = htmlspecialchars($output, $flags);
            }
            $output = '<pre>' . $label . $output . '</pre>';
        }
        if ($echo) {
            echo($output);
            return;
        }
        return $output;
    }

    public function inject(Response $response, &$content)
    {
        $config = $this->config;
        $type   = isset($config['type']) ? $config['type'] : 'Html';

        unset($config['type']);

        $trace = Loader::factory($type, '\\think\\debug\\', $config);

        if ($response instanceof Redirect) {
            //TODO 记录
        } else {
            $output = $trace->output($response, $this->app['log']->getLog());
            if (is_string($output)) {
                // trace调试信息注入
                $pos = strripos($content, '</body>');
                if (false !== $pos) {
                    $content = substr($content, 0, $pos) . $output . substr($content, $pos);
                } else {
                    $content = $content . $output;
                }
            }
        }
    }
}
