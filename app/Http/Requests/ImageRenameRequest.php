<?php

namespace App\Http\Requests;

class ImageRenameRequest extends FormRequest
{
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
            'id' => 'required|numeric',
            'name' => 'required|max:50|string',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => '请选择一张图片',
            'id.numeric' => '图片选择异常',
            'name.required' => '请输入名称',
            'name.max' => '名称长度不能超过 50 个字符',
            'name.string' => '名称格式不正确',
        ];
    }
}
