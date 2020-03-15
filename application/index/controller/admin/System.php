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

    /**
     * 更新系统
     */
    public function upgrade()
    {
        Db::startTrans();
        $backup = 'backup-' . date('YmdHis') . '.zip';
        try {
            $upgrade = new \Upgrade(app()->getRootPath(), $this->config['system_version']);
            $release = $upgrade->release(); // 获取最新版
            // 判断是否已经是最新版
            if ($upgrade->check($release->version)) {
                throw new \Exception('当前系统已经是最新版');
            }
            $upgrade->backup($backup); // 备份系统
            $upgradeFile = app()->getRuntimePath() . 'upgrade.zip';// 判断是否存在安装包
            $file = file_exists($upgradeFile) ? $upgradeFile : $upgrade->download($release->url);

            // 校验 MD5
            if (md5_file($file) !== $release->md5) {
                throw new \Exception('安装包损坏, 请稍后重试');
            }

            $dir = $upgrade->unzip($file, $upgrade->getWorkspace()); // 解压安装包到工作区目录
            $path = rtrim($dir . $release->path, '/') . '/'; // 新版本程序根目录
            $updateSql = $path . $release->sql; // 更新数据库结构 sql 文件路径
            if (!$sql = @file_get_contents($updateSql)) {
                throw new \Exception('SQL 文件获取失败');
            }

            // 复制 env 文件
            $config = \config('database.');
            $env = str_ireplace([
                '{hostname}',
                '{database}',
                '{username}',
                '{password}',
                '{hostport}',
            ], [
                $config['hostname'],
                $config['database'],
                $config['username'],
                $config['password'],
                $config['hostport'],
            ], @file_get_contents($path . '.env.example'));
            if (!@file_put_contents($path . '.env', $env)) {
                throw new \Exception('配置文件写入失败');
            }

            // 创建安装锁文件
            if (!@fopen($path . 'application/install.lock', 'w')) {
                throw new \Exception('安装锁文件创建失败');
            }

            // 检测新增表字段
            if (!$tableFields = @include($path . 'config/table.php')) {
                throw new \Exception('表字段配置文件获取失败');
            }
            foreach ($tableFields as $table => $fields) {
                foreach ($fields as $field => $sql) {
                    $fetchFields = array_column(Db::query("DESCRIBE `{$table}`;"), 'Field');
                    if (!in_array($field, $fetchFields)) {
                        Db::execute($sql);
                    }
                }
            }

            // 执行 sql 导入
            if (is_file($path . $release->sql)) {
                $lines = file($path . $release->sql);
                $temp = '';
                foreach ($lines as &$line) {
                    $line = trim($line);
                    if (substr($line, 0, 2) == '--' || $line == '' || substr($line, 0, 2) == '/*') continue;
                    $temp .= $line;
                    if (substr($line, -1, 1) == ';') {
                        Db::execute($temp);
                        $temp = '';
                    }
                }
            }

            // 检测需要的删除文件或文件夹
            foreach ($release->removes as $key => $items) {
                foreach ($items as $item) {
                    $pathname = trim($upgrade->getRootPath(), '/') . '/' . trim($item, '/');
                    if ($key === 'folders') {
                        $upgrade->rmdir($pathname);
                    } else {
                        @unlink($pathname);
                    }
                }
            }

            // 复制文件夹
            $upgrade->copyDirs($path, $upgrade->getRootPath());

            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            $this->result([], 0, $e->getMessage());
        } catch (\PDOException $e) {
            Db::rollback();
            $this->result([], 0, $e->getMessage());
        }
        $this->result([], 1, '更新完成, 原系统文件已备份(' . $backup . ')');
    }

    public function check()
    {
        $release = null;
        try {
            $upgrade = new \Upgrade(app()->getRootPath(), $this->config['system_version']);
            $release = $upgrade->release(); // 获取安装包列表
            if (!$release) {
                throw new \Exception('获取版本时遇到错误');
            }
            // 判断是否已经是最新版
            if ($upgrade->check($release->version)) {
                throw new \Exception('当前系统已经是最新版');
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }

        $this->success('发现新版本', null, [
            'version' => $release->version,
            'info' => $release->info,
        ]);
    }
}
