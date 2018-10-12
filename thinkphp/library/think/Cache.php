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

use think\cache\Driver;

/**
 * Class Cache
 *
 * @package think
 *
 * @mixin Driver
 * @mixin \think\cache\driver\File
 */
class Cache
{
    /**
     * 缓存实例
     * @var array
     */
    protected $instance = [];

    /**
     * 缓存配置
     * @var array
     */
    protected $config = [];

    /**
     * 操作句柄
     * @var object
     */
    protected $handler;

    public function __construct(array $config = [])
    {
        $this->config = $config;
        $this->init($config);
    }

    /**
     * 连接缓存
     * @access public
     * @param  array         $options  配置数组
     * @param  bool|string   $name 缓存连接标识 true 强制重新连接
     * @return Driver
     */
    public function connect(array $options = [], $name = false)
    {
        if (false === $name) {
            $name = md5(serialize($options));
        }

        if (true === $name || !isset($this->instance[$name])) {
            $type = !empty($options['type']) ? $options['type'] : 'File';

            if (true === $name) {
                $name = md5(serialize($options));
            }

            $this->instance[$name] = Loader::factory($type, '\\think\\cache\\driver\\', $options);
        }

        return $this->instance[$name];
    }

    /**
     * 自动初始化缓存
     * @access public
     * @param  array         $options  配置数组
     * @param  bool          $force    强制更新
     * @return Driver
     */
    public function init(array $options = [], $force = false)
    {
        if (is_null($this->handler) || $force) {

            if ('complex' == $options['type']) {
                $default = $options['default'];
                $options = isset($options[$default['type']]) ? $options[$default['type']] : $default;
            }

            $this->handler = $this->connect($options);
        }

        return $this->handler;
    }

    public static function __make(Config $config)
    {
        return new static($config->pull('cache'));
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig(array $config)
    {
        $this->config = array_merge($this->config, $config);
    }

    /**
     * 切换缓存类型 需要配置 cache.type 为 complex
     * @access public
     * @param  string $name 缓存标识
     * @return Driver
     */
    public function store($name = '')
    {
        if ('' !== $name && 'complex' == $this->config['type']) {
            return $this->connect($this->config[$name], strtolower($name));
        }

        return $this->init();
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->init(), $method], $args);
    }

}
