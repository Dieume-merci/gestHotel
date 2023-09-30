<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Reservation;

class IndexClient extends Component
{
    public $reservation;
    protected $listeners=[
        'ReservationView'=> 'ReservationView',
    ];
    public function ReservationView(Reservation $reservation){
        $this->reservation=$reservation;
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModalView']);
    }
    public function render()
    {
        return view('livewire.index-client');
    }
}
