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

use ArrayAccess;
use ArrayIterator;
use Closure;
use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use ReflectionMethod;
use think\exception\ClassNotFoundException;

class Container implements ArrayAccess, IteratorAggregate, Countable
{
    /**
     * 容器对象实例
     * @var Container
     */
    protected static $instance;

    /**
     * 容器中的对象实例
     * @var array
     */
    protected $instances = [];

    /**
     * 容器绑定标识
     * @var array
     */
    protected $bind = [
        'app'                   => App::class,
        'build'                 => Build::class,
        'cache'                 => Cache::class,
        'config'                => Config::class,
        'cookie'                => Cookie::class,
        'debug'                 => Debug::class,
        'env'                   => Env::class,
        'hook'                  => Hook::class,
        'lang'                  => Lang::class,
        'log'                   => Log::class,
        'middleware'            => Middleware::class,
        'request'               => Request::class,
        'response'              => Response::class,
        'route'                 => Route::class,
        'session'               => Session::class,
        'url'                   => Url::class,
        'validate'              => Validate::class,
        'view'                  => View::class,
        'rule_name'             => route\RuleName::class,
        // 接口依赖注入
        'think\LoggerInterface' => Log::class,
    ];

    /**
     * 容器标识别名
     * @var array
     */
    protected $name = [];

    /**
     * 获取当前容器的实例（单例）
     * @access public
     * @return static
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * 设置当前容器的实例
     * @access public
     * @param  object        $instance
     * @return void
     */
    public static function setInstance($instance)
    {
        static::$instance = $instance;
    }

    /**
     * 获取容器中的对象实例
     * @access public
     * @param  string        $abstract       类名或者标识
     * @param  array|true    $vars           变量
     * @param  bool          $newInstance    是否每次创建新的实例
     * @return object
     */
    public static function get($abstract, $vars = [], $newInstance = false)
    {
        return static::getInstance()->make($abstract, $vars, $newInstance);
    }

    /**
     * 绑定一个类、闭包、实例、接口实现到容器
     * @access public
     * @param  string  $abstract    类标识、接口
     * @param  mixed   $concrete    要绑定的类、闭包或者实例
     * @return Container
     */
    public static function set($abstract, $concrete = null)
    {
        return static::getInstance()->bindTo($abstract, $concrete);
    }

    /**
     * 移除容器中的对象实例
     * @access public
     * @param  string  $abstract    类标识、接口
     * @return void
     */
    public static function remove($abstract)
    {
        return static::getInstance()->delete($abstract);
    }

    /**
     * 清除容器中的对象实例
     * @access public
     * @return void
     */
    public static function clear()
    {
        return static::getInstance()->flush();
    }

    /**
     * 绑定一个类、闭包、实例、接口实现到容器
     * @access public
     * @param  string|array  $abstract    类标识、接口
     * @param  mixed         $concrete    要绑定的类、闭包或者实例
     * @return $this
     */
    public function bindTo($abstract, $concrete = null)
    {
        if (is_array($abstract)) {
            $this->bind = array_merge($this->bind, $abstract);
        } elseif ($concrete instanceof Closure) {
            $this->bind[$abstract] = $concrete;
        } elseif (is_object($concrete)) {
            if (isset($this->bind[$abstract])) {
                $abstract = $this->bind[$abstract];
            }
            $this->instances[$abstract] = $concrete;
        } else {
            $this->bind[$abstract] = $concrete;
        }

        return $this;
    }

    /**
     * 绑定一个类实例当容器
     * @access public
     * @param  string           $abstract    类名或者标识
     * @param  object|\Closure  $instance    类的实例
     * @return $this
     */
    public function instance($abstract, $instance)
    {
        if ($instance instanceof \Closure) {
            $this->bind[$abstract] = $instance;
        } else {
            if (isset($this->bind[$abstract])) {
                $abstract = $this->bind[$abstract];
            }

            $this->instances[$abstract] = $instance;
        }

        return $this;
    }

    /**
     * 判断容器中是否存在类及标识
     * @access public
     * @param  string    $abstract    类名或者标识
     * @return bool
     */
    public function bound($abstract)
    {
        return isset($this->bind[$abstract]) || isset($this->instances[$abstract]);
    }

    /**
     * 判断容器中是否存在对象实例
     * @access public
     * @param  string    $abstract    类名或者标识
     * @return bool
     */
    public function exists($abstract)
    {
        if (isset($this->bind[$abstract])) {
            $abstract = $this->bind[$abstract];
        }

        return isset($this->instances[$abstract]);
    }

    /**
     * 判断容器中是否存在类及标识
     * @access public
     * @param  string    $name    类名或者标识
     * @return bool
     */
    public function has($name)
    {
        return $this->bound($name);
    }

    /**
     * 创建类的实例
     * @access public
     * @param  string        $abstract       类名或者标识
     * @param  array|true    $vars           变量
     * @param  bool          $newInstance    是否每次创建新的实例
     * @return object
     */
    public function make($abstract, $vars = [], $newInstance = false)
    {
        if (true === $vars) {
            // 总是创建新的实例化对象
            $newInstance = true;
            $vars        = [];
        }

        $abstract = isset($this->name[$abstract]) ? $this->name[$abstract] : $abstract;

        if (isset($this->instances[$abstract]) && !$newInstance) {
            return $this->instances[$abstract];
        }

        if (isset($this->bind[$abstract])) {
            $concrete = $this->bind[$abstract];

            if ($concrete instanceof Closure) {
                $object = $this->invokeFunction($concrete, $vars);
            } else {
                $this->name[$abstract] = $concrete;
                return $this->make($concrete, $vars, $newInstance);
            }
        } else {
            $object = $this->invokeClass($abstract, $vars);
        }

        if (!$newInstance) {
            $this->instances[$abstract] = $object;
        }

        return $object;
    }

    /**
     * 删除容器中的对象实例
     * @access public
     * @param  string|array    $abstract    类名或者标识
     * @return void
     */
    public function delete($abstract)
    {
        foreach ((array) $abstract as $name) {
            $name = isset($this->name[$name]) ? $this->name[$name] : $name;

            if (isset($this->instances[$name])) {
                unset($this->instances[$name]);
            }
        }
    }

    /**
     * 获取容器中的对象实例
     * @access public
     * @return array
     */
    public function all()
    {
        return $this->instances;
    }

    /**
     * 清除容器中的对象实例
     * @access public
     * @return void
     */
    public function flush()
    {
        $this->instances = [];
        $this->bind      = [];
        $this->name      = [];
    }

    /**
     * 执行函数或者闭包方法 支持参数调用
     * @access public
     * @param  mixed  $function 函数或者闭包
     * @param  array  $vars     参数
     * @return mixed
     */
    public function invokeFunction($function, $vars = [])
    {
        try {
            $reflect = new ReflectionFunction($function);

            $args = $this->bindParams($reflect, $vars);

            return call_user_func_array($function, $args);
        } catch (ReflectionException $e) {
            throw new Exception('function not exists: ' . $function . '()');
        }
    }

    /**
     * 调用反射执行类的方法 支持参数绑定
     * @access public
     * @param  mixed   $method 方法
     * @param  array   $vars   参数
     * @return mixed
     */
    public function invokeMethod($method, $vars = [])
    {
        try {
            if (is_array($method)) {
                $class   = is_object($method[0]) ? $method[0] : $this->invokeClass($method[0]);
                $reflect = new ReflectionMethod($class, $method[1]);
            } else {
                // 静态方法
                $reflect = new ReflectionMethod($method);
            }

            $args = $this->bindParams($reflect, $vars);

            return $reflect->invokeArgs(isset($class) ? $class : null, $args);
        } catch (ReflectionException $e) {
            if (is_array($method) && is_object($method[0])) {
                $method[0] = get_class($method[0]);
            }

            throw new Exception('method not exists: ' . (is_array($method) ? $method[0] . '::' . $method[1] : $method) . '()');
        }
    }

    /**
     * 调用反射执行类的方法 支持参数绑定
     * @access public
     * @param  object  $instance 对象实例
     * @param  mixed   $reflect 反射类
     * @param  array   $vars   参数
     * @return mixed
     */
    public function invokeReflectMethod($instance, $reflect, $vars = [])
    {
        $args = $this->bindParams($reflect, $vars);

        return $reflect->invokeArgs($instance, $args);
    }

    /**
     * 调用反射执行callable 支持参数绑定
     * @access public
     * @param  mixed $callable
     * @param  array $vars   参数
     * @return mixed
     */
    public function invoke($callable, $vars = [])
    {
        if ($callable instanceof Closure) {
            return $this->invokeFunction($callable, $vars);
        }

        return $this->invokeMethod($callable, $vars);
    }

    /**
     * 调用反射执行类的实例化 支持依赖注入
     * @access public
     * @param  string    $class 类名
     * @param  array     $vars  参数
     * @return mixed
     */
    public function invokeClass($class, $vars = [])
    {
        try {
            $reflect = new ReflectionClass($class);

            if ($reflect->hasMethod('__make')) {
                $method = new ReflectionMethod($class, '__make');

                if ($method->isPublic() && $method->isStatic()) {
                    $args = $this->bindParams($method, $vars);
                    return $method->invokeArgs(null, $args);
                }
            }

            $constructor = $reflect->getConstructor();

            $args = $constructor ? $this->bindParams($constructor, $vars) : [];

            return $reflect->newInstanceArgs($args);

        } catch (ReflectionException $e) {
            throw new ClassNotFoundException('class not exists: ' . $class, $class);
        }
    }

    /**
     * 绑定参数
     * @access protected
     * @param  \ReflectionMethod|\ReflectionFunction $reflect 反射类
     * @param  array                                 $vars    参数
     * @return array
     */
    protected function bindParams($reflect, $vars = [])
    {
        if ($reflect->getNumberOfParameters() == 0) {
            return [];
        }

        // 判断数组类型 数字数组时按顺序绑定参数
        reset($vars);
        $type   = key($vars) === 0 ? 1 : 0;
        $params = $reflect->getParameters();

        foreach ($params as $param) {
            $name  = $param->getName();
            $class = $param->getClass();

            if ($class) {
                $args[] = $this->getObjectParam($class->getName(), $vars);
            } elseif (1 == $type && !empty($vars)) {
                $args[] = array_shift($vars);
            } elseif (0 == $type && isset($vars[$name])) {
                $args[] = $vars[$name];
            } elseif ($param->isDefaultValueAvailable()) {
                $args[] = $param->getDefaultValue();
            } else {
                throw new InvalidArgumentException('method param miss:' . $name);
            }
        }

        return $args;
    }

    /**
     * 获取对象类型的参数值
     * @access protected
     * @param  string   $className  类名
     * @param  array    $vars       参数
     * @return mixed
     */
    protected function getObjectParam($className, &$vars)
    {
        $array = $vars;
        $value = array_shift($array);

        if ($value instanceof $className) {
            $result = $value;
            array_shift($vars);
        } else {
            $result = $this->make($className);
        }

        return $result;
    }

    public function __set($name, $value)
    {
        $this->bindTo($name, $value);
    }

    public function __get($name)
    {
        return $this->make($name);
    }

    public function __isset($name)
    {
        return $this->bound($name);
    }

    public function __unset($name)
    {
        $this->delete($name);
    }

    public function offsetExists($key)
    {
        return $this->__isset($key);
    }

    public function offsetGet($key)
    {
        return $this->__get($key);
    }

    public function offsetSet($key, $value)
    {
        $this->__set($key, $value);
    }

    public function offsetUnset($key)
    {
        $this->__unset($key);
    }

    //Countable
    public function count()
    {
        return count($this->instances);
    }

    //IteratorAggregate
    public function getIterator()
    {
        return new ArrayIterator($this->instances);
    }
}
