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

use think\exception\ClassNotFoundException;

class Session
{
    /**
     * 配置参数
     * @var array
     */
    protected $config = [];

    /**
     * 前缀
     * @var string
     */
    protected $prefix = '';

    /**
     * 是否初始化
     * @var bool
     */
    protected $init = null;

    /**
     * 锁驱动
     * @var object
     */
    protected $lockDriver = null;

    /**
     * 锁key
     * @var string
     */
    protected $sessKey = 'PHPSESSID';

    /**
     * 锁超时时间
     * @var integer
     */
    protected $lockTimeout = 3;

    /**
     * 是否启用锁机制
     * @var bool
     */
    protected $lock = false;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * 设置或者获取session作用域（前缀）
     * @access public
     * @param  string $prefix
     * @return string|void
     */
    public function prefix($prefix = '')
    {
        empty($this->init) && $this->boot();

        if (empty($prefix) && null !== $prefix) {
            return $this->prefix;
        } else {
            $this->prefix = $prefix;
        }
    }

    public static function __make(Config $config)
    {
        return new static($config->pull('session'));
    }

    /**
     * 配置
     * @access public
     * @param  array $config
     * @return void
     */
    public function setConfig(array $config = [])
    {
        $this->config = array_merge($this->config, array_change_key_case($config));

        if (isset($config['prefix'])) {
            $this->prefix = $config['prefix'];
        }

        if (isset($config['use_lock'])) {
            $this->lock = $config['use_lock'];
        }
    }

    /**
     * 设置已经初始化
     * @access public
     * @return void
     */
    public function inited()
    {
        $this->init = true;
    }

    /**
     * session初始化
     * @access public
     * @param  array $config
     * @return void
     * @throws \think\Exception
     */
    public function init(array $config = [])
    {
        $config = $config ?: $this->config;

        $isDoStart = false;
        if (isset($config['use_trans_sid'])) {
            ini_set('session.use_trans_sid', $config['use_trans_sid'] ? 1 : 0);
        }

        // 启动session
        if (!empty($config['auto_start']) && PHP_SESSION_ACTIVE != session_status()) {
            ini_set('session.auto_start', 0);
            $isDoStart = true;
        }

        if (isset($config['prefix'])) {
            $this->prefix = $config['prefix'];
        }

        if (isset($config['use_lock'])) {
            $this->lock = $config['use_lock'];
        }

        if (isset($config['var_session_id']) && isset($_REQUEST[$config['var_session_id']])) {
            session_id($_REQUEST[$config['var_session_id']]);
        } elseif (isset($config['id']) && !empty($config['id'])) {
            session_id($config['id']);
        }

        if (isset($config['name'])) {
            session_name($config['name']);
        }

        if (isset($config['path'])) {
            session_save_path($config['path']);
        }

        if (isset($config['domain'])) {
            ini_set('session.cookie_domain', $config['domain']);
        }

        if (isset($config['expire'])) {
            ini_set('session.gc_maxlifetime', $config['expire']);
            ini_set('session.cookie_lifetime', $config['expire']);
        }

        if (isset($config['secure'])) {
            ini_set('session.cookie_secure', $config['secure']);
        }

        if (isset($config['httponly'])) {
            ini_set('session.cookie_httponly', $config['httponly']);
        }

        if (isset($config['use_cookies'])) {
            ini_set('session.use_cookies', $config['use_cookies'] ? 1 : 0);
        }

        if (isset($config['cache_limiter'])) {
            session_cache_limiter($config['cache_limiter']);
        }

        if (isset($config['cache_expire'])) {
            session_cache_expire($config['cache_expire']);
        }

        if (!empty($config['type'])) {
            // 读取session驱动
            $class = false !== strpos($config['type'], '\\') ? $config['type'] : '\\think\\session\\driver\\' . ucwords($config['type']);

            // 检查驱动类
            if (!class_exists($class) || !session_set_save_handler(new $class($config))) {
                throw new ClassNotFoundException('error session handler:' . $class, $class);
            }
        }

        if ($isDoStart) {
            $this->start();
        } else {
            $this->init = false;
        }

        return $this;
    }

    /**
     * session自动启动或者初始化
     * @access public
     * @return void
     */
    public function boot()
    {
        if (is_null($this->init)) {
            $this->init();
        }

        if (false === $this->init) {
            if (PHP_SESSION_ACTIVE != session_status()) {
                $this->start();
            }
            $this->init = true;
        }
    }

    /**
     * session设置
     * @access public
     * @param  string        $name session名称
     * @param  mixed         $value session值
     * @param  string|null   $prefix 作用域（前缀）
     * @return void
     */
    public function set($name, $value, $prefix = null)
    {
        $this->lock();

        empty($this->init) && $this->boot();

        $prefix = !is_null($prefix) ? $prefix : $this->prefix;

        if (strpos($name, '.')) {
            // 二维数组赋值
            list($name1, $name2) = explode('.', $name);
            if ($prefix) {
                $_SESSION[$prefix][$name1][$name2] = $value;
            } else {
                $_SESSION[$name1][$name2] = $value;
            }
        } elseif ($prefix) {
            $_SESSION[$prefix][$name] = $value;
        } else {
            $_SESSION[$name] = $value;
        }

        $this->unlock();
    }

    /**
     * session获取
     * @access public
     * @param  string        $name session名称
     * @param  string|null   $prefix 作用域（前缀）
     * @return mixed
     */
    public function get($name = '', $prefix = null)
    {
        $this->lock();

        empty($this->init) && $this->boot();

        $prefix = !is_null($prefix) ? $prefix : $this->prefix;

        $value = $prefix ? (!empty($_SESSION[$prefix]) ? $_SESSION[$prefix] : []) : $_SESSION;

        if ('' != $name) {
            $name = explode('.', $name);

            foreach ($name as $val) {
                if (isset($value[$val])) {
                    $value = $value[$val];
                } else {
                    $value = null;
                    break;
                }
            }
        }

        $this->unlock();

        return $value;
    }

    /**
     * session 读写锁驱动实例化
     */
    protected function initDriver()
    {
        $config = $this->config;

        if (!empty($config['type']) && isset($config['use_lock']) && $config['use_lock']) {
            // 读取session驱动
            $class = false !== strpos($config['type'], '\\') ? $config['type'] : '\\think\\session\\driver\\' . ucwords($config['type']);

            // 检查驱动类及类中是否存在 lock 和 unlock 函数
            if (class_exists($class) && method_exists($class, 'lock') && method_exists($class, 'unlock')) {
                $this->lockDriver = new $class($config);
            }
        }

        // 通过cookie获得session_id
        if (isset($config['name']) && $config['name']) {
            $this->sessKey = $config['name'];
        }

        if (isset($config['lock_timeout']) && $config['lock_timeout'] > 0) {
            $this->lockTimeout = $config['lock_timeout'];
        }
    }

    /**
     * session 读写加锁
     * @access protected
     * @return void
     */
    protected function lock()
    {
        if (empty($this->lock)) {
            return;
        }

        $this->initDriver();

        if (null !== $this->lockDriver && method_exists($this->lockDriver, 'lock')) {
            $t = time();
            // 使用 session_id 作为互斥条件，即只对同一 session_id 的会话互斥。第一次请求没有 session_id
            $sessID = isset($_COOKIE[$this->sessKey]) ? $_COOKIE[$this->sessKey] : '';

            do {
                if (time() - $t > $this->lockTimeout) {
                    $this->unlock();
                }
            } while (!$this->lockDriver->lock($sessID, $this->lockTimeout));
        }
    }

    /**
     * session 读写解锁
     * @access protected
     * @return void
     */
    protected function unlock()
    {
        if (empty($this->lock)) {
            return;
        }

        $this->pause();

        if ($this->lockDriver && method_exists($this->lockDriver, 'unlock')) {
            $sessID = isset($_COOKIE[$this->sessKey]) ? $_COOKIE[$this->sessKey] : '';
            $this->lockDriver->unlock($sessID);
        }
    }

    /**
     * session获取并删除
     * @access public
     * @param  string        $name session名称
     * @param  string|null   $prefix 作用域（前缀）
     * @return mixed
     */
    public function pull($name, $prefix = null)
    {
        $result = $this->get($name, $prefix);

        if ($result) {
            $this->delete($name, $prefix);
            return $result;
        } else {
            return;
        }
    }

    /**
     * session设置 下一次请求有效
     * @access public
     * @param  string        $name session名称
     * @param  mixed         $value session值
     * @param  string|null   $prefix 作用域（前缀）
     * @return void
     */
    public function flash($name, $value)
    {
        $this->set($name, $value);

        if (!$this->has('__flash__.__time__')) {
            $this->set('__flash__.__time__', $_SERVER['REQUEST_TIME_FLOAT']);
        }

        $this->push('__flash__', $name);
    }

    /**
     * 清空当前请求的session数据
     * @access public
     * @return void
     */
    public function flush()
    {
        if (!$this->init) {
            return;
        }

        $item = $this->get('__flash__');

        if (!empty($item)) {
            $time = $item['__time__'];

            if ($_SERVER['REQUEST_TIME_FLOAT'] > $time) {
                unset($item['__time__']);
                $this->delete($item);
                $this->set('__flash__', []);
            }
        }
    }

    /**
     * 删除session数据
     * @access public
     * @param  string|array  $name session名称
     * @param  string|null   $prefix 作用域（前缀）
     * @return void
     */
    public function delete($name, $prefix = null)
    {
        empty($this->init) && $this->boot();

        $prefix = !is_null($prefix) ? $prefix : $this->prefix;

        if (is_array($name)) {
            foreach ($name as $key) {
                $this->delete($key, $prefix);
            }
        } elseif (strpos($name, '.')) {
            list($name1, $name2) = explode('.', $name);
            if ($prefix) {
                unset($_SESSION[$prefix][$name1][$name2]);
            } else {
                unset($_SESSION[$name1][$name2]);
            }
        } else {
            if ($prefix) {
                unset($_SESSION[$prefix][$name]);
            } else {
                unset($_SESSION[$name]);
            }
        }
    }

    /**
     * 清空session数据
     * @access public
     * @param  string|null   $prefix 作用域（前缀）
     * @return void
     */
    public function clear($prefix = null)
    {
        empty($this->init) && $this->boot();
        $prefix = !is_null($prefix) ? $prefix : $this->prefix;

        if ($prefix) {
            unset($_SESSION[$prefix]);
        } else {
            $_SESSION = [];
        }
    }

    /**
     * 判断session数据
     * @access public
     * @param  string        $name session名称
     * @param  string|null   $prefix
     * @return bool
     */
    public function has($name, $prefix = null)
    {
        empty($this->init) && $this->boot();

        $prefix = !is_null($prefix) ? $prefix : $this->prefix;
        $value  = $prefix ? (!empty($_SESSION[$prefix]) ? $_SESSION[$prefix] : []) : $_SESSION;

        $name = explode('.', $name);

        foreach ($name as $val) {
            if (!isset($value[$val])) {
                return false;
            } else {
                $value = $value[$val];
            }
        }

        return true;
    }

    /**
     * 添加数据到一个session数组
     * @access public
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function push($key, $value)
    {
        $array = $this->get($key);

        if (is_null($array)) {
            $array = [];
        }

        $array[] = $value;

        $this->set($key, $array);
    }

    /**
     * 启动session
     * @access public
     * @return void
     */
    public function start()
    {
        session_start();

        $this->init = true;
    }

    /**
     * 销毁session
     * @access public
     * @return void
     */
    public function destroy()
    {
        if (!empty($_SESSION)) {
            $_SESSION = [];
        }

        session_unset();
        session_destroy();

        $this->init       = null;
        $this->lockDriver = null;
    }

    /**
     * 重新生成session_id
     * @access public
     * @param  bool $delete 是否删除关联会话文件
     * @return void
     */
    public function regenerate($delete = false)
    {
        session_regenerate_id($delete);
    }

    /**
     * 暂停session
     * @access public
     * @return void
     */
    public function pause()
    {
        // 暂停session
        session_write_close();
        $this->init = false;
    }
}
