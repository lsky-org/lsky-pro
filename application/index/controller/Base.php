<?php
/**
 * User: Wisp X
 * Date: 2018/9/25
 * Time: 下午2:10
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use app\common\model\Users;
use PHPMailer\PHPMailer\PHPMailer;
use think\Controller;
use think\Exception;
use think\facade\Config;
use think\facade\Session;

class Base extends Controller
{
    protected $middleware = ['auth'];

    protected $user = null;

    protected $config = null;

    protected $configs = null;

    /**
     * 当前储存策略配置
     *
     * @var null
     */
    protected $currentStrategyConfig = null;

    public function initialize()
    {
        parent::initialize();

        // 检测程序是否已安装
        if (!file_exists(\think\facade\Env::get('root_path') . 'install.lock')) {
            return $this->redirect(url('/install'));
        }

        $configs = \app\common\model\Config::all();
        foreach ($configs as $key => &$value) {
            $this->config[$value->name] = $value->value;
        }
        $this->configs = $configs;
        if (Session::has('uid') && Session::has('token')) {
            $this->user = Users::get([
                'id' => Session::get('uid'),
                'token' => Session::get('token')
            ]);
            if (!$this->user) {
                Session::delete(['uid', 'token']);
            }
        }

        $this->currentStrategyConfig = $this->getStrategyConfig(strtolower($this->config['storage_strategy']));

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
    public function getStrategyConfig($strategy)
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
    public function getStrategyInstance($strategy = null)
    {
        $currentStrategy = $strategy ? $strategy : strtolower($this->config['storage_strategy']);
        // 驱动
        $driver = Config::get('strategy.' . $currentStrategy . '.class');
        // 获取该储存策略配置
        $strategyConfig = $this->getStrategyConfig($currentStrategy);

        return new $driver($strategyConfig);
    }

    public function sendMail($email, $subject, $body)
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
            $mail->send();
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }

        return true;
    }
}