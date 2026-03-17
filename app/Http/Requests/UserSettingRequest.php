<?php

namespace App\Http\Requests;

class UserSettingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|between:2,20',
            'url' => 'nullable|url',
            'password' => 'nullable|between:6,32',
            'configs' => 'array',
            'configs.default_album' => 'required|numeric',
            'configs.default_strategy' => 'required|numeric',
            'configs.default_permission' => 'required|in:1,0',
            'configs.pasted_action' => 'required|in:1,2',
            'configs.is_auto_clear_preview' => 'nullable|boolean'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '昵称不能为空',
            'name.between' => '昵称必须在 2-20 个字符之间',
            'url.url' => '个人主页地址格式不正确',
            'password.between' => '密码必须在 6-32 个字符之间',
            'configs.array' => '配置值不正确',
            'configs.default_album.required' => '默认相册选择错误',
            'configs.default_album.numeric' => '默认相册选择错误',
            'configs.default_strategy.required' => '默认策略选择错误',
            'configs.default_strategy.numeric' => '默认策略选择错误',
            'configs.default_permission.required' => '权限值选择错误',
            'configs.default_permission.in' => '权限值不正确',
            'configs.pasted_action.required' => '粘贴动作值选择错误',
            'configs.pasted_action.in' => '粘贴动作值不正确',
            'configs.is_auto_clear_preview.boolean' => '是否自动清除预览选择错误'
        ];
    }
}
