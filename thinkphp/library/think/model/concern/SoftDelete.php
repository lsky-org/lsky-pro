<?php

namespace think\model\concern;

use think\db\Query;

/**
 * 数据软删除
 */
trait SoftDelete
{

    /**
     * 是否包含软删除数据
     * @var bool
     */
    protected $withTrashed = false;

    /**
     * 判断当前实例是否被软删除
     * @access public
     * @return boolean
     */
    public function trashed()
    {
        $field = $this->getDeleteTimeField();

        if ($field && !empty($this->getOrigin($field))) {
            return true;
        }

        return false;
    }

    /**
     * 查询软删除数据
     * @access public
     * @return Query
     */
    public static function withTrashed()
    {
        $model = new static();

        return $model->withTrashedData(true)->db(false);
    }

    /**
     * 是否包含软删除数据
     * @access protected
     * @param  bool $withTrashed 是否包含软删除数据
     * @return $this
     */
    protected function withTrashedData($withTrashed)
    {
        $this->withTrashed = $withTrashed;
        return $this;
    }

    /**
     * 只查询软删除数据
     * @access public
     * @return Query
     */
    public static function onlyTrashed()
    {
        $model = new static();
        $field = $model->getDeleteTimeField(true);

        if ($field) {
            return $model
                ->db(false)
                ->useSoftDelete($field, $model->getWithTrashedExp());
        }

        return $model->db(false);
    }

    /**
     * 获取软删除数据的查询条件
     * @access protected
     * @return array
     */
    protected function getWithTrashedExp()
    {
        return is_null($this->defaultSoftDelete) ?
        ['notnull', ''] : ['<>', $this->defaultSoftDelete];
    }

    /**
     * 删除当前的记录
     * @access public
     * @return bool
     */
    public function delete($force = false)
    {
        if (!$this->isExists() || false === $this->trigger('before_delete', $this)) {
            return false;
        }

        $force = $force ?: $this->isForce();
        $name  = $this->getDeleteTimeField();

        if ($name && !$force) {
            // 软删除
            $this->data($name, $this->autoWriteTimestamp($name));

            $result = $this->isUpdate()->withEvent(false)->save();

            $this->withEvent(true);
        } else {
            // 读取更新条件
            $where = $this->getWhere();

            // 删除当前模型数据
            $result = $this->db(false)
                ->where($where)
                ->removeOption('soft_delete')
                ->delete();
        }

        // 关联删除
        if (!empty($this->relationWrite)) {
            $this->autoRelationDelete();
        }

        $this->trigger('after_delete', $this);

        $this->exists(false);

        return true;
    }

    /**
     * 删除记录
     * @access public
     * @param  mixed $data 主键列表 支持闭包查询条件
     * @param  bool  $force 是否强制删除
     * @return bool
     */
    public static function destroy($data, $force = false)
    {
        // 包含软删除数据
        $query = (new static())->db(false);

        if (is_array($data) && key($data) !== 0) {
            $query->where($data);
            $data = null;
        } elseif ($data instanceof \Closure) {
            call_user_func_array($data, [ & $query]);
            $data = null;
        } elseif (is_null($data)) {
            return false;
        }

        $resultSet = $query->select($data);

        if ($resultSet) {
            foreach ($resultSet as $data) {
                $data->force($force)->delete();
            }
        }

        return true;
    }

    /**
     * 恢复被软删除的记录
     * @access public
     * @param  array $where 更新条件
     * @return bool
     */
    public function restore($where = [])
    {
        $name = $this->getDeleteTimeField();

        if ($name) {
            if (false === $this->trigger('before_restore')) {
                return false;
            }

            if (empty($where)) {
                $pk = $this->getPk();

                $where[] = [$pk, '=', $this->getData($pk)];
            }

            // 恢复删除
            $this->db(false)
                ->where($where)
                ->useSoftDelete($name, $this->getWithTrashedExp())
                ->update([$name => $this->defaultSoftDelete]);

            $this->trigger('after_restore');

            return true;
        }

        return false;
    }

    /**
     * 获取软删除字段
     * @access protected
     * @param  bool  $read 是否查询操作 写操作的时候会自动去掉表别名
     * @return string|false
     */
    protected function getDeleteTimeField($read = false)
    {
        $field = property_exists($this, 'deleteTime') && isset($this->deleteTime) ? $this->deleteTime : 'delete_time';

        if (false === $field) {
            return false;
        }

        if (false === strpos($field, '.')) {
            $field = '__TABLE__.' . $field;
        }

        if (!$read && strpos($field, '.')) {
            $array = explode('.', $field);
            $field = array_pop($array);
        }

        return $field;
    }

    /**
     * 查询的时候默认排除软删除数据
     * @access protected
     * @param  Query  $query
     * @return void
     */
    protected function withNoTrashed($query)
    {
        $field = $this->getDeleteTimeField(true);

        if ($field) {
            $condition = is_null($this->defaultSoftDelete) ? ['null', ''] : ['=', $this->defaultSoftDelete];
            $query->useSoftDelete($field, $condition);
        }
    }
}
