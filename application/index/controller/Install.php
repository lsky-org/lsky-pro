<?php
/**
 * User: Wisp X
 * Date: 2018/10/12
 * Time: 19:15
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Exception;
use think\facade\Session;

class Install extends Controller
{
    public function index($step = 1)
    {
        // 检测是否已安装
        if (file_exists(app()->getAppPath() . 'install.lock') && !Session::has('install_success')) {
            exit('你已安装成功，需要重新安装请删除 install.lock 文件');
        }

        $phpVerGt56 = PHP_VERSION >= 5.6;
        $isCurl = function_exists('curl_init');
        $isFileInfo = function_exists('finfo_open');
        $pdo = extension_loaded("pdo_mysql");
        $isZip = class_exists('ZipArchive');

        switch ($step) {
            case 1:
                // 运行环境检测
                $testing = $phpVerGt56 && $isCurl && $isFileInfo && $pdo && $isZip;
                $this->assign([
                    'phpVerGt56' => $phpVerGt56,
                    'isCurl' => $isCurl,
                    'isFileInfo' => $isFileInfo,
                    'pdo' => $pdo,
                    'isZip' => $isZip,
                    'testing' => $testing,
                    'dir' => is_writable(app()->getRuntimePath()) && is_writable(app()->getConfigPath()),
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
                        $installSql = app()->getAppPath() . 'sql/install.sql';
                        if (!is_file($installSql)) {
                            throw new Exception('数据库 SQL 文件不存在');
                        }
                        $db = Db::connect(array_merge(\config('database.'), [
                            'hostname' => $hostname,
                            'database' => $database,
                            'username' => $username,
                            'password' => $password,
                            'hostport' => $hostport,
                        ]));

                        $lines = file($installSql);
                        $temp = '';
                        foreach ($lines as &$line) {
                            $line = trim($line);
                            if (substr($line, 0, 2) == '--' || $line == '' || substr($line, 0, 2) == '/*') continue;
                            $temp .= $line;
                            if (substr($line, -1, 1) == ';') {
                                $db->execute($temp);
                                $temp = '';
                            }
                        }

                        Session::set('db', [
                            'hostname' => $hostname,
                            'database' => $database,
                            'username' => $username,
                            'password' => $password,
                            'hostport' => $hostport,
                            'prefix' => 'lsky_'
                        ]);
                    } catch (Exception $e) {
                        $this->error($e->getMessage());
                    } catch (\PDOException $e) {
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
                        $data['token'] = make_token(false);

                        $config = Session::get('db');

                        // 写入 env 文件
                        $env = str_ireplace([
                            '{hostname}',
                            '{database}',
                            '{username}',
                            '{password}',
                            '{hostport}',
                        ], $config, @file_get_contents(app()->getRootPath() . '.env.example'));
                        if (!@file_put_contents(app()->getRootPath() . '.env', $env)) {
                            throw new \Exception('配置文件写入失败');
                        }

                        $db = Db::connect(array_merge(\config('database.'), $config));
                        unset($data['password_confirm']);
                        $db->name('users')->insert($data);

                        // 创建安装锁文件
                        if (!@fopen(app()->getAppPath() . 'install.lock', 'w')) {
                            throw new \Exception('安装锁文件创建失败');
                        }
                    } catch (Exception $e) {
                        @unlink(app()->getAppPath() . 'install.lock');
                        $this->error($e->getMessage());
                    } catch (\Exception $e) {
                        @unlink(app()->getAppPath() . 'install.lock');
                        $this->error($e->getMessage());
                    } catch (\PDOException $e) {
                        @unlink(app()->getAppPath() . 'install.lock');
                        $this->error($e->getMessage());
                    }
                    Session::flash('install_success', true);
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
