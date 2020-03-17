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
use app\common\traits\Core;
use PHPMailer\PHPMailer\PHPMailer;
use think\Controller;
use think\Exception;
use think\facade\Config;
use think\facade\Session;
use think\facade\Env;

class Base extends Controller
{
    use Core;

    protected $user;

    protected function initialize()
    {
        parent::initialize();

        $this->user = request()->user;

        $this->assign([
            'config'    => $this->getConfig(),
            'user'      => $this->user,
            'uri'       => strtolower($this->request->controller() . '/' . $this->request->action())
        ]);
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
            $this->error($e->getMessage());
        }

        return true;
    }
}
