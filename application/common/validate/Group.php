<?php
/**
 * User: Wisp X
 * Date: 2019-01-19
 * Time: 14:06
 * Link: https://github.com/wisp-x
 */

namespace app\common\validate;

use think\Validate;

class Group extends Validate
{
    protected $rule = [
        'name'          => 'require|max:30|chsAlphaNum'
    ];

    protected $message = [
        'name.require'      => '角色组名称不能为空',
        'name.max'          => '角色组名称长度最大30个字符',
        'name.chsAlphaNum'  => '角色组名称只能是汉字、字母和数字'
    ];
}
