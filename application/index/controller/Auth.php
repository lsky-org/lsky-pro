<?php
/**
 * User: Wisp X
 * Date: 2018/9/25
 * Time: 下午3:43
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use app\common\model\Users;
use think\Exception;
use think\facade\Session;

class Auth extends Base
{
    public function login($type = null, $account = null, $password = null)
    {
        if ($this->request->isPost()) {
            try {
                Users::login($account, $password, $type);
            } catch (Exception $e) {
                Session::flash('error', $e->getMessage());
                return $this->fetch();
            }
            $this->redirect(url('/'));
        }
        return $this->fetch();
    }

    public function register()
    {
        if ($this->request->isPost()) {
            try {
                if ($this->getConfig('close_register')) {
                    throw new Exception('站点已关闭注册');
                }
                $data = $this->request->post();
                $validate = $this->validate($data, 'Users');
                if (true !== $validate) {
                    throw new Exception($validate);
                }
                Users::create($data);
            } catch (Exception $e) {
                Session::flash('error', $e->getMessage());
                return $this->fetch();
            }
            Session::flash('success', '注册成功');
            $this->redirect(url('auth/login'));
        }
        return $this->fetch();
    }

    public function forgot()
    {
        $delSession = function () {
            Session::delete('code', 'forgot_');
            Session::delete('email', 'forgot_');
        };
        if ($this->request->isPost()) {
            try {
                $data = $this->request->post();
                $validate = $this->validate($data, [
                    'password|密码' => 'require|confirm',
                ]);
                if (true !== $validate) {
                    $this->error($validate);
                }
                if ($data['code'] != Session::get('code', 'forgot_')) {
                    throw new Exception('验证码不正确');
                }
                if (!$user = Users::get(['email' => Session::get('email', 'forgot_')])) {
                    throw new Exception('用户不存在');
                }
                $user->password = $data['password'];
                $user->save();
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $delSession();
            $this->success('重置成功');
        }
        $delSession();
        return $this->fetch();
    }

    public function sendCode()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $validate = $this->validate($data, [
                'email|邮箱' => 'require|email',
                'captcha|验证码' => 'require|captcha'
            ]);
            if (true !== $validate) {
                $this->error($validate);
            }

            if (!$user = Users::get(['email' => $data['email']])) {
                $this->error('账号不存在');
            }

            $code = generate_code();
            $err = $this->sendMail($data['email'], '找回密码', "尊敬的 {$user->username}， 您好，您正在申请重置密码操作，本次的验证码是 <b>{$code}</b>，如果不是您本人操作请忽略！");

            if (true !== $err) {
                $this->error($err);
            }

            Session::set('code', $code, 'forgot_');
            Session::set('email', $data['email'], 'forgot_');
            $this->success('发送成功');
        }
    }
}
