<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public static function rules(): array
    {
        return [
            'type.designation'=>'required|max:30|min:3',
        ];
    }
}
