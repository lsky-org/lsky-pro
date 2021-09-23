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
        'username.require'          => '{%User name cannot be empty}',
        'username.min'              => '{%The user name cannot be less than three characters}',
        'username.max'              => '{%The user name character length exceeds the limit}',
        'username.alphaDash'        => '{%User names can only be letters, numbers, and underscores_ And dash-}',
        'username.unique'           => '{%User name already exists, please replace}',
        'nickname.max'              => '{%The length of nickname characters exceeds the limit}',
        'default_folder.max'        => '{%Default upload folder name length exceeds limit}',
        'default_folder.chsAlphaNum'=> '{%The default upload folder name can only be Chinese characters, letters and numbers}',
        'email.require'             => '{%Mailbox cannot be empty}',
        'email.email'               => '{%The mailbox format is incorrect}',
        'email.max'                 => '{%Mailbox character length exceeds the limit}',
        'email.unique'              => '{%Mailbox already exists}',
        'password.require'          => '{%Password cannot be empty}',
        'password.confirm'          => '{%The passwords entered twice are inconsistent}',
        'captcha.require'           => '{%Please enter the verification code}',
        'captcha.captcha'           => '{%Verification code error}',
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
