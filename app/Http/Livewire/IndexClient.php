<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Controllers\Clients;
use App\Models\Client;
use Livewire\Component;

class IndexClient extends Component
{
    public $client;
    public $role="Modifier ";
    protected $listeners=[
        'client'=> 'onclientUpdate',
        'clientView'=> 'onclientView',
    ];
    protected function rules(){
        // if ($this->role=="Modifier " || $this->role=="Enregistrer " ) {
        //     return clientRequestUpdate::rules();
        // }else{
        //     return AddUpdateConventionRequestion::rules();
        // }        
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function create(){
        $this->client=null;
        $this->role="Enregistrer ";
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);    
    }
    public function updateOrCreate(){
        sleep(2);
        $this->validate();
        switch ($this->role) {
            case "Modifier ":
                Clients::update($this->client);
                // $this->dispatchBrowserEvent("success",['message'=>"La mise à jour Effectuée avec success",'modal'=>'openModal']);
                break;
            case "Enregistrer":
                clients::store($this->client);
                // $this->dispatchBrowserEvent("success",['message'=>"Enregistrement Effectué avec success",'modal'=>'openModal']);
                break;
        }
    }
    public function onclientUpdate(Client $client){
        $this->client=$client;
        dd($this->client);
        $this->reset('role');
        // $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);
    }
    public function onclientView(Client $client){
        $this->client=$client;
        
        dd($this->client);
        // switch ($this->convention) {
        //     case '':
        //         $this->role="Completer ";
        //         break;
        //     default:
        //         $this->role="Modifier. ";
        //         break;
        // }
        // $this->dispatchBrowserEvent('openModal',['modal'=>'openModalView']);
    }
    public function render()
    {
        return view('livewire.index-client');
    }
}
