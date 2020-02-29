<?php
/**
 * User: Wisp X
 * Date: 2018/9/28
 * Time: 下午4:25
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use think\Db;
use think\Exception;
use app\common\model\Config;

/**
 * 储存策略
 *
 * Class Strategy
 * @package app\index\controller\admin
 */
class Strategy extends Base
{
    public function initialize()
    {
        parent::initialize();
        $strategy = \think\facade\Config::pull('strategy');
        $this->assign([
            'configs'   => parent::getConfigs(array_keys($strategy)),
            'strategy'  => $strategy
        ]);
    }

    public function index()
    {
        if ($this->request->isPost()) {
            Db::startTrans();
            try {
                $data = $this->request->post();
                foreach ($data as $key => $value) {
                    Config::where('name', $key)->setField('value', trim($value));
                }
                Db::commit();
            } catch (Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
            }
            $this->success('保存成功');
        }
        return $this->fetch();
    }
}
