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

        switch ($step) {
            case 1:
                // 运行环境检测
                $testing = $phpVerGt56 && $isCurl && $isFileInfo && $isMysqli;
                $this->assign([
                    'phpVerGt56' => $phpVerGt56,
                    'isCurl' => $isCurl,
                    'isFileInfo' => $isFileInfo,
                    'isMysqli' => $isMysqli,
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
                        return $this->error($e->getMessage());
                    }
                    Session::flash('install_success', true);
                    // 删除sql文件
                    @unlink($rootPath . 'install.sql');
                    if (file_exists($rootPath . 'update.sql')) {
                        @unlink($rootPath . 'update.sql');
                    }
                    // 删除session
                    Session::delete('db');
                    return $this->success('设置成功');
                }
                break;
        }

        $this->assign([
            'step' => $step
        ]);
        return $this->fetch();
    }

    public function update($start = 0)
    {
        try {
            $user = false;
            if (Session::has('uid')) {
                $user = Users::get(Session::get('uid'));
                if (!$user) {
                    Session::delete('uid');
                }
            }

            if (!$user || !$user->is_admin) {
                $this->redirect(url('/'));
            }

            $path = Env::get('root_path') . 'update.sql';
            $file = @file_get_contents($path);
            if (!$file) {
                $this->redirect(url('/'));
            }

            $code = 0;
            $msg = null;
            if ($start == 1) {
                if ($file) {
                    $config = Config::pull('db');

                    // 替换sql关键字
                    $file = str_replace([
                        '{database}'
                    ], [
                        $config['database']
                    ], $file);

                    $mysqli = new \mysqli(
                        $config['hostname'],
                        $config['username'],
                        $config['password'],
                        $config['database'],
                        $config['hostport']
                    );
                    if ($mysqli->connect_errno) {
                        $mysqli->close();
                        throw new Exception($mysqli->connect_error);
                    }

                    $mysqli->autocommit(false);
                    $mysqli->select_db($config['database']);
                    $mysqli->query("SET NAMES utf8");

                    // 新建表字段
                    $tableFields = [
                        'lsky_images' => [
                            'folder_id' => "ALTER TABLE `lsky_images` ADD `folder_id` INT NOT NULL DEFAULT '0' COMMENT '文件夹ID' AFTER `user_id`;",
                            'suspicious' => "ALTER TABLE `lsky_images` ADD `suspicious` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '可疑图片' AFTER `ip`;",
                        ],
                        'lsky_users' => [
                            'default_folder' => "ALTER TABLE `lsky_users` ADD `default_folder` VARCHAR(32) DEFAULT NULL COMMENT '默认上传文件夹' AFTER `quota`;",
                            'group_id' => "ALTER TABLE `lsky_users` ADD `group_id` int(11) NOT NULL DEFAULT 0 COMMENT '角色组ID' AFTER `id`;"
                        ],
                    ];

                    foreach ($tableFields as $table => $fields) {
                        foreach ($fields as $field => $sql) {
                            $fetchFields = $mysqli->query("DESCRIBE `{$table}`;");
                            // 判断字段是否已存在
                            $flag = true;
                            foreach ($fetchFields as $fetchField) {
                                if ($field == $fetchField['Field']) {
                                    $flag = false;
                                }
                            }
                            if ($flag) {
                                if (!$mysqli->query($sql)) {
                                    throw new Exception($mysqli->error);
                                }
                            }
                        }
                    }

                    foreach (explode(';', $file) as $value) {
                        if ($value && !ctype_space($value)) {
                            if (!$mysqli->query($value . ';')) {
                                throw new Exception('<p>数据导入失败！</p><p>错误信息：<br/>' . $mysqli->error . '</p><p>sql语句：<br/>' . $value . '</p>');
                            }
                        }
                    }

                    $mysqli->commit();
                    $mysqli->autocommit(true);
                    $mysqli->close();
                }
                $code = 1;
                $msg = '更新成功，返回<a href="/">首页</a>';
                // 删除sql文件
                @unlink($path);
                if (file_exists(Env::get('root_path') . 'install.sql')) {
                    @unlink(Env::get('root_path') . 'install.sql');
                }
            }
        } catch (Exception $e) {
            $mysqli->rollback();
            $mysqli->close();
            $code = 0;
            $msg = $e->getMessage();
        }
        $this->assign([
            'code' => $code,
            'msg' => $msg
        ]);
        return $this->fetch();
    }
}
