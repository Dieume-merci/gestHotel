<?php

namespace App\Rules;
use \App\Models\Reservation;
use Illuminate\Support\Carbon;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DetecterReservation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        dd('reservation.montant');
        // $date_fin=Carbon::parse($date_debut)->addHours($heure);
        // $permission=Reservation::findOrFail(1)->whereBetween('date_reservee',[$date_debut,$date_fin]);
        // if(!$permission){
        //     fail("Erreur Cet Espace est deja Reservé pour cette date");
        // }
    }
}
