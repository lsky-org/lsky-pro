<?php
/**
 * User: Wisp X
 * Date: 2018/9/26
 * Time: 下午3:26
 * Link: https://github.com/wisp-x
 */

namespace app\common\validate;

use think\Validate;

class Users extends Validate
{
    protected $rule = [
        'username'          => 'require|min:3|max:15|alphaDash|unique:users',
        'nickname'          => 'max:15',
        'default_folder'    => 'max:30|chsAlphaNum',
        'email'             => 'require|email|max:50|unique:users',
        'password'          => 'require|confirm',
        'captcha'           => 'require|captcha|token',
    ];

    protected $message = [
        'username.require'          => '用户名不能为空',
        'username.max'              => '用户名字符长度超出',
        'username.unique'           => '用户名已存在，请更换',
        'nickname.max'              => '昵称字符长度超出',
        'default_folder.max'        => '默认上传文件夹名称长度超出',
        'default_folder.chsAlphaNum'=> '默认上传文件夹名称只能是汉字、字母和数字',
        'email.require'             => '邮箱不能为空',
        'email.email'               => '邮箱格式不正确',
        'email.max'                 => '邮箱字符长度超出',
        'email.unique'              => '邮箱已存在',
        'password.require'          => '密码不能为空',
        'password.confirm'          => '两次输入的密码不一致',
        'captcha.require'           => '请输入验证码',
        'captcha.captcha'           => '验证码错误',
    ];

    public function sceneEdit()
    {
        return $this->only(['nickname', 'default_folder', 'password'])->remove('password', 'require');
    }

    public function sceneAdminEdit()
    {
        return $this->only(['username', 'nickname', 'email', 'password'])->remove('password', 'require');
    }

    public function sceneInstall()
    {
        return $this->only(['username', 'email', 'password']);
    }
}
