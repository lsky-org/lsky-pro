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
use think\Db;
use think\Exception;
use think\facade\Config;
use think\facade\Env;
use think\facade\Session;

class Install extends Controller
{
    public function index($step = 1)
    {
        $rootPath = Env::get('root_path');
        $configPath = Env::get('config_path');

        // 检测是否已安装
        if (file_exists($configPath . 'db.php') && !Session::has('install_success')) {
            exit('你已安装成功，请勿重复安装！');
        }

        $phpVerGt56 = PHP_VERSION >= 5.6;
        $isCurl = function_exists('curl_init');
        $isFileInfo = function_exists('finfo_open');
        $isMysqli = class_exists('mysqli');
        $isZip = class_exists('ZipArchive');

        switch ($step) {
            case 1:
                // 运行环境检测
                $testing = $phpVerGt56 && $isCurl && $isFileInfo && $isMysqli && $isZip;
                $this->assign([
                    'phpVerGt56' => $phpVerGt56,
                    'isCurl' => $isCurl,
                    'isFileInfo' => $isFileInfo,
                    'isMysqli' => $isMysqli,
                    'isZip' => $isZip,
                    'testing' => $testing,
                    'dir' => is_writable(Env::get('runtime_path')) && is_writable($configPath),
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
                        if (!$sqlFile = @file_get_contents($rootPath . 'install.sql')) {
                            throw new Exception('安装文件不存在');
                        }
                        $mysqli = new \mysqli($hostname, $username,  $password, $database,  $hostport);
                        if ($mysqli->connect_error) {
                            $mysqli->close();
                            throw new Exception($mysqli->connect_error);
                        }
                        $mysqli->query("SET NAMES utf8");
                        if (!$mysqli->multi_query($sqlFile)) {
                            throw new Exception('数据写入失败');
                        }
                        Session::set('db', [
                            'hostname' => $hostname,
                            'database' => $database,
                            'username' => $username,
                            'password' => $password,
                            'hostport' => $hostport,
                        ]);
                    } catch (Exception $e) {
                        $this->error($e->getMessage());
                    }
                    $this->success('数据写入成功');
                }
                break;
            case 3:
                // 设置管理员账号密码
                if ($this->request->isPost()) {
                    try {
                        $data = $this->request->post();
                        $data['is_admin'] = 1;
                        $data['group_id'] = 1;
                        $data['quota'] = 1073741824;
                        $data['update_time'] = time();
                        $data['create_time'] = time();
                        if ($data['password'] != $data['password_confirm']) {
                            throw new Exception('两次输入的密码不一致！');
                        }
                        $data['password'] = md5($data['password']);
                        $data['reg_ip'] = request()->ip();
                        $data['token'] = make_token();
                        $dbConfig = Session::get('db');
                        $hostname = $dbConfig['hostname'];
                        $database = $dbConfig['database'];
                        $username = $dbConfig['username'];
                        $password = $dbConfig['password'];
                        $hostport = $dbConfig['hostport'];
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
                        $db = Db::connect(array_merge($dbConfig, [
                            // 数据库类型
                            'type'        => 'mysql',
                            // 数据库连接参数
                            'params'      => [],
                            // 数据库编码默认采用utf8
                            'charset'     => 'utf8mb4',
                            // 数据库表前缀
                            'prefix'      => 'lsky_',
                        ]));
                        unset($data['password_confirm']);
                        $db->name('users')->insert($data);
                    } catch (Exception $e) {
                        @unlink($configPath . 'db.php');
                        $this->error($e->getMessage());
                    }
                    Session::flash('install_success', true);
                    // 删除sql文件
                    @unlink($rootPath . 'install.sql');
                    if (file_exists($rootPath . 'update.sql')) {
                        @unlink($rootPath . 'update.sql');
                    }
                    // 删除session
                    Session::delete('db');
                    $this->success('设置成功');
                }
                break;
        }

        $this->assign([
            'step' => $step
        ]);
        return $this->fetch();
    }
}
