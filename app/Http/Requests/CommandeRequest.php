<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DetecterReservation;

class CommandeRequest extends FormRequest
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
            'reservation.montant'=>'required|',
            'reservation.heure'=>['required',new DetecterReservation(1)
        ],
            'reservation.date_reservee'=>'required|date|after:now',
            'reservation.email'=>'required|email',
        ];
    }
}
