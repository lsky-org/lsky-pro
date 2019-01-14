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

use InvalidArgumentException;
use think\Exception;
use think\Loader;
use think\model\Relation;

trait Attribute
{
    /**
     * 数据表主键 复合主键使用数组定义
     * @var string|array
     */
    protected $pk = 'id';

    /**
     * 数据表字段信息 留空则自动获取
     * @var array
     */
    protected $field = [];

    /**
     * JSON数据表字段
     * @var array
     */
    protected $json = [];

    /**
     * JSON数据取出是否需要转换为数组
     * @var bool
     */
    protected $jsonAssoc = false;

    /**
     * JSON数据表字段类型
     * @var array
     */
    protected $jsonType = [];

    /**
     * 数据表废弃字段
     * @var array
     */
    protected $disuse = [];

    /**
     * 数据表只读字段
     * @var array
     */
    protected $readonly = [];

    /**
     * 数据表字段类型
     * @var array
     */
    protected $type = [];

    /**
     * 当前模型数据
     * @var array
     */
    private $data = [];

    /**
     * 修改器执行记录
     * @var array
     */
    private $set = [];

    /**
     * 原始数据
     * @var array
     */
    private $origin = [];

    /**
     * 动态获取器
     * @var array
     */
    private $withAttr = [];

    /**
     * 获取模型对象的主键
     * @access public
     * @return string|array
     */
    public function getPk()
    {
        return $this->pk;
    }

    /**
     * 判断一个字段名是否为主键字段
     * @access public
     * @param  string $key 名称
     * @return bool
     */
    protected function isPk($key)
    {
        $pk = $this->getPk();
        if (is_string($pk) && $pk == $key) {
            return true;
        } elseif (is_array($pk) && in_array($key, $pk)) {
            return true;
        }

        return false;
    }

    /**
     * 获取模型对象的主键值
     * @access public
     * @return integer
     */
    public function getKey()
    {
        $pk = $this->getPk();
        if (is_string($pk) && array_key_exists($pk, $this->data)) {
            return $this->data[$pk];
        }

        return;
    }

    /**
     * 设置允许写入的字段
     * @access public
     * @param  array|string|true $field 允许写入的字段 如果为true只允许写入数据表字段
     * @return $this
     */
    public function allowField($field)
    {
        if (is_string($field)) {
            $field = explode(',', $field);
        }

        $this->field = $field;

        return $this;
    }

    /**
     * 设置只读字段
     * @access public
     * @param  array|string $field 只读字段
     * @return $this
     */
    public function readonly($field)
    {
        if (is_string($field)) {
            $field = explode(',', $field);
        }

        $this->readonly = $field;

        return $this;
    }

    /**
     * 设置数据对象值
     * @access public
     * @param  mixed $data  数据或者属性名
     * @param  mixed $value 值
     * @return $this
     */
    public function data($data, $value = null)
    {
        if (is_string($data)) {
            $this->data[$data] = $value;
            return $this;
        }

        // 清空数据
        $this->data = [];

        if (is_object($data)) {
            $data = get_object_vars($data);
        }

        if ($this->disuse) {
            // 废弃字段
            foreach ((array) $this->disuse as $key) {
                if (array_key_exists($key, $data)) {
                    unset($data[$key]);
                }
            }
        }

        if (true === $value) {
            // 数据对象赋值
            foreach ($data as $key => $value) {
                $this->setAttr($key, $value, $data);
            }
        } elseif (is_array($value)) {
            foreach ($value as $name) {
                if (isset($data[$name])) {
                    $this->data[$name] = $data[$name];
                }
            }
        } else {
            $this->data = $data;
        }

        return $this;
    }

    /**
     * 批量设置数据对象值
     * @access public
     * @param  mixed $data  数据
     * @param  bool  $set   是否需要进行数据处理
     * @return $this
     */
    public function appendData($data, $set = false)
    {
        if ($set) {
            // 进行数据处理
            foreach ($data as $key => $value) {
                $this->setAttr($key, $value, $data);
            }
        } else {
            if (is_object($data)) {
                $data = get_object_vars($data);
            }

            $this->data = array_merge($this->data, $data);
        }

        return $this;
    }

    /**
     * 获取对象原始数据 如果不存在指定字段返回null
     * @access public
     * @param  string $name 字段名 留空获取全部
     * @return mixed
     */
    public function getOrigin($name = null)
    {
        if (is_null($name)) {
            return $this->origin;
        }
        return array_key_exists($name, $this->origin) ? $this->origin[$name] : null;
    }

    /**
     * 获取对象原始数据 如果不存在指定字段返回false
     * @access public
     * @param  string $name 字段名 留空获取全部
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function getData($name = null)
    {
        if (is_null($name)) {
            return $this->data;
        } elseif (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } elseif (array_key_exists($name, $this->relation)) {
            return $this->relation[$name];
        }
        throw new InvalidArgumentException('property not exists:' . static::class . '->' . $name);
    }

    /**
     * 获取变化的数据 并排除只读数据
     * @access public
     * @return array
     */
    public function getChangedData()
    {
        if ($this->force) {
            $data = $this->data;
        } else {
            $data = array_udiff_assoc($this->data, $this->origin, function ($a, $b) {
                if ((empty($a) || empty($b)) && $a !== $b) {
                    return 1;
                }

                return is_object($a) || $a != $b ? 1 : 0;
            });
        }

        if (!empty($this->readonly)) {
            // 只读字段不允许更新
            foreach ($this->readonly as $key => $field) {
                if (isset($data[$field])) {
                    unset($data[$field]);
                }
            }
        }

        return $data;
    }

    /**
     * 修改器 设置数据对象值
     * @access public
     * @param  string $name  属性名
     * @param  mixed  $value 属性值
     * @param  array  $data  数据
     * @return void
     */
    public function setAttr($name, $value, $data = [])
    {
        if (isset($this->set[$name])) {
            return;
        }

        if (is_null($value) && $this->autoWriteTimestamp && in_array($name, [$this->createTime, $this->updateTime])) {
            // 自动写入的时间戳字段
            $value = $this->autoWriteTimestamp($name);
        } else {
            // 检测修改器
            $method = 'set' . Loader::parseName($name, 1) . 'Attr';

            if (method_exists($this, $method)) {
                $value = $this->$method($value, array_merge($this->data, $data));

                $this->set[$name] = true;
            } elseif (isset($this->type[$name])) {
                // 类型转换
                $value = $this->writeTransform($value, $this->type[$name]);
            }
        }

        // 设置数据对象属性
        $this->data[$name] = $value;
    }

    /**
     * 是否需要自动写入时间字段
     * @access public
     * @param  bool $auto
     * @return $this
     */
    public function isAutoWriteTimestamp($auto)
    {
        $this->autoWriteTimestamp = $auto;

        return $this;
    }

    /**
     * 自动写入时间戳
     * @access protected
     * @param  string $name 时间戳字段
     * @return mixed
     */
    protected function autoWriteTimestamp($name)
    {
        if (isset($this->type[$name])) {
            $type = $this->type[$name];

            if (strpos($type, ':')) {
                list($type, $param) = explode(':', $type, 2);
            }

            switch ($type) {
                case 'datetime':
                case 'date':
                    $format = !empty($param) ? $param : $this->dateFormat;
                    $format .= strpos($format, 'u') || false !== strpos($format, '\\') ? '' : '.u';
                    $value = $this->formatDateTime($format);
                    break;
                case 'timestamp':
                case 'integer':
                default:
                    $value = time();
                    break;
            }
        } elseif (is_string($this->autoWriteTimestamp) && in_array(strtolower($this->autoWriteTimestamp), [
            'datetime',
            'date',
            'timestamp',
        ])) {
            $format = strpos($this->dateFormat, 'u') || false !== strpos($this->dateFormat, '\\') ? '' : '.u';
            $value  = $this->formatDateTime($this->dateFormat . $format);
        } else {
            $value = time();
        }

        return $value;
    }

    /**
     * 数据写入 类型转换
     * @access protected
     * @param  mixed        $value 值
     * @param  string|array $type  要转换的类型
     * @return mixed
     */
    protected function writeTransform($value, $type)
    {
        if (is_null($value)) {
            return;
        }

        if (is_array($type)) {
            list($type, $param) = $type;
        } elseif (strpos($type, ':')) {
            list($type, $param) = explode(':', $type, 2);
        }

        switch ($type) {
            case 'integer':
                $value = (int) $value;
                break;
            case 'float':
                if (empty($param)) {
                    $value = (float) $value;
                } else {
                    $value = (float) number_format($value, $param, '.', '');
                }
                break;
            case 'boolean':
                $value = (bool) $value;
                break;
            case 'timestamp':
                if (!is_numeric($value)) {
                    $value = strtotime($value);
                }
                break;
            case 'datetime':
                $format = !empty($param) ? $param : $this->dateFormat;
                $value  = is_numeric($value) ? $value : strtotime($value);
                $value  = $this->formatDateTime($format, $value);
                break;
            case 'object':
                if (is_object($value)) {
                    $value = json_encode($value, JSON_FORCE_OBJECT);
                }
                break;
            case 'array':
                $value = (array) $value;
            case 'json':
                $option = !empty($param) ? (int) $param : JSON_UNESCAPED_UNICODE;
                $value  = json_encode($value, $option);
                break;
            case 'serialize':
                $value = serialize($value);
                break;
        }

        return $value;
    }

    /**
     * 获取器 获取数据对象的值
     * @access public
     * @param  string $name 名称
     * @param  array  $item 数据
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function getAttr($name, &$item = null)
    {
        try {
            $notFound = false;
            $value    = $this->getData($name);
        } catch (InvalidArgumentException $e) {
            $notFound = true;
            $value    = null;
        }

        // 检测属性获取器
        $fieldName = Loader::parseName($name);
        $method    = 'get' . Loader::parseName($name, 1) . 'Attr';

        if (isset($this->withAttr[$fieldName])) {
            if ($notFound && $relation = $this->isRelationAttr($name)) {
                $modelRelation = $this->$relation();
                $value         = $this->getRelationData($modelRelation);
            }

            $closure = $this->withAttr[$fieldName];
            $value   = $closure($value, $this->data);
        } elseif (method_exists($this, $method)) {
            if ($notFound && $relation = $this->isRelationAttr($name)) {
                $modelRelation = $this->$relation();
                $value         = $this->getRelationData($modelRelation);
            }

            $value = $this->$method($value, $this->data);
        } elseif (isset($this->type[$name])) {
            // 类型转换
            $value = $this->readTransform($value, $this->type[$name]);
        } elseif ($this->autoWriteTimestamp && in_array($name, [$this->createTime, $this->updateTime])) {
            if (is_string($this->autoWriteTimestamp) && in_array(strtolower($this->autoWriteTimestamp), [
                'datetime',
                'date',
                'timestamp',
            ])) {
                $value = $this->formatDateTime($this->dateFormat, $value);
            } else {
                $value = $this->formatDateTime($this->dateFormat, $value, true);
            }
        } elseif ($notFound) {
            $value = $this->getRelationAttribute($name, $item);
        }

        return $value;
    }

    /**
     * 获取关联属性值
     * @access protected
     * @param  string   $name  属性名
     * @param  array    $item  数据
     * @return mixed
     */
    protected function getRelationAttribute($name, &$item)
    {
        $relation = $this->isRelationAttr($name);

        if ($relation) {
            $modelRelation = $this->$relation();
            if ($modelRelation instanceof Relation) {
                $value = $this->getRelationData($modelRelation);

                if ($item && method_exists($modelRelation, 'getBindAttr') && $bindAttr = $modelRelation->getBindAttr()) {

                    foreach ($bindAttr as $key => $attr) {
                        $key = is_numeric($key) ? $attr : $key;

                        if (isset($item[$key])) {
                            throw new Exception('bind attr has exists:' . $key);
                        } else {
                            $item[$key] = $value ? $value->getAttr($attr) : null;
                        }
                    }

                    return false;
                }

                // 保存关联对象值
                $this->relation[$name] = $value;

                return $value;
            }
        }

        throw new InvalidArgumentException('property not exists:' . static::class . '->' . $name);
    }

    /**
     * 数据读取 类型转换
     * @access protected
     * @param  mixed        $value 值
     * @param  string|array $type  要转换的类型
     * @return mixed
     */
    protected function readTransform($value, $type)
    {
        if (is_null($value)) {
            return;
        }

        if (is_array($type)) {
            list($type, $param) = $type;
        } elseif (strpos($type, ':')) {
            list($type, $param) = explode(':', $type, 2);
        }

        switch ($type) {
            case 'integer':
                $value = (int) $value;
                break;
            case 'float':
                if (empty($param)) {
                    $value = (float) $value;
                } else {
                    $value = (float) number_format($value, $param, '.', '');
                }
                break;
            case 'boolean':
                $value = (bool) $value;
                break;
            case 'timestamp':
                if (!is_null($value)) {
                    $format = !empty($param) ? $param : $this->dateFormat;
                    $value  = $this->formatDateTime($format, $value, true);
                }
                break;
            case 'datetime':
                if (!is_null($value)) {
                    $format = !empty($param) ? $param : $this->dateFormat;
                    $value  = $this->formatDateTime($format, $value);
                }
                break;
            case 'json':
                $value = json_decode($value, true);
                break;
            case 'array':
                $value = empty($value) ? [] : json_decode($value, true);
                break;
            case 'object':
                $value = empty($value) ? new \stdClass() : json_decode($value);
                break;
            case 'serialize':
                try {
                    $value = unserialize($value);
                } catch (\Exception $e) {
                    $value = null;
                }
                break;
            default:
                if (false !== strpos($type, '\\')) {
                    // 对象类型
                    $value = new $type($value);
                }
        }

        return $value;
    }

    /**
     * 设置数据字段获取器
     * @access public
     * @param  string|array $name       字段名
     * @param  callable     $callback   闭包获取器
     * @return $this
     */
    public function withAttribute($name, $callback = null)
    {
        if (is_array($name)) {
            foreach ($name as $key => $val) {
                $key = Loader::parseName($key);

                $this->withAttr[$key] = $val;
            }
        } else {
            $name = Loader::parseName($name);

            $this->withAttr[$name] = $callback;
        }

        return $this;
    }
}
