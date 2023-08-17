<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequestUpdate extends FormRequest
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
            'agent.nom'=>'required|max:16|min:3',
            'agent.postnom'=>'required|max:16|min:3',
            'agent.prenom'=>'required|max:16|min:3',
            'agent.civilite'=>'required',
            'agent.fonction'=>'required|max:30|min:5',
            'agent.domaine_id'=>'required|int',
            'agent.email'=>'required|max:40|email',
            'agent.contact'=>'required|max:13|min:13',
        ];
    }
}
