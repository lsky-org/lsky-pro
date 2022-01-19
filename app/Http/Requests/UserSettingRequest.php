<?php

namespace App\Http\Requests;

use App\Http\Api;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserSettingRequest extends FormRequest
{
    use Api;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|between:2,20',
            'password' => 'nullable|between:6,32',
            'configs' => 'array',
            'configs.default_album' => 'required|numeric',
            'configs.default_strategy' => 'required|numeric',
            'configs.default_permission' => 'required|in:1,0',
            'configs.is_auto_clear_preview' => 'nullable|boolean'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '昵称不能为空',
            'name.between' => '昵称必须在 2-20 个字符之间',
            'password.between' => '昵称必须在 6-32 个字符之间',
            'configs.array' => '配置值不正确',
            'configs.default_album.required' => '默认相册选择错误',
            'configs.default_album.numeric' => '默认相册选择错误',
            'configs.default_strategy.required' => '默认策略选择错误',
            'configs.default_strategy.numeric' => '默认策略选择错误',
            'configs.default_permission.required' => '权限值选择错误',
            'configs.default_permission.in' => '权限值不正确',
            'configs.is_auto_clear_preview.boolean' => '是否自动清除预览选择错误'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException($this->error($validator->errors()->first())));
    }
}
