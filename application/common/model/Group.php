<?php
/**
 * User: Wisp X
 * Date: 2019-01-19
 * Time: 13:07
 * Link: https://github.com/wisp-x
 */

namespace app\common\model;

use think\Model;

class Group extends Model
{
    protected $insert = ['default'];

    public function setDefaultAttr($default)
    {
        if ($default) {
            $this->where('default', 1)->setField('default', 0);
        }
        return $default ? 1 : 0;
    }
}
