<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\db\connector;

use PDO;
use think\db\Connection;
use think\db\Query;

/**
 * Sqlsrv数据库驱动
 */
class Sqlsrv extends Connection
{
    // PDO连接参数
    protected $params = [
        PDO::ATTR_CASE              => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS      => PDO::NULL_NATURAL,
        PDO::ATTR_STRINGIFY_FETCHES => false,
    ];

    protected $builder = '\\think\\db\\builder\\Sqlsrv';

    /**
     * 解析pdo连接的dsn信息
     * @access protected
     * @param  array $config 连接信息
     * @return string
     */
    protected function parseDsn($config)
    {
        $dsn = 'sqlsrv:Database=' . $config['database'] . ';Server=' . $config['hostname'];

        if (!empty($config['hostport'])) {
            $dsn .= ',' . $config['hostport'];
        }

        return $dsn;
    }

    /**
     * 取得数据表的字段信息
     * @access public
     * @param  string $tableName
     * @return array
     */
    public function getFields($tableName)
    {
        list($tableName) = explode(' ', $tableName);

        $sql = "SELECT   column_name,   data_type,   column_default,   is_nullable
        FROM    information_schema.tables AS t
        JOIN    information_schema.columns AS c
        ON  t.table_catalog = c.table_catalog
        AND t.table_schema  = c.table_schema
        AND t.table_name    = c.table_name
        WHERE   t.table_name = '$tableName'";

        $pdo    = $this->query($sql, [], false, true);
        $result = $pdo->fetchAll(PDO::FETCH_ASSOC);
        $info   = [];

        if ($result) {
            foreach ($result as $key => $val) {
                $val                       = array_change_key_case($val);
                $info[$val['column_name']] = [
                    'name'    => $val['column_name'],
                    'type'    => $val['data_type'],
                    'notnull' => (bool) ('' === $val['is_nullable']), // not null is empty, null is yes
                    'default' => $val['column_default'],
                    'primary' => false,
                    'autoinc' => false,
                ];
            }
        }

        $sql = "SELECT column_name FROM information_schema.key_column_usage WHERE table_name='$tableName'";

        // 调试开始
        $this->debug(true);

        $pdo = $this->linkID->query($sql);

        // 调试结束
        $this->debug(false, $sql);

        $result = $pdo->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $info[$result['column_name']]['primary'] = true;
        }

        return $this->fieldCase($info);
    }

    /**
     * 取得数据表的字段信息
     * @access public
     * @param  string $dbName
     * @return array
     */
    public function getTables($dbName = '')
    {
        $sql = "SELECT TABLE_NAME
            FROM INFORMATION_SCHEMA.TABLES
            WHERE TABLE_TYPE = 'BASE TABLE'
            ";

        $pdo    = $this->query($sql, [], false, true);
        $result = $pdo->fetchAll(PDO::FETCH_ASSOC);
        $info   = [];

        foreach ($result as $key => $val) {
            $info[$key] = current($val);
        }

        return $info;
    }

    /**
     * 得到某个列的数组
     * @access public
     * @param  Query     $query 查询对象
     * @param  string    $field 字段名 多个字段用逗号分隔
     * @param  string    $key   索引
     * @return array
     */
    public function column(Query $query, $field, $key = '')
    {
        $options = $query->getOptions();

        if (empty($options['fetch_sql']) && !empty($options['cache'])) {
            // 判断查询缓存
            $cache = $options['cache'];

            $guid = is_string($cache['key']) ? $cache['key'] : $this->getCacheKey($query, $field);

            $result = Container::get('cache')->get($guid);

            if (false !== $result) {
                return $result;
            }
        }

        if (isset($options['field'])) {
            $query->removeOption('field');
        }

        if (is_null($field)) {
            $field = '*';
        } elseif ($key && '*' != $field) {
            $field = $key . ',' . $field;
        }

        if (is_string($field)) {
            $field = array_map('trim', explode(',', $field));
        }

        $query->setOption('field', $field);

        // 生成查询SQL
        $sql = $this->builder->select($query);

        $bind = $query->getBind();

        if (!empty($options['fetch_sql'])) {
            // 获取实际执行的SQL语句
            return $this->getRealSql($sql, $bind);
        }

        // 执行查询操作
        $pdo = $this->query($sql, $bind, $options['master'], true);

        if (1 == $pdo->columnCount()) {
            $result = $pdo->fetchAll(PDO::FETCH_COLUMN);
        } else {
            $resultSet = $pdo->fetchAll(PDO::FETCH_ASSOC);

            if ('*' == $field && $key) {
                $result = array_column($resultSet, null, $key);
            } elseif ($resultSet) {
                $fields = array_keys($resultSet[0]);
                $count  = count($fields);
                $key1   = array_shift($fields);
                $key2   = $fields ? array_shift($fields) : '';
                $key    = $key ?: $key1;

                if (strpos($key, '.')) {
                    list($alias, $key) = explode('.', $key);
                }

                if (3 == $count) {
                    $column = $key2;
                } elseif ($count < 3) {
                    $column = $key1;
                } else {
                    $column = null;
                }

                $result = array_column($resultSet, $column, $key);
            } else {
                $result = [];
            }
        }

        if (isset($cache) && isset($guid)) {
            // 缓存数据
            $this->cacheData($guid, $result, $cache);
        }

        return $result;
    }

    /**
     * SQL性能分析
     * @access protected
     * @param  string $sql
     * @return array
     */
    protected function getExplain($sql)
    {
        return [];
    }
}
