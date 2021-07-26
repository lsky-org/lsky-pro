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
        'name.require'      => '{%Role group name cannot be empty}',
        'name.max'          => '{%The maximum length of the role group name is 30 characters}',
        'name.chsAlphaNum'  => '{%The role group name can only be Chinese characters, letters and numbers}'
    ];
}
