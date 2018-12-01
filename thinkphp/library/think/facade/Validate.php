<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\facade;

use think\Facade;

/**
 * @see \think\Validate
 * @mixin \think\Validate
 * @method \think\Validate make(array $rules = [], array $message = [], array $field = []) static 创建一个验证器类
 * @method \think\Validate rule(mixed $name, mixed $rule = '') static 添加字段验证规则
 * @method void extend(string $type, mixed $callback = null) static 注册扩展验证（类型）规则
 * @method void setTypeMsg(mixed $type, string $msg = null) static 设置验证规则的默认提示信息
 * @method \think\Validate message(mixed $name, string $message = '') static 设置提示信息
 * @method \think\Validate scene(string $name) static 设置验证场景
 * @method bool hasScene(string $name) static 判断是否存在某个验证场景
 * @method \think\Validate batch(bool $batch = true) static 设置批量验证
 * @method \think\Validate only(array $fields) static 指定需要验证的字段列表
 * @method \think\Validate remove(mixed $field, mixed $rule = true) static 移除某个字段的验证规则
 * @method \think\Validate append(mixed $field, mixed $rule = null) static 追加某个字段的验证规则
 * @method bool confirm(mixed $value, mixed $rule, array $data = [], string $field = '') static 验证是否和某个字段的值一致
 * @method bool different(mixed $value, mixed $rule, array $data = []) static 验证是否和某个字段的值是否不同
 * @method bool egt(mixed $value, mixed $rule, array $data = []) static 验证是否大于等于某个值
 * @method bool gt(mixed $value, mixed $rule, array $data = []) static 验证是否大于某个值
 * @method bool elt(mixed $value, mixed $rule, array $data = []) static 验证是否小于等于某个值
 * @method bool lt(mixed $value, mixed $rule, array $data = []) static 验证是否小于某个值
 * @method bool eq(mixed $value, mixed $rule) static 验证是否等于某个值
 * @method bool must(mixed $value, mixed $rule) static 必须验证
 * @method bool is(mixed $value, mixed $rule, array $data = []) static 验证字段值是否为有效格式
 * @method bool ip(mixed $value, mixed $rule) static 验证是否有效IP
 * @method bool requireIf(mixed $value, mixed $rule) static 验证某个字段等于某个值的时候必须
 * @method bool requireCallback(mixed $value, mixed $rule,array $data) static 通过回调方法验证某个字段是否必须
 * @method bool requireWith(mixed $value, mixed $rule, array $data) static 验证某个字段有值的情况下必须
 * @method bool filter(mixed $value, mixed $rule) static 使用filter_var方式验证
 * @method bool in(mixed $value, mixed $rule) static 验证是否在范围内
 * @method bool notIn(mixed $value, mixed $rule) static 验证是否不在范围内
 * @method bool between(mixed $value, mixed $rule) static between验证数据
 * @method bool notBetween(mixed $value, mixed $rule) static 使用notbetween验证数据
 * @method bool length(mixed $value, mixed $rule) static 验证数据长度
 * @method bool max(mixed $value, mixed $rule) static 验证数据最大长度
 * @method bool min(mixed $value, mixed $rule) static 验证数据最小长度
 * @method bool after(mixed $value, mixed $rule) static 验证日期
 * @method bool before(mixed $value, mixed $rule) static 验证日期
 * @method bool expire(mixed $value, mixed $rule) static 验证有效期
 * @method bool allowIp(mixed $value, mixed $rule) static 验证IP许可
 * @method bool denyIp(mixed $value, mixed $rule) static 验证IP禁用
 * @method bool regex(mixed $value, mixed $rule) static 使用正则验证数据
 * @method bool token(mixed $value, mixed $rule) static 验证表单令牌
 * @method bool dateFormat(mixed $value, mixed $rule) static 验证时间和日期是否符合指定格式
 * @method bool unique(mixed $value, mixed $rule, array $data = [], string $field = '') static 验证是否唯一
 * @method bool check(array $data, mixed $rules = [], string $scene = '') static 数据自动验证
 * @method mixed getError(mixed $value, mixed $rule) static 获取错误信息
 */
class Validate extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'validate';
    }

}
