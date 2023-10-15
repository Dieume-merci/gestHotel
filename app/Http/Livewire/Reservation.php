<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Espace;
use \App\Http\Requests\CommandeRequest;
use Illuminate\Support\Facades\Auth;

class Reservation extends Component
{
    public $espaces;
    public $reservation;
    protected function rules(){
        return CommandeRequest::rules();
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function setreservation(Espace $id)
    {
        if (boolval(Auth::user())){
            // $this->reservation;
            $this->dispatchBrowserEvent("openModal",['modal'=>'openModalReservation']);

        } else {
            $this->dispatchBrowserEvent("erreur",['message'=>"Connecter-Vous ou créer Un Compte Basile"]);
        }
    }
    public function render()
    {
        $this->espaces=Espace::all();
        return view('livewire.reservation');
    }
}