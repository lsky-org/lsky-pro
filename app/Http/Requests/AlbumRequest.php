<?php

namespace App\Http\Requests;

use App\Http\Api;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AlbumRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException($this->error($validator->errors()->first())));
    }
}
