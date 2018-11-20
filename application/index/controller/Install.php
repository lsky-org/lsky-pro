<?php
/**
 * User: Wisp X
 * Date: 2018/10/12
 * Time: 19:15
 * Link: https://github.com/wisp-x
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
    public function index($step = 1)
    {

        $rootPath = Env::get('root_path');
        $configPath = Env::get('config_path');

        // 检测是否已安装
        if (file_exists($rootPath . 'install.lock') && !Session::has('install_success')) {
            exit('你已安装成功，请勿重复安装！');
        }

        $phpVerGt56 = PHP_VERSION >= 5.6;
        $isCurl = function_exists('curl_init');
        $isZip = function_exists('zip_open');
        $isFileInfo = function_exists('finfo_open');
        $isMysqli = class_exists('mysqli');

        switch ($step) {
            case 1:
                // 运行环境检测
                $testing = $phpVerGt56 && $isCurl && $isFileInfo && $isZip && $isMysqli;
                $this->assign([
                    'phpVerGt56' => $phpVerGt56,
                    'isCurl' => $isCurl,
                    'isZip' => $isZip,
                    'isFileInfo' => $isFileInfo,
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
                        $dbPath = $configPath . 'db.php';
                        $str = <<<EOT
<?php
/**
 * User: Wisp X
 * Date: 2018/10/13
 * Time: 10:18
 * Link: https://github.com/wisp-x
 */

return [
    // 服务器地址
    'hostname'        => '$hostname',
    // 数据库名
    'database'        => '$database',
    // 用户名
    'username'        => '$username',
    // 密码
    'password'        => '$password',
    // 端口
    'hostport'        => '$hostport',
];
EOT;
                        if (file_exists($dbPath)) {
                            @file_put_contents($dbPath, $str);
                        } else {
                            $fp = fopen($dbPath, "w+");
                            fwrite($fp, $str);
                            fclose($fp);
                        }

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
                    @unlink($rootPath . 'install.sql');
                    return $this->success('设置成功');
                }
                break;
        }

        $this->assign([
            'step' => $step
        ]);
        return $this->fetch();
    }
}
