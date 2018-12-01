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

use Yaconf;

class Config implements \ArrayAccess
{
    /**
     * 配置参数
     * @var array
     */
    protected $config = [];

    /**
     * 配置前缀
     * @var string
     */
    protected $prefix = 'app';

    /**
     * 配置文件目录
     * @var string
     */
    protected $path;

    /**
     * 配置文件后缀
     * @var string
     */
    protected $ext;

    /**
     * 是否支持Yaconf
     * @var bool
     */
    protected $yaconf;

    /**
     * 构造方法
     * @access public
     */
    public function __construct($path = '', $ext = '.php')
    {
        $this->path   = $path;
        $this->ext    = $ext;
        $this->yaconf = class_exists('Yaconf');
    }

    public static function __make(App $app)
    {
        $path = $app->getConfigPath();
        $ext  = $app->getConfigExt();
        return new static($path, $ext);
    }

    /**
     * 设置开启Yaconf
     * @access public
     * @param  bool|string    $yaconf  是否使用Yaconf
     * @return void
     */
    public function setYaconf($yaconf)
    {
        if ($this->yaconf) {
            $this->yaconf = $yaconf;
        }
    }

    /**
     * 设置配置参数默认前缀
     * @access public
     * @param string    $prefix 前缀
     * @return void
     */
    public function setDefaultPrefix($prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * 解析配置文件或内容
     * @access public
     * @param  string    $config 配置文件路径或内容
     * @param  string    $type 配置解析类型
     * @param  string    $name 配置名（如设置即表示二级配置）
     * @return mixed
     */
    public function parse($config, $type = '', $name = '')
    {
        if (empty($type)) {
            $type = pathinfo($config, PATHINFO_EXTENSION);
        }

        $object = Loader::factory($type, '\\think\\config\\driver\\', $config);

        return $this->set($object->parse(), $name);
    }

    /**
     * 加载配置文件（多种格式）
     * @access public
     * @param  string    $file 配置文件名
     * @param  string    $name 一级配置名
     * @return mixed
     */
    public function load($file, $name = '')
    {
        if (is_file($file)) {
            $filename = $file;
        } elseif (is_file($this->path . $file . $this->ext)) {
            $filename = $this->path . $file . $this->ext;
        }

        if (isset($filename)) {
            return $this->loadFile($filename, $name);
        } elseif ($this->yaconf && Yaconf::has($file)) {
            return $this->set(Yaconf::get($file), $name);
        }

        return $this->config;
    }

    /**
     * 获取实际的yaconf配置参数
     * @access protected
     * @param  string    $name 配置参数名
     * @return string
     */
    protected function getYaconfName($name)
    {
        if ($this->yaconf && is_string($this->yaconf)) {
            return $this->yaconf . '.' . $name;
        }

        return $name;
    }

    /**
     * 获取yaconf配置
     * @access public
     * @param  string    $name 配置参数名
     * @param  mixed     $default   默认值
     * @return mixed
     */
    public function yaconf($name, $default = null)
    {
        if ($this->yaconf) {
            $yaconfName = $this->getYaconfName($name);

            if (Yaconf::has($yaconfName)) {
                return Yaconf::get($yaconfName);
            }
        }

        return $default;
    }

    protected function loadFile($file, $name)
    {
        $name = strtolower($name);
        $type = pathinfo($file, PATHINFO_EXTENSION);

        if ('php' == $type) {
            return $this->set(include $file, $name);
        } elseif ('yaml' == $type && function_exists('yaml_parse_file')) {
            return $this->set(yaml_parse_file($file), $name);
        }

        return $this->parse($file, $type, $name);
    }

    /**
     * 检测配置是否存在
     * @access public
     * @param  string    $name 配置参数名（支持多级配置 .号分割）
     * @return bool
     */
    public function has($name)
    {
        if (false === strpos($name, '.')) {
            $name = $this->prefix . '.' . $name;
        }

        return !is_null($this->get($name));
    }

    /**
     * 获取一级配置
     * @access public
     * @param  string    $name 一级配置名
     * @return array
     */
    public function pull($name)
    {
        $name = strtolower($name);

        if ($this->yaconf) {
            $yaconfName = $this->getYaconfName($name);

            if (Yaconf::has($yaconfName)) {
                $config = Yaconf::get($yaconfName);
                return isset($this->config[$name]) ? array_merge($this->config[$name], $config) : $config;
            }
        }

        return isset($this->config[$name]) ? $this->config[$name] : [];
    }

    /**
     * 获取配置参数 为空则获取所有配置
     * @access public
     * @param  string    $name      配置参数名（支持多级配置 .号分割）
     * @param  mixed     $default   默认值
     * @return mixed
     */
    public function get($name = null, $default = null)
    {
        if ($name && false === strpos($name, '.')) {
            $name = $this->prefix . '.' . $name;
        }

        // 无参数时获取所有
        if (empty($name)) {
            return $this->config;
        }

        if ('.' == substr($name, -1)) {
            return $this->pull(substr($name, 0, -1));
        }

        if ($this->yaconf) {
            $yaconfName = $this->getYaconfName($name);

            if (Yaconf::has($yaconfName)) {
                return Yaconf::get($yaconfName);
            }
        }

        $name    = explode('.', $name);
        $name[0] = strtolower($name[0]);
        $config  = $this->config;

        // 按.拆分成多维数组进行判断
        foreach ($name as $val) {
            if (isset($config[$val])) {
                $config = $config[$val];
            } else {
                return $default;
            }
        }

        return $config;
    }

    /**
     * 设置配置参数 name为数组则为批量设置
     * @access public
     * @param  string|array  $name 配置参数名（支持三级配置 .号分割）
     * @param  mixed         $value 配置值
     * @return mixed
     */
    public function set($name, $value = null)
    {
        if (is_string($name)) {
            if (false === strpos($name, '.')) {
                $name = $this->prefix . '.' . $name;
            }

            $name = explode('.', $name, 3);

            if (count($name) == 2) {
                $this->config[strtolower($name[0])][$name[1]] = $value;
            } else {
                $this->config[strtolower($name[0])][$name[1]][$name[2]] = $value;
            }

            return $value;
        } elseif (is_array($name)) {
            // 批量设置
            if (!empty($value)) {
                if (isset($this->config[$value])) {
                    $result = array_merge($this->config[$value], $name);
                } else {
                    $result = $name;
                }

                $this->config[$value] = $result;
            } else {
                $result = $this->config = array_merge($this->config, $name);
            }
        } else {
            // 为空直接返回 已有配置
            $result = $this->config;
        }

        return $result;
    }

    /**
     * 移除配置
     * @access public
     * @param  string  $name 配置参数名（支持三级配置 .号分割）
     * @return void
     */
    public function remove($name)
    {
        if (false === strpos($name, '.')) {
            $name = $this->prefix . '.' . $name;
        }

        $name = explode('.', $name, 3);

        if (count($name) == 2) {
            unset($this->config[strtolower($name[0])][$name[1]]);
        } else {
            unset($this->config[strtolower($name[0])][$name[1]][$name[2]]);
        }
    }

    /**
     * 重置配置参数
     * @access public
     * @param  string    $prefix  配置前缀名
     * @return void
     */
    public function reset($prefix = '')
    {
        if ('' === $prefix) {
            $this->config = [];
        } else {
            $this->config[$prefix] = [];
        }
    }

    /**
     * 设置配置
     * @access public
     * @param  string    $name  参数名
     * @param  mixed     $value 值
     */
    public function __set($name, $value)
    {
        return $this->set($name, $value);
    }

    /**
     * 获取配置参数
     * @access public
     * @param  string $name 参数名
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * 检测是否存在参数
     * @access public
     * @param  string $name 参数名
     * @return bool
     */
    public function __isset($name)
    {
        return $this->has($name);
    }

    // ArrayAccess
    public function offsetSet($name, $value)
    {
        $this->set($name, $value);
    }

    public function offsetExists($name)
    {
        return $this->has($name);
    }

    public function offsetUnset($name)
    {
        $this->remove($name);
    }

    public function offsetGet($name)
    {
        return $this->get($name);
    }
}
