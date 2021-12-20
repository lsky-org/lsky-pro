<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 上午10:14
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use app\common\model\Config;
use app\index\controller\Base as AdminBase;

class Base extends AdminBase
{
    protected function initialize()
    {
        parent::initialize();
        if (!$this->user) {
            $this->redirect(url('auth/login'));
        }
        if (!$this->user->is_admin) {
            $this->redirect(url('/'));
        }
    }

    protected function getConfigs($keys)
    {
        $data = Config::order('type', 'asc')->all();
        $configs = [];
        foreach ($data as &$value) {
            if (in_array($value->key, $keys)) {
                $configs[$value->key][] = $value;
            }
        }
        return $configs;
    }
}
