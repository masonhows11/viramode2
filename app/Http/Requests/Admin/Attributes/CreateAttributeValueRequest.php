<?php

namespace App\Http\Requests\Admin\Attributes;

use Illuminate\Foundation\Http\FormRequest;

class CreateAttributeValueRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'value' => ['required','min:1','max:125'],
            'attribute' => ['required'],
            'priority' =>['required'],
        ];


        }
}
