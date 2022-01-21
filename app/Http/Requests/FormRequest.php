<?php

namespace App\Http\Requests;

use App\Http\Api;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormRequest extends \Illuminate\Foundation\Http\FormRequest
{
    use Api;

    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException($this->error($validator->errors()->first())));
    }
}
