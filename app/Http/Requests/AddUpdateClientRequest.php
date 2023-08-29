<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUpdateClientRequest extends FormRequest
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
            'client.designation'=>'required',
            'client.logo'=>'nullable|image|max:2048',
            'client.contact'=>'required|max:13|min:13',
            'client.email'=>'required|email',
        ];
    }
}
