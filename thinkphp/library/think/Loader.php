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

class Loader
{
    /**
     * 类名映射信息
     * @var array
     */
    protected static $classMap = [];

    /**
     * 类库别名
     * @var array
     */
    protected static $classAlias = [];

    /**
     * PSR-4
     * @var array
     */
    private static $prefixLengthsPsr4 = [];
    private static $prefixDirsPsr4    = [];
    private static $fallbackDirsPsr4  = [];

    /**
     * PSR-0
     * @var array
     */
    private static $prefixesPsr0     = [];
    private static $fallbackDirsPsr0 = [];

    /**
     * 需要加载的文件
     * @var array
     */
    private static $files = [];

    /**
     * Composer安装路径
     * @var string
     */
    private static $composerPath;

    // 获取应用根目录
    public static function getRootPath()
    {
        if ('cli' == PHP_SAPI) {
            $scriptName = realpath($_SERVER['argv'][0]);
        } else {
            $scriptName = $_SERVER['SCRIPT_FILENAME'];
        }

        $path = realpath(dirname($scriptName));

        if (!is_file($path . DIRECTORY_SEPARATOR . 'think')) {
            $path = dirname($path);
        }

        return $path . DIRECTORY_SEPARATOR;
    }

    // 注册自动加载机制
    public static function register($autoload = '')
    {
        // 注册系统自动加载
        spl_autoload_register($autoload ?: 'think\\Loader::autoload', true, true);

        $rootPath = self::getRootPath();

        self::$composerPath = $rootPath . 'vendor' . DIRECTORY_SEPARATOR . 'composer' . DIRECTORY_SEPARATOR;

        // Composer自动加载支持
        if (is_dir(self::$composerPath)) {
            if (is_file(self::$composerPath . 'autoload_static.php')) {
                require self::$composerPath . 'autoload_static.php';

                $declaredClass = get_declared_classes();
                $composerClass = array_pop($declaredClass);

                foreach (['prefixLengthsPsr4', 'prefixDirsPsr4', 'fallbackDirsPsr4', 'prefixesPsr0', 'fallbackDirsPsr0', 'classMap', 'files'] as $attr) {
                    if (property_exists($composerClass, $attr)) {
                        self::${$attr} = $composerClass::${$attr};
                    }
                }
            } else {
                self::registerComposerLoader(self::$composerPath);
            }
        }

        // 注册命名空间定义
        self::addNamespace([
            'think'  => __DIR__,
            'traits' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'traits',
        ]);

        // 加载类库映射文件
        if (is_file($rootPath . 'runtime' . DIRECTORY_SEPARATOR . 'classmap.php')) {
            self::addClassMap(__include_file($rootPath . 'runtime' . DIRECTORY_SEPARATOR . 'classmap.php'));
        }

        // 自动加载extend目录
        self::addAutoLoadDir($rootPath . 'extend');
    }

    // 自动加载
    public static function autoload($class)
    {
        if (isset(self::$classAlias[$class])) {
            return class_alias(self::$classAlias[$class], $class);
        }

        if ($file = self::findFile($class)) {

            // Win环境严格区分大小写
            if (strpos(PHP_OS, 'WIN') !== false && pathinfo($file, PATHINFO_FILENAME) != pathinfo(realpath($file), PATHINFO_FILENAME)) {
                return false;
            }

            __include_file($file);
            return true;
        }
    }

    /**
     * 查找文件
     * @access private
     * @param  string $class
     * @return string|false
     */
    private static function findFile($class)
    {
        if (!empty(self::$classMap[$class])) {
            // 类库映射
            return self::$classMap[$class];
        }

        // 查找 PSR-4
        $logicalPathPsr4 = strtr($class, '\\', DIRECTORY_SEPARATOR) . '.php';

        $first = $class[0];
        if (isset(self::$prefixLengthsPsr4[$first])) {
            foreach (self::$prefixLengthsPsr4[$first] as $prefix => $length) {
                if (0 === strpos($class, $prefix)) {
                    foreach (self::$prefixDirsPsr4[$prefix] as $dir) {
                        if (is_file($file = $dir . DIRECTORY_SEPARATOR . substr($logicalPathPsr4, $length))) {
                            return $file;
                        }
                    }
                }
            }
        }

        // 查找 PSR-4 fallback dirs
        foreach (self::$fallbackDirsPsr4 as $dir) {
            if (is_file($file = $dir . DIRECTORY_SEPARATOR . $logicalPathPsr4)) {
                return $file;
            }
        }

        // 查找 PSR-0
        if (false !== $pos = strrpos($class, '\\')) {
            // namespaced class name
            $logicalPathPsr0 = substr($logicalPathPsr4, 0, $pos + 1)
            . strtr(substr($logicalPathPsr4, $pos + 1), '_', DIRECTORY_SEPARATOR);
        } else {
            // PEAR-like class name
            $logicalPathPsr0 = strtr($class, '_', DIRECTORY_SEPARATOR) . '.php';
        }

        if (isset(self::$prefixesPsr0[$first])) {
            foreach (self::$prefixesPsr0[$first] as $prefix => $dirs) {
                if (0 === strpos($class, $prefix)) {
                    foreach ($dirs as $dir) {
                        if (is_file($file = $dir . DIRECTORY_SEPARATOR . $logicalPathPsr0)) {
                            return $file;
                        }
                    }
                }
            }
        }

        // 查找 PSR-0 fallback dirs
        foreach (self::$fallbackDirsPsr0 as $dir) {
            if (is_file($file = $dir . DIRECTORY_SEPARATOR . $logicalPathPsr0)) {
                return $file;
            }
        }

        return self::$classMap[$class] = false;
    }

    // 注册classmap
    public static function addClassMap($class, $map = '')
    {
        if (is_array($class)) {
            self::$classMap = array_merge(self::$classMap, $class);
        } else {
            self::$classMap[$class] = $map;
        }
    }

    // 注册命名空间
    public static function addNamespace($namespace, $path = '')
    {
        if (is_array($namespace)) {
            foreach ($namespace as $prefix => $paths) {
                self::addPsr4($prefix . '\\', rtrim($paths, DIRECTORY_SEPARATOR), true);
            }
        } else {
            self::addPsr4($namespace . '\\', rtrim($path, DIRECTORY_SEPARATOR), true);
        }
    }

    // 添加Ps0空间
    private static function addPsr0($prefix, $paths, $prepend = false)
    {
        if (!$prefix) {
            if ($prepend) {
                self::$fallbackDirsPsr0 = array_merge(
                    (array) $paths,
                    self::$fallbackDirsPsr0
                );
            } else {
                self::$fallbackDirsPsr0 = array_merge(
                    self::$fallbackDirsPsr0,
                    (array) $paths
                );
            }

            return;
        }

        $first = $prefix[0];
        if (!isset(self::$prefixesPsr0[$first][$prefix])) {
            self::$prefixesPsr0[$first][$prefix] = (array) $paths;

            return;
        }

        if ($prepend) {
            self::$prefixesPsr0[$first][$prefix] = array_merge(
                (array) $paths,
                self::$prefixesPsr0[$first][$prefix]
            );
        } else {
            self::$prefixesPsr0[$first][$prefix] = array_merge(
                self::$prefixesPsr0[$first][$prefix],
                (array) $paths
            );
        }
    }

    // 添加Psr4空间
    private static function addPsr4($prefix, $paths, $prepend = false)
    {
        if (!$prefix) {
            // Register directories for the root namespace.
            if ($prepend) {
                self::$fallbackDirsPsr4 = array_merge(
                    (array) $paths,
                    self::$fallbackDirsPsr4
                );
            } else {
                self::$fallbackDirsPsr4 = array_merge(
                    self::$fallbackDirsPsr4,
                    (array) $paths
                );
            }
        } elseif (!isset(self::$prefixDirsPsr4[$prefix])) {
            // Register directories for a new namespace.
            $length = strlen($prefix);
            if ('\\' !== $prefix[$length - 1]) {
                throw new \InvalidArgumentException("A non-empty PSR-4 prefix must end with a namespace separator.");
            }

            self::$prefixLengthsPsr4[$prefix[0]][$prefix] = $length;
            self::$prefixDirsPsr4[$prefix]                = (array) $paths;
        } elseif ($prepend) {
            // Prepend directories for an already registered namespace.
            self::$prefixDirsPsr4[$prefix] = array_merge(
                (array) $paths,
                self::$prefixDirsPsr4[$prefix]
            );
        } else {
            // Append directories for an already registered namespace.
            self::$prefixDirsPsr4[$prefix] = array_merge(
                self::$prefixDirsPsr4[$prefix],
                (array) $paths
            );
        }
    }

    // 注册自动加载类库目录
    public static function addAutoLoadDir($path)
    {
        self::$fallbackDirsPsr4[] = $path;
    }

    // 注册类别名
    public static function addClassAlias($alias, $class = null)
    {
        if (is_array($alias)) {
            self::$classAlias = array_merge(self::$classAlias, $alias);
        } else {
            self::$classAlias[$alias] = $class;
        }
    }

    // 注册composer自动加载
    public static function registerComposerLoader($composerPath)
    {
        if (is_file($composerPath . 'autoload_namespaces.php')) {
            $map = require $composerPath . 'autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                self::addPsr0($namespace, $path);
            }
        }

        if (is_file($composerPath . 'autoload_psr4.php')) {
            $map = require $composerPath . 'autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                self::addPsr4($namespace, $path);
            }
        }

        if (is_file($composerPath . 'autoload_classmap.php')) {
            $classMap = require $composerPath . 'autoload_classmap.php';
            if ($classMap) {
                self::addClassMap($classMap);
            }
        }

        if (is_file($composerPath . 'autoload_files.php')) {
            self::$files = require $composerPath . 'autoload_files.php';
        }
    }

    // 加载composer autofile文件
    public static function loadComposerAutoloadFiles()
    {
        foreach (self::$files as $fileIdentifier => $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                __require_file($file);

                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
            }
        }
    }

    /**
     * 字符串命名风格转换
     * type 0 将Java风格转换为C的风格 1 将C风格转换为Java的风格
     * @access public
     * @param  string  $name 字符串
     * @param  integer $type 转换类型
     * @param  bool    $ucfirst 首字母是否大写（驼峰规则）
     * @return string
     */
    public static function parseName($name, $type = 0, $ucfirst = true)
    {
        if ($type) {
            $name = preg_replace_callback('/_([a-zA-Z])/', function ($match) {
                return strtoupper($match[1]);
            }, $name);
            return $ucfirst ? ucfirst($name) : lcfirst($name);
        }

        return strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $name), "_"));
    }

    /**
     * 创建工厂对象实例
     * @access public
     * @param  string $name         工厂类名
     * @param  string $namespace    默认命名空间
     * @return mixed
     */
    public static function factory($name, $namespace = '', ...$args)
    {
        $class = false !== strpos($name, '\\') ? $name : $namespace . ucwords($name);

        if (class_exists($class)) {
            return Container::getInstance()->invokeClass($class, $args);
        } else {
            throw new ClassNotFoundException('class not exists:' . $class, $class);
        }
    }
}

/**
 * 作用范围隔离
 *
 * @param $file
 * @return mixed
 */
function __include_file($file)
{
    return include $file;
}

function __require_file($file)
{
    return require $file;
}
