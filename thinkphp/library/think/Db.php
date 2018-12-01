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

use think\db\Connection;

/**
 * Class Db
 * @package think
 * @method \think\db\Query master() static 从主服务器读取数据
 * @method \think\db\Query readMaster(bool $all = false) static 后续从主服务器读取数据
 * @method \think\db\Query table(string $table) static 指定数据表（含前缀）
 * @method \think\db\Query name(string $name) static 指定数据表（不含前缀）
 * @method \think\db\Expression raw(string $value) static 使用表达式设置数据
 * @method \think\db\Query where(mixed $field, string $op = null, mixed $condition = null) static 查询条件
 * @method \think\db\Query whereRaw(string $where, array $bind = []) static 表达式查询
 * @method \think\db\Query whereExp(string $field, string $condition, array $bind = []) static 字段表达式查询
 * @method \think\db\Query when(mixed $condition, mixed $query, mixed $otherwise = null) static 条件查询
 * @method \think\db\Query join(mixed $join, mixed $condition = null, string $type = 'INNER') static JOIN查询
 * @method \think\db\Query view(mixed $join, mixed $field = null, mixed $on = null, string $type = 'INNER') static 视图查询
 * @method \think\db\Query field(mixed $field, boolean $except = false) static 指定查询字段
 * @method \think\db\Query fieldRaw(string $field, array $bind = []) static 指定查询字段
 * @method \think\db\Query union(mixed $union, boolean $all = false) static UNION查询
 * @method \think\db\Query limit(mixed $offset, integer $length = null) static 查询LIMIT
 * @method \think\db\Query order(mixed $field, string $order = null) static 查询ORDER
 * @method \think\db\Query orderRaw(string $field, array $bind = []) static 查询ORDER
 * @method \think\db\Query cache(mixed $key = null , integer $expire = null) static 设置查询缓存
 * @method \think\db\Query withAttr(string $name,callable $callback = null) static 使用获取器获取数据
 * @method mixed value(string $field) static 获取某个字段的值
 * @method array column(string $field, string $key = '') static 获取某个列的值
 * @method mixed find(mixed $data = null) static 查询单个记录
 * @method mixed select(mixed $data = null) static 查询多个记录
 * @method integer insert(array $data, boolean $replace = false, boolean $getLastInsID = false, string $sequence = null) static 插入一条记录
 * @method integer insertGetId(array $data, boolean $replace = false, string $sequence = null) static 插入一条记录并返回自增ID
 * @method integer insertAll(array $dataSet) static 插入多条记录
 * @method integer update(array $data) static 更新记录
 * @method integer delete(mixed $data = null) static 删除记录
 * @method boolean chunk(integer $count, callable $callback, string $column = null) static 分块获取数据
 * @method \Generator cursor(mixed $data = null) static 使用游标查找记录
 * @method mixed query(string $sql, array $bind = [], boolean $master = false, bool $pdo = false) static SQL查询
 * @method integer execute(string $sql, array $bind = [], boolean $fetch = false, boolean $getLastInsID = false, string $sequence = null) static SQL执行
 * @method \think\Paginator paginate(integer $listRows = 15, mixed $simple = null, array $config = []) static 分页查询
 * @method mixed transaction(callable $callback) static 执行数据库事务
 * @method void startTrans() static 启动事务
 * @method void commit() static 用于非自动提交状态下面的查询提交
 * @method void rollback() static 事务回滚
 * @method boolean batchQuery(array $sqlArray) static 批处理执行SQL语句
 * @method string getLastInsID(string $sequence = null) static 获取最近插入的ID
 */
class Db
{
    /**
     * 当前数据库连接对象
     * @var Connection
     */
    protected static $connection;

    /**
     * 数据库配置
     * @var array
     */
    protected static $config = [];

    /**
     * 查询次数
     * @var integer
     */
    public static $queryTimes = 0;

    /**
     * 执行次数
     * @var integer
     */
    public static $executeTimes = 0;

    /**
     * 配置
     * @access public
     * @param  mixed $config
     * @return void
     */
    public static function init($config = [])
    {
        self::$config = $config;

        if (empty($config['query'])) {
            self::$config['query'] = '\\think\\db\\Query';
        }
    }

    /**
     * 获取数据库配置
     * @access public
     * @param  string $config 配置名称
     * @return mixed
     */
    public static function getConfig($name = '')
    {
        if ('' === $name) {
            return self::$config;
        }

        return isset(self::$config[$name]) ? self::$config[$name] : null;
    }

    /**
     * 切换数据库连接
     * @access public
     * @param  mixed         $config 连接配置
     * @param  bool|string   $name 连接标识 true 强制重新连接
     * @param  string        $query 查询对象类名
     * @return mixed 返回查询对象实例
     * @throws Exception
     */
    public static function connect($config = [], $name = false, $query = '')
    {
        // 解析配置参数
        $options = self::parseConfig($config ?: self::$config);

        $query = $query ?: $options['query'];

        // 创建数据库连接对象实例
        self::$connection = Connection::instance($options, $name);

        return new $query(self::$connection);
    }

    /**
     * 数据库连接参数解析
     * @access private
     * @param  mixed $config
     * @return array
     */
    private static function parseConfig($config)
    {
        if (is_string($config) && false === strpos($config, '/')) {
            // 支持读取配置参数
            $config = isset(self::$config[$config]) ? self::$config[$config] : self::$config;
        }

        $result = is_string($config) ? self::parseDsnConfig($config) : $config;

        if (empty($result['query'])) {
            $result['query'] = self::$config['query'];
        }

        return $result;
    }

    /**
     * DSN解析
     * 格式： mysql://username:passwd@localhost:3306/DbName?param1=val1&param2=val2#utf8
     * @access private
     * @param  string $dsnStr
     * @return array
     */
    private static function parseDsnConfig($dsnStr)
    {
        $info = parse_url($dsnStr);

        if (!$info) {
            return [];
        }

        $dsn = [
            'type'     => $info['scheme'],
            'username' => isset($info['user']) ? $info['user'] : '',
            'password' => isset($info['pass']) ? $info['pass'] : '',
            'hostname' => isset($info['host']) ? $info['host'] : '',
            'hostport' => isset($info['port']) ? $info['port'] : '',
            'database' => !empty($info['path']) ? ltrim($info['path'], '/') : '',
            'charset'  => isset($info['fragment']) ? $info['fragment'] : 'utf8',
        ];

        if (isset($info['query'])) {
            parse_str($info['query'], $dsn['params']);
        } else {
            $dsn['params'] = [];
        }

        return $dsn;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array([static::connect(), $method], $args);
    }
}
