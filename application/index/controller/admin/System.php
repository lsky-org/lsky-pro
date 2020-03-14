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
use app\common\model\Images;
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
                $this->error($e->getMessage());
            }
            $this->success('保存成功');
        }
        // 命名规则
        $naming = \think\facade\Config::pull('naming');
        $this->assign('naming', $naming);
        return $this->fetch();
    }

    public function console()
    {
        $storage = Images::sum('size');
        $imagesCount = Images::count();
        $suspiciousImagesCount = Images::where('suspicious', 1)->count();
        $users_count = \app\common\model\Users::count();
        $today = Images::whereTime('create_time', 'today')->count();
        $yesterday = Images::whereTime('create_time', 'yesterday')->count();
        $month = Images::whereTime('create_time', 'month')->count();
        $tourists = Images::where('user_id', 0)->count();

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
                $this->error($err);
            }
            $this->success('发送成功');
        }
    }

    public function upgrade()
    {
        Db::startTrans();
        try {
            $upgrade = new \Upgrade(app()->getRootPath(), 'v1.5.8');

            $releases = $upgrade->releases(); // 获取安装包列表
            $release = current($releases); // 获取最新版

            // 判断是否已经是最新版
            if ($upgrade->check($release->version)) {
                throw new \Exception('当前系统已经是最新版');
            }

            // 备份 sql
            $this->backupSql($upgrade->getPath() . 'backup.sql');

            $upgrade->backup('backup-' . date('YmdHis') . '.zip'); // 备份系统

            $file = $upgrade->download($release->url); // 下载安装包

            // 校验 MD5, 校验失败则删除文件并抛出异常
            if (md5_file($file) !== $release->md5) {
                throw new \Exception('安装包损坏, 请稍后重试');
            }

            $dir = $upgrade->unzip($file, $upgrade->getWorkspace()); // 解压安装包到工作区目录
            // TODO 根据版本包配置, 导入 sql
            // TODO sql 导入成功后根据配置删除指定文件, 然后再覆盖文件
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            $this->error($e->getMessage());
        }
        $this->success('更新完成');
    }

    private function backupSql($pathname)
    {

    }
}
