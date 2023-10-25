<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEspaceRequest extends FormRequest
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
            'espace.designation'=>'required|max:30|min:5',
            'espace.cout'=>'required|int',
            'espace.image'=>'file|max:5120',
            'espace.type_id'=>'required|int',
            'espace.description'=>'required',
        ];
    }
}
