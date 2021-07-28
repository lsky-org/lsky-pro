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
    public function login($account = null, $password = null)
    {
        if ($this->request->isPost()) {
            try {
                Users::login($account, $password, filter_var($account, FILTER_VALIDATE_EMAIL) ? 'email' : 'username');
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
                    throw new Exception(lang('Site registration closed'));
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
            Session::flash('success', lang('Registration successful'));
            $this->redirect(url('auth/login'));
        }

        if ($this->getConfig('close_register')) {
            abort(404, lang('Site registration closed'));
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
                    'password|'.lang('Password') => 'require|confirm',
                ]);
                if (true !== $validate) {
                    $this->error($validate);
                }
                if ($data['code'] != Session::get('code', 'forgot_')) {
                    throw new Exception(lang('Incorrect verification code'));
                }
                if (!$user = Users::get(['email' => Session::get('email', 'forgot_')])) {
                    throw new Exception(lang('User does not exist'));
                }
                $user->password = $data['password'];
                $user->save();
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $delSession();
            $this->success(lang('Reset successful'));
        }
        $delSession();
        return $this->fetch();
    }

    public function sendCode()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $validate = $this->validate($data, [
                'email|'.lang('Mailbox') => 'require|email',
                'captcha|'.lang('Verification Code') => 'require|captcha'
            ]);
            if (true !== $validate) {
                $this->error($validate);
            }

            if (!$user = Users::get(['email' => $data['email']])) {
                $this->error(lang('Account does not exist'));
            }

            $code = generate_code();
            $err = $this->sendMail(
                $data['email'],
                lang('Retrieve password'),
                lang('Retrieve password mail content', [$user->username, $code])
            );

            if (true !== $err) {
                $this->error($err);
            }

            Session::set('code', $code, 'forgot_');
            Session::set('email', $data['email'], 'forgot_');
            $this->success(lang('Sent successfully'));
        }
    }
}
