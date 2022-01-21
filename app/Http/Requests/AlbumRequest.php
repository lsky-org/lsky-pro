<?php

namespace App\Http\Requests;

class AlbumRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:60',
            'intro' => 'max:600'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名称不能为空',
            'name.max' => '名称字符过长，最大不能超过 60',
            'intro.max' => '简介字符过长，最大不能超过 600'
        ];
    }
}
