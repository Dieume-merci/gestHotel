<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddContratRequest extends FormRequest
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
            'contrat.client_id'=>'required|integer',
            'contrat.close'=>'required|max:4069|file|mimes:pdf',
            'contrat.cout'=>'required|numeric',
            'contrat.cout'=>'required|max:30',
            'contrat.date_debut'=>'required|date|',
            'contrat.date_fin'=>'required|date|after:contrat.date_debut',
        ];
    }
}
