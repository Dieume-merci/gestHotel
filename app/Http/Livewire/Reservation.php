<?php

namespace App\Http\Livewire;

use \App\Models\Espace;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use \App\Http\Requests\CommandeRequest;
use App\Http\Livewire\Controllers\Reservations;

class Reservation extends Component
{
    public $espaces;
    public $space;
    public $reservation;
    public $fin=null;
    protected function rules(){
        return CommandeRequest::rules();
    }
    protected function updated($field){
        $heure = (!empty($this->reservation['heure'])) ? $this->reservation['heure'] : 0 ;
        $this->reservation['montant']=round($this->space->cout * $heure,2);
        $this->fin=(!empty($this->reservation['date_reservee']) && !empty($this->reservation['heure'])) ? Carbon::parse($this->reservation['date_reservee'])->addHours($this->reservation['heure'])->format('D d/m/y à H:i') : 'The Last Date is not Defined';
        $this->validateOnly($field);
    }
    public function setreservation(Espace $id)
    {
        if (boolval(Auth::user())){
            $this->space=$id;
            $this->reset("reservation");
            $this->dispatchBrowserEvent("openModal",['modal'=>'openModalReservation']);
        } else {
            $this->dispatchBrowserEvent("erreur",['message'=>"Connecter-Vous ou créer Un Compte Basile"]);
        }
    }
    public function store()
    {
        sleep(2);
        $this->validate();
        $this->reservation['espace_id']=$this->space->id;
        Reservations::store($this->reservation);
        return redirect()->to(url("HOTEL/paiement"));
    }
    public function render()
    {
        $this->espaces=Espace::all();
        return view('livewire.reservation');
    }
}