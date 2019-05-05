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

    public function console()
    {
        $storage = Db::name('images')->sum('size');
        $imagesCount = Db::name('images')->count();
        $suspiciousImagesCount = Db::name('images')->where('suspicious', 1)->count();
        $users_count = Db::name('users')->count();
        $today = Db::name('images')->whereTime('create_time', 'today')->count();
        $yesterday = Db::name('images')->whereTime('create_time', 'yesterday')->count();
        $month = Db::name('images')->whereTime('create_time', 'month')->count();
        $tourists = Db::name('images')->where('user_id', 0)->count();

        $this->assign([
            'storage' => format_size($storage, true), // 占用储存
            'images_num' => $imagesCount, // 图片数量
            'suspicious_images_num' => $suspiciousImagesCount, // 可疑图片
            'users_num' => $users_count, // 用户数量
            'today' => $today, // 今日上传
            'yesterday' => $yesterday, // 昨日上传
            'month' => $month, // 本月上传
            'tourists' => $tourists, // 游客上传
        ]);

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
