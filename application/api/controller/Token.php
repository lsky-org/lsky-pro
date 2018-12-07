<?php

namespace app\api\controller;

use app\common\model\Users;
use think\Exception;

class Token extends Base
{
    public function initialize()
    {
    }

    /**
     * @param null $email 邮箱
     * @param null $password 密码
     * @param bool $refresh 是否刷新token
     */
    public function index($email = null, $password = null, $refresh = false)
    {
        try {
            if (!$user = Users::get(['email' => $email])) {
                throw new Exception('账号不存在');
            }
            if ($user->password != md5($password)) {
                throw new Exception('账号密码错误');
            }
            if ('true' == $refresh) {
                $token = make_token();
                $user->token = $token;
                if (!$user->save()) {
                    throw new Exception('Token刷新失败');
                }
            }
        } catch (Exception $e) {
            return $this->response($e->getMessage(), null, 500);
        }
        return $this->response('success', ['token' => $user->token]);
    }
}
