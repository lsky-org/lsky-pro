<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: zhangyajun <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;

class Collection implements ArrayAccess, Countable, IteratorAggregate, JsonSerializable
{
    /**
     * 数据集数据
     * @var array
     */
    protected $items = [];

    public function __construct($items = [])
    {
        $this->items = $this->convertToArray($items);
    }

    public static function make($items = [])
    {
        return new static($items);
    }

    /**
     * 是否为空
     * @access public
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }

    public function toArray()
    {
        return array_map(function ($value) {
            return ($value instanceof Model || $value instanceof self) ? $value->toArray() : $value;
        }, $this->items);
    }

    public function all()
    {
        return $this->items;
    }

    /**
     * 合并数组
     *
     * @access public
     * @param  mixed $items
     * @return static
     */
    public function merge($items)
    {
        return new static(array_merge($this->items, $this->convertToArray($items)));
    }

    /**
     * 比较数组，返回差集
     *
     * @access public
     * @param  mixed $items
     * @return static
     */
    public function diff($items)
    {
        return new static(array_diff($this->items, $this->convertToArray($items)));
    }

    /**
     * 交换数组中的键和值
     *
     * @access public
     * @return static
     */
    public function flip()
    {
        return new static(array_flip($this->items));
    }

    /**
     * 比较数组，返回交集
     *
     * @access public
     * @param  mixed $items
     * @return static
     */
    public function intersect($items)
    {
        return new static(array_intersect($this->items, $this->convertToArray($items)));
    }

    /**
     * 返回数组中所有的键名
     *
     * @access public
     * @return static
     */
    public function keys()
    {
        return new static(array_keys($this->items));
    }

    /**
     * 删除数组的最后一个元素（出栈）
     *
     * @access public
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * 通过使用用户自定义函数，以字符串返回数组
     *
     * @access public
     * @param  callable $callback
     * @param  mixed    $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce($this->items, $callback, $initial);
    }

    /**
     * 以相反的顺序返回数组。
     *
     * @access public
     * @return static
     */
    public function reverse()
    {
        return new static(array_reverse($this->items));
    }

    /**
     * 删除数组中首个元素，并返回被删除元素的值
     *
     * @access public
     * @return mixed
     */
    public function shift()
    {
        return array_shift($this->items);
    }

    /**
     * 在数组结尾插入一个元素
     * @access public
     * @param  mixed  $value
     * @param  mixed  $key
     * @return void
     */
    public function push($value, $key = null)
    {
        if (is_null($key)) {
            $this->items[] = $value;
        } else {
            $this->items[$key] = $value;
        }
    }

    /**
     * 把一个数组分割为新的数组块.
     *
     * @access public
     * @param  int  $size
     * @param  bool $preserveKeys
     * @return static
     */
    public function chunk($size, $preserveKeys = false)
    {
        $chunks = [];

        foreach (array_chunk($this->items, $size, $preserveKeys) as $chunk) {
            $chunks[] = new static($chunk);
        }

        return new static($chunks);
    }

    /**
     * 在数组开头插入一个元素
     * @access public
     * @param mixed  $value
     * @param mixed  $key
     * @return void
     */
    public function unshift($value, $key = null)
    {
        if (is_null($key)) {
            array_unshift($this->items, $value);
        } else {
            $this->items = [$key => $value] + $this->items;
        }
    }

    /**
     * 给每个元素执行个回调
     *
     * @access public
     * @param  callable $callback
     * @return $this
     */
    public function each(callable $callback)
    {
        foreach ($this->items as $key => $item) {
            $result = $callback($item, $key);

            if (false === $result) {
                break;
            } elseif (!is_object($item)) {
                $this->items[$key] = $result;
            }
        }

        return $this;
    }

    /**
     * 用回调函数过滤数组中的元素
     * @access public
     * @param  callable|null $callback
     * @return static
     */
    public function filter(callable $callback = null)
    {
        if ($callback) {
            return new static(array_filter($this->items, $callback));
        }

        return new static(array_filter($this->items));
    }

    /**
     * 返回数据中指定的一列
     * @access public
     * @param mixed $columnKey 键名
     * @param mixed $indexKey  作为索引值的列
     * @return array
     */
    public function column($columnKey, $indexKey = null)
    {
        return array_column($this->items, $columnKey, $indexKey);
    }

    /**
     * 对数组排序
     *
     * @access public
     * @param  callable|null $callback
     * @return static
     */
    public function sort(callable $callback = null)
    {
        $items = $this->items;

        $callback = $callback ?: function ($a, $b) {
            return $a == $b ? 0 : (($a < $b) ? -1 : 1);

        };

        uasort($items, $callback);

        return new static($items);
    }

    /**
     * 将数组打乱
     *
     * @access public
     * @return static
     */
    public function shuffle()
    {
        $items = $this->items;

        shuffle($items);

        return new static($items);
    }

    /**
     * 截取数组
     *
     * @access public
     * @param  int  $offset
     * @param  int  $length
     * @param  bool $preserveKeys
     * @return static
     */
    public function slice($offset, $length = null, $preserveKeys = false)
    {
        return new static(array_slice($this->items, $offset, $length, $preserveKeys));
    }

    // ArrayAccess
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->items);
    }

    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    //Countable
    public function count()
    {
        return count($this->items);
    }

    //IteratorAggregate
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    //JsonSerializable
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * 转换当前数据集为JSON字符串
     * @access public
     * @param  integer $options json参数
     * @return string
     */
    public function toJson($options = JSON_UNESCAPED_UNICODE)
    {
        return json_encode($this->toArray(), $options);
    }

    public function __toString()
    {
        return $this->toJson();
    }

    /**
     * 转换成数组
     *
     * @access public
     * @param  mixed $items
     * @return array
     */
    protected function convertToArray($items)
    {
        if ($items instanceof self) {
            return $items->all();
        }

        return (array) $items;
    }
}
