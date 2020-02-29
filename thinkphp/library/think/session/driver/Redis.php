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

namespace think\session\driver;

use SessionHandlerInterface;
use think\Exception;

class Redis implements SessionHandlerInterface
{
    /** @var \Redis */
    protected $handler = null;
    protected $config  = [
        'host'         => '127.0.0.1', // redis主机
        'port'         => 6379, // redis端口
        'password'     => '', // 密码
        'select'       => 0, // 操作库
        'expire'       => 3600, // 有效期(秒)
        'timeout'      => 0, // 超时时间(秒)
        'persistent'   => true, // 是否长连接
        'session_name' => '', // sessionkey前缀
    ];

    public function __construct($config = [])
    {
        $this->config = array_merge($this->config, $config);
    }

    /**
     * 打开Session
     * @access public
     * @param  string $savePath
     * @param  mixed  $sessName
     * @return bool
     * @throws Exception
     */
    public function open($savePath, $sessName)
    {
        if (extension_loaded('redis')) {
            $this->handler = new \Redis;

            // 建立连接
            $func = $this->config['persistent'] ? 'pconnect' : 'connect';
            $this->handler->$func($this->config['host'], $this->config['port'], $this->config['timeout']);

            if ('' != $this->config['password']) {
                $this->handler->auth($this->config['password']);
            }

            if (0 != $this->config['select']) {
                $this->handler->select($this->config['select']);
            }
        } elseif (class_exists('\Predis\Client')) {
            $params = [];
            foreach ($this->config as $key => $val) {
                if (in_array($key, ['aggregate', 'cluster', 'connections', 'exceptions', 'prefix', 'profile', 'replication'])) {
                    $params[$key] = $val;
                    unset($this->config[$key]);
                }
            }
            $this->handler = new \Predis\Client($this->config, $params);
        } else {
            throw new \BadFunctionCallException('not support: redis');
        }

        return true;
    }

    /**
     * 关闭Session
     * @access public
     */
    public function close()
    {
        $this->gc(ini_get('session.gc_maxlifetime'));
        $this->handler->close();
        $this->handler = null;

        return true;
    }

    /**
     * 读取Session
     * @access public
     * @param  string $sessID
     * @return string
     */
    public function read($sessID)
    {
        return (string) $this->handler->get($this->config['session_name'] . $sessID);
    }

    /**
     * 写入Session
     * @access public
     * @param  string $sessID
     * @param  string $sessData
     * @return bool
     */
    public function write($sessID, $sessData)
    {
        if ($this->config['expire'] > 0) {
            $result = $this->handler->setex($this->config['session_name'] . $sessID, $this->config['expire'], $sessData);
        } else {
            $result = $this->handler->set($this->config['session_name'] . $sessID, $sessData);
        }

        return $result ? true : false;
    }

    /**
     * 删除Session
     * @access public
     * @param  string $sessID
     * @return bool
     */
    public function destroy($sessID)
    {
        return $this->handler->del($this->config['session_name'] . $sessID) > 0;
    }

    /**
     * Session 垃圾回收
     * @access public
     * @param  string $sessMaxLifeTime
     * @return bool
     */
    public function gc($sessMaxLifeTime)
    {
        return true;
    }

    /**
     * Redis Session 驱动的加锁机制
     * @access public
     * @param  string  $sessID   用于加锁的sessID
     * @param  integer $timeout 默认过期时间
     * @return bool
     */
    public function lock($sessID, $timeout = 10)
    {
        if (null == $this->handler) {
            $this->open('', '');
        }

        $lockKey = 'LOCK_PREFIX_' . $sessID;
        // 使用setnx操作加锁
        $isLock = $this->handler->setnx($lockKey, 1);
        if ($isLock) {
            // 设置过期时间，防止死任务的出现
            $this->handler->expire($lockKey, $timeout);
            return true;
        }

        return false;
    }

    /**
     * Redis Session 驱动的解锁机制
     * @access public
     * @param  string  $sessID   用于解锁的sessID
     */
    public function unlock($sessID)
    {
        if (null == $this->handler) {
            $this->open('', '');
        }

        $this->handler->del('LOCK_PREFIX_' . $sessID);
    }
}
