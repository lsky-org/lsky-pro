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
        'parent_id.require' => '{%Parent folder not found}',
        'parent_id.number'  => '{%Parent folder exception}',
        'parent_id.integer' => '{%Parent folder exception}',
        'name.require'      => '{%Folder name cannot be empty}',
        'name.max'          => '{%Folder name length max. 30 characters}',
        'name.chsAlphaNum'  => '{%Folder names can only be Chinese characters, letters and numbers}'
    ];
}
