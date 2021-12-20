<?php
/**
 * User: Wisp X
 * Date: 2018-12-27
 * Time: 14:30
 * Link: https://github.com/wisp-x
 */

namespace app\common\validate;

use think\Validate;

class Folders extends Validate
{
    protected $rule = [
        'parent_id'     => 'require|number|integer',
        'name'          => 'require|max:30|chsAlphaNum'
    ];

    protected $message = [
        'parent_id.require' => '没有找到上级文件夹',
        'parent_id.number'  => '上级文件夹异常',
        'parent_id.integer' => '上级文件夹异常',
        'name.require'      => '文件夹名称不能为空',
        'name.max'          => '文件夹名称长度最大30个字符',
        'name.chsAlphaNum'  => '文件夹名称只能是汉字、字母和数字'
    ];
}
