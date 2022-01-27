<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;
use Illuminate\Validation\Rule;

class StrategyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'groups' => 'array',
            'name' => 'required|max:60',
            'intro' => 'max:2000',
            'key' => 'required|integer',
            'configs.root' => 'max:1000',
            'configs.domain' => 'required|url',

            'configs.symlink' => 'required_if:key,1',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名称',
            'intro' => '简介',
            'key' => '策略',
            'configs.root' => '储存路径',
            'configs.domain' => '访问域名',

            'configs.symlink' => '符号链接'
        ];
    }

    public function messages()
    {
        return [
            'configs.symlink.required_if' => '请输入符号链接',
        ];
    }
}
