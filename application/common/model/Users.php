<?php
/**
 * User: Wisp X
 * Date: 2018/9/25
 * Time: 下午3:20
 * Link: https://github.com/wisp-x
 */

namespace app\common\model;

use think\Exception;
use think\facade\Session;
use think\Model;
use think\model\concern\SoftDelete;

class Users extends Model
{
    use SoftDelete;

    protected $insert = ['reg_ip', 'quota'];

    public function setPassWordAttr($password)
    {
        return md5($password);
    }

    public function setRegIpAttr()
    {
        return request()->ip();
    }

    public function setQuotaAttr()
    {
        return Config::where('name', 'user_initial_quota')->value('value');
    }

    public function getUseQuotaAttr()
    {
        return $this->hasMany('Images', 'user_id', 'id')->sum('size');
    }

    public static function login($account, $password)
    {
        $field = 'email';

        if (!$account) {
            throw new Exception('请输入账号');
        }

        if (!$password) {
            throw new Exception('请输入密码');
        }

        if ($user = self::get([$field => $account])) {
            if (0 === $user->state) {
                throw new Exception('你的账户已被冻结，请联系管理员！');
            }
            if ($user->password !== md5($password)) {
                throw new Exception('密码不正确');
            }
            $token = make_token();
            Session::set('uid', $user->id);
            Session::set('token', $token);
            $user->token = $token;
            $user->save();
        } else {
            throw new Exception('用户不存在');
        }
    }

    public function images()
    {
        return $this->hasMany('Images', 'user_id', 'id');
    }
}