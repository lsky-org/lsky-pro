<?php

namespace app\api\controller;

use app\common\model\Users;
use think\Exception;

class Token extends Base
{
    /**
     * @param null $email 邮箱
     * @param null $password 密码
     * @param bool $refresh 是否刷新token
     */
    public function index($email = null, $password = null, $refresh = false)
    {
        $user = null;
        try {
            if (!$user = Users::get(['email' => $email])) {
                throw new Exception(lang('Account does not exist'));
            }
            if ($user->password != md5($password)) {
                throw new Exception(lang('Account password error'));
            }
            if ('true' == $refresh) {
                $token = make_token();
                $user->token = $token;
                if (!$user->save()) {
                    throw new Exception(lang('Token refresh failed'));
                }
            }
        } catch (Exception $e) {
            $this->response($e->getMessage(), null, 500);
        }
        $this->response('success', ['token' => $user->token]);
    }
}
