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

namespace think\db;

use ArrayAccess;

class Where implements ArrayAccess
{
    /**
     * 查询表达式
     * @var array
     */
    protected $where = [];

    /**
     * 是否需要增加括号
     * @var bool
     */
    protected $enclose = false;

    /**
     * 创建一个查询表达式
     *
     * @param  array    $where      查询条件数组
     * @param  bool     $enclose    是否增加括号
     */
    public function __construct(array $where = [], $enclose = false)
    {
        $this->where   = $where;
        $this->enclose = $enclose;
    }

    /**
     * 设置是否添加括号
     * @access public
     * @param  bool $enclose
     * @return $this
     */
    public function enclose($enclose = true)
    {
        $this->enclose = $enclose;
        return $this;
    }

    /**
     * 解析为Query对象可识别的查询条件数组
     * @access public
     * @return array
     */
    public function parse()
    {
        $where = [];

        foreach ($this->where as $key => $val) {
            if ($val instanceof Expression) {
                $where[] = [$key, 'exp', $val];
            } elseif (is_null($val)) {
                $where[] = [$key, 'NULL', ''];
            } elseif (is_array($val)) {
                $where[] = $this->parseItem($key, $val);
            } else {
                $where[] = [$key, '=', $val];
            }
        }

        return $this->enclose ? [$where] : $where;
    }

    /**
     * 分析查询表达式
     * @access protected
     * @param  string   $field     查询字段
     * @param  array    $where     查询条件
     * @return array
     */
    protected function parseItem($field, $where = [])
    {
        $op        = $where[0];
        $condition = isset($where[1]) ? $where[1] : null;

        if (is_array($op)) {
            // 同一字段多条件查询
            array_unshift($where, $field);
        } elseif (is_null($condition)) {
            if (in_array(strtoupper($op), ['NULL', 'NOTNULL', 'NOT NULL'], true)) {
                // null查询
                $where = [$field, $op, ''];
            } elseif (in_array($op, ['=', 'eq', 'EQ', null], true)) {
                $where = [$field, 'NULL', ''];
            } elseif (in_array($op, ['<>', 'neq', 'NEQ'], true)) {
                $where = [$field, 'NOTNULL', ''];
            } else {
                // 字段相等查询
                $where = [$field, '=', $op];
            }
        } else {
            $where = [$field, $op, $condition];
        }

        return $where;
    }

    /**
     * 修改器 设置数据对象的值
     * @access public
     * @param  string $name  名称
     * @param  mixed  $value 值
     * @return void
     */
    public function __set($name, $value)
    {
        $this->where[$name] = $value;
    }

    /**
     * 获取器 获取数据对象的值
     * @access public
     * @param  string $name 名称
     * @return mixed
     */
    public function __get($name)
    {
        return isset($this->where[$name]) ? $this->where[$name] : null;
    }

    /**
     * 检测数据对象的值
     * @access public
     * @param  string $name 名称
     * @return boolean
     */
    public function __isset($name)
    {
        return isset($this->where[$name]);
    }

    /**
     * 销毁数据对象的值
     * @access public
     * @param  string $name 名称
     * @return void
     */
    public function __unset($name)
    {
        unset($this->where[$name]);
    }

    // ArrayAccess
    public function offsetSet($name, $value)
    {
        $this->__set($name, $value);
    }

    public function offsetExists($name)
    {
        return $this->__isset($name);
    }

    public function offsetUnset($name)
    {
        $this->__unset($name);
    }

    public function offsetGet($name)
    {
        return $this->__get($name);
    }

}
