<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ValidateOtpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'otp' => ['required','numeric','digits:6'],
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'فیلد تایید الزامی است',
            'token.numeric' => 'فیلد کد تایید باید شامل عدد باشد',
        ];
    }
}
