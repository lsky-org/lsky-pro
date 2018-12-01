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

namespace think\model\concern;

use think\Container;
use think\Loader;

/**
 * 模型事件处理
 */
trait ModelEvent
{
    /**
     * 模型回调
     * @var array
     */
    private static $event = [];

    /**
     * 模型事件观察
     * @var array
     */
    protected static $observe = ['before_write', 'after_write', 'before_insert', 'after_insert', 'before_update', 'after_update', 'before_delete', 'after_delete', 'before_restore', 'after_restore'];

    /**
     * 绑定模型事件观察者类
     * @var array
     */
    protected $observerClass;

    /**
     * 是否需要事件响应
     * @var bool
     */
    private $withEvent = true;

    /**
     * 注册回调方法
     * @access public
     * @param  string   $event    事件名
     * @param  callable $callback 回调方法
     * @param  bool     $override 是否覆盖
     * @return void
     */
    public static function event($event, $callback, $override = false)
    {
        $class = static::class;

        if ($override) {
            self::$event[$class][$event] = [];
        }

        self::$event[$class][$event][] = $callback;
    }

    /**
     * 清除回调方法
     * @access public
     * @return void
     */
    public static function flushEvent()
    {
        self::$event[static::class] = [];
    }

    /**
     * 注册一个模型观察者
     *
     * @param  object|string  $class
     * @return void
     */
    public static function observe($class)
    {
        self::flushEvent();

        foreach (static::$observe as $event) {
            $eventFuncName = Loader::parseName($event, 1, false);

            if (method_exists($class, $eventFuncName)) {
                static::event($event, [$class, $eventFuncName]);
            }
        }
    }

    /**
     * 当前操作的事件响应
     * @access protected
     * @param  bool $event  是否需要事件响应
     * @return $this
     */
    public function withEvent($event)
    {
        $this->withEvent = $event;
        return $this;
    }

    /**
     * 触发事件
     * @access protected
     * @param  string $event  事件名
     * @return bool
     */
    protected function trigger($event)
    {
        $class = static::class;

        if ($this->withEvent && isset(self::$event[$class][$event])) {
            foreach (self::$event[$class][$event] as $callback) {
                $result = Container::getInstance()->invoke($callback, [$this]);

                if (false === $result) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * 模型before_insert事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function beforeInsert($callback, $override = false)
    {
        self::event('before_insert', $callback, $override);
    }

    /**
     * 模型after_insert事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function afterInsert($callback, $override = false)
    {
        self::event('after_insert', $callback, $override);
    }

    /**
     * 模型before_update事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function beforeUpdate($callback, $override = false)
    {
        self::event('before_update', $callback, $override);
    }

    /**
     * 模型after_update事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function afterUpdate($callback, $override = false)
    {
        self::event('after_update', $callback, $override);
    }

    /**
     * 模型before_write事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function beforeWrite($callback, $override = false)
    {
        self::event('before_write', $callback, $override);
    }

    /**
     * 模型after_write事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function afterWrite($callback, $override = false)
    {
        self::event('after_write', $callback, $override);
    }

    /**
     * 模型before_delete事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function beforeDelete($callback, $override = false)
    {
        self::event('before_delete', $callback, $override);
    }

    /**
     * 模型after_delete事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function afterDelete($callback, $override = false)
    {
        self::event('after_delete', $callback, $override);
    }

    /**
     * 模型before_restore事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function beforeRestore($callback, $override = false)
    {
        self::event('before_restore', $callback, $override);
    }

    /**
     * 模型after_restore事件快捷方法
     * @access protected
     * @param callable  $callback
     * @param bool      $override
     */
    protected static function afterRestore($callback, $override = false)
    {
        self::event('after_restore', $callback, $override);
    }
}
