<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 下午4:00
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use app\common\model\Images;
use app\common\model\Users;
use think\Exception;

class Index extends Base
{
    public function index()
    {
        // 是否是单用户模式
        if (env('system.single_user_mode') && !request()->user) {
            if ($this->request->isPost()) {
                try {
                    $account = $this->request->post('account');
                    $password = $this->request->post('password');
                    $field = filter_var($account, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
                    Users::login($account, $password, $field);
                } catch (Exception $e) {
                    $this->error($e->getMessage());
                }
                $this->success('欢迎回来');
            }
            return view('index/home');
        }

        $this->assign('images_count', Images::cache(120)->count());
        return $this->fetch();
    }

    public function api()
    {
        $this->assign('domain', $this->request->domain());
        return $this->fetch();
    }
}
