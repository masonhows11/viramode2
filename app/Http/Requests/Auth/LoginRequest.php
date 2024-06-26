<?php

namespace App\Http\Requests\Auth;


use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required','email','min:3','max:125','exists:users'],
            'password' => ['required','string','min:3','max:125'],
        ];
    //        return [
    //            'auth_id' => ['required','min:11','max:64','regex:/^[a-zA-Z0-9_.@+]*$/i'],
    //            'password' => ['required','min:6','max:30','string']
    //        ];
    }
    public function attributes()
    {
        return [
//          'auth_id' => 'ایمیل یا شماره موبایل',
            'auth_id' => 'ایمیل',
        ];
    }

}
