<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUpdateConventionRequestion extends FormRequest
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
            'convention.date_debut'=>'required|date',
            'convention.date_fin'=>'required|date|after:convention.date_debut',
            'convention.salaire'=>'required|max:3|min:2',
            // 'convention.close'=>'required|file|min:3'
        ];
    }
}
