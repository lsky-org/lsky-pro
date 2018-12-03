<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 上午10:31
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use app\common\model\Config;
use think\Db;
use think\Exception;

/**
 * 系统设置
 *
 * Class System
 * @package app\index\controller\admin
 */
class System extends Base
{
    public function initialize()
    {
        parent::initialize();
        $this->assign('configs', parent::getConfigs(['basics', 'upload', 'user', 'mail', 'audit', 'other']));
    }

    public function index()
    {
        if ($this->request->isPost()) {
            Db::startTrans();
            try {
                $data = $this->request->post();
                foreach ($data as $key => $value) {
                    Config::where('name', $key)->setField('value', $value);
                }
                Db::commit();
            } catch (Exception $e) {
                Db::rollback();
                return $this->error($e->getMessage());
            }
            return $this->success('保存成功');
        }
        // 命名规则
        $naming = \think\facade\Config::pull('naming');
        $this->assign('naming', $naming);
        return $this->fetch();
    }

    public function testMail()
    {
        if ($this->request->isPost()) {
            $email = $this->request->post('email');
            $err = $this->sendMail($email, '测试', '这是一封测试邮件！');
            if (true !== $err) {
                return $this->error($err);
            }
            return $this->success('发送成功');
        }
    }
}
