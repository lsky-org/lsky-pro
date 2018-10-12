<?php
/**
 * User: Wisp X
 * Date: 2018/10/12
 * Time: 19:15
 * Link: https://gitee.com/wispx
 */

namespace app\index\controller;

use app\common\model\Users;
use think\Controller;
use think\Exception;
use think\facade\Cookie;
use think\facade\Env;
use think\facade\Session;

class Install extends Controller
{
    public function index($stop = 1)
    {
        // TODO 检测是否已安装

        $rootPath = Env::get('root_path');
        $configPath = Env::get('config_path');

        if (file_exists($rootPath . 'install.lock') && !Session::has('install_success')) {
            exit('你已安装成功，重新安装请删除根目录install.lock文件！');
        }

        $phpVerGt56 = PHP_VERSION >= 5.6;
        $isCurl = function_exists('curl_init');
        $isZip = function_exists('zip_open');
        $isMysqli = class_exists('mysqli');

        switch ($stop) {
            case 1:
                // 运行环境检测
                $testing = $phpVerGt56 && $isCurl && $isZip && $isMysqli;
                $this->assign([
                    'phpVerGt56' => $phpVerGt56,
                    'isCurl' => $isCurl,
                    'isZip' => $isZip,
                    'isMysqli' => $isMysqli,
                    'testing' => $testing
                ]);
                break;
            case 2:
                // 安装
                if ($this->request->isPost()) {
                    $hostname = $this->request->post('hostname');
                    $database = $this->request->post('database');
                    $username = $this->request->post('username');
                    $password = $this->request->post('password');
                    $hostport = $this->request->post('hostport');
                    try {
                        if (!$sqlFile = file_get_contents($rootPath . 'install.sql')) {
                            throw new Exception('安装文件不存在');
                        }
                        $mysqli = new \mysqli($hostname, $username,  $password, $database,  $hostport);
                        if ($mysqli->connect_error) {
                            $mysqli->close();
                            throw new Exception($mysqli->connect_error);
                        }
                        if (!$mysqli->multi_query($sqlFile)) {
                            throw new Exception('数据写入失败');
                        }
                        $dataBasePath = $configPath . 'database.php';
                        $dataBaseFile = file_get_contents($dataBasePath);
                        $dataBaseFile = str_replace([
                            '{hostname}',
                            '{database}',
                            '{username}',
                            '{password}',
                            '{hostport}',
                        ], [
                            $hostname,
                            $database,
                            $username,
                            $password,
                            $hostport,
                        ], $dataBaseFile);

                        file_put_contents($dataBasePath, $dataBaseFile);

                    } catch (Exception $e) {
                        return $this->error($e->getMessage());
                    }
                    return $this->success('数据写入成功');
                }
                break;
            case 3:
                // 设置管理员账号密码
                if ($this->request->isPost()) {
                    try {
                        $data = $this->request->post();
                        $validate = $this->validate($data, 'Users.Install');
                        if (true !== $validate) {
                            throw new Exception($validate);
                        }
                        $data['is_admin'] = 1;
                        $data['quota'] = 1073741824;
                        Users::create($data);
                        fopen($rootPath . 'install.lock', 'w');
                    } catch (Exception $e) {
                        return $this->error($e->getMessage());
                    }
                    Session::flash('install_success', true);
                    // 删除sql文件
                    //@unlink($rootPath . 'install.sql');
                    return $this->success('设置成功');
                }
                break;
        }

        $this->assign([
            'stop' => $stop
        ]);
        return $this->fetch();
    }
}