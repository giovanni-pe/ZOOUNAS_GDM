<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    // Dto/validation with example implementation

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Validation rules
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            // prepare for validation
        ]);
    }

    public function messages()
    {
        return [
            // custom message of validation
        ];
    }

    public function attributes()
    {
        return [
            // custom attributes of validation
        ];
    }
}