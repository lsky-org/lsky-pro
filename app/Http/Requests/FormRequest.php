<?php

namespace App\Http\Requests;

use App\Http\Result;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormRequest extends \Illuminate\Foundation\Http\FormRequest
{
    use Result;

    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException($this->fail($validator->errors()->first())));
    }
}
