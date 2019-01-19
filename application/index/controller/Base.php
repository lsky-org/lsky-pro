<?php
/**
 * User: Wisp X
 * Date: 2018/9/25
 * Time: 下午2:10
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use app\common\model\Group;
use app\common\model\Users;
use PHPMailer\PHPMailer\PHPMailer;
use think\Controller;
use think\Exception;
use think\facade\Config;
use think\facade\Session;
use think\facade\Env;

class Base extends Controller
{
    protected $middleware = ['WebAuth'];

    protected $user = null;

    protected $config = null;

    protected $configs = null;

    protected $group = null;

    /**
     * 当前储存策略配置
     *
     * @var null
     */
    protected $currentStrategyConfig = null;

    protected function initialize()
    {
        parent::initialize();

        // 检测程序是否已安装
        if (!file_exists(Env::get('config_path') . 'db.php')) {
            $this->redirect(url('/install'));
        }

        $configs = \app\common\model\Config::all();
        foreach ($configs as $key => &$value) {
            $this->config[$value->name] = $value->value;
        }
        $this->configs = $configs;
        if (Session::has('uid')) {
            $this->user = Users::get(Session::get('uid'));
            if (!$this->user) {
                Session::delete('uid');
            }
        }

        // 检测数据库结构更新
        if ($this->user && $this->user->is_admin && !\config('app.app_debug')) {
            if (file_exists(Env::get('root_path') . 'update.sql')) {
                $this->redirect(url('/install/update'));
            }
        }

        // 角色组
        if ($this->user) {
            $this->group = $this->user->group;
        }
        if (!$this->group) {
            // 默认角色组
            $this->group = Group::where('default', 1)->find();
        }

        $this->currentStrategyConfig = $this->getStrategyConfig(strtolower($this->group->strategy));

        $this->assign([
            'config'    => $this->config,
            'user'      => $this->user,
            'uri'       => strtolower($this->request->controller() . '/' . $this->request->action())
        ]);
    }

    /**
     * 当前储存策略配置
     *
     * @param $strategy
     * @return array
     */
    protected function getStrategyConfig($strategy)
    {
        $strategyConfig = [];
        foreach ($this->configs as $value) {
            if ($value->key === $strategy) {
                $strategyConfig[$value->name] = $value->value;
            }
        }

        return $strategyConfig;
    }

    /**
     * 获取储存策略驱动实例
     *
     * @param null $strategy
     * @return mixed
     */
    protected function getStrategyInstance($strategy = null)
    {
        $currentStrategy = $strategy ? $strategy : strtolower($this->group->strategy);
        // 驱动
        $driver = Config::get('strategy.' . $currentStrategy . '.class');
        // 获取该储存策略配置
        $strategyConfig = $this->getStrategyConfig($currentStrategy);

        return new $driver($strategyConfig);
    }

    protected function sendMail($email, $subject, $body)
    {
        $mail = new PHPMailer();
        try {
            // $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = $this->config['mail_smtp_host'];
            $mail->CharSet = 'UTF-8';
            $mail->SMTPAuth = true;
            $mail->Username = $this->config['mail_smtp_username'];
            $mail->Password = $this->config['mail_smtp_password'];
            $mail->SMTPSecure = $this->config['mail_smtp_secure'];
            $mail->Port = $this->config['mail_smtp_port'];
            $mail->setFrom($this->config['mail_form_email'], $this->config['site_name']);
            $mail->addAddress($email);
            $mail->addReplyTo($this->config['mail_form_email'], $this->config['site_name']);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            if (!$mail->send()) {
                throw new Exception('Mailer Error: ' . $mail->ErrorInfo);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }

        return true;
    }
}
