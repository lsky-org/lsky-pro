<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;
use Illuminate\Validation\Rules;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|between:2,30',
            'capacity' => 'required|numeric',
            'password' => ['nullable', Rules\Password::defaults()],
            'status' => 'in:1,0'
        ];
    }

    public function attributes()
    {
        return [
            'name' => '组名称',
            'capacity' => '总容量',
            'password' => '密码',
            'status' => '状态',
        ];
    }
}
