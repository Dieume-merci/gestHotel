<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Controllers\Clients;
use App\Http\Livewire\Controllers\Contrats;
use App\Http\Requests\AddContratRequest;
use App\Http\Requests\AddUpdateClientRequest;
use App\Models\Contrat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class IndexClient extends Component
{
    use WithFileUploads;
    public $client;
    public $clients;
    public $contrat;
    public $role="Modifier ";
    public $action;
    protected $listeners=[
        'client'=> 'onclientUpdate',
        'clientView'=> 'onclientView',
    ];
    protected function rules(){
        switch ($this->action) {
            case "CreateContrat ":
               return AddContratRequest::rules();
                break;
            case "Createclient " || 'Modifier ':
                return AddUpdateClientRequest::rules();
                break;
        }
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function create(){
        $this->client=null;
        $this->role="Enregistrer ";
        $this->action="Createclient ";
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);    
    }
    public function createContrat(){
        $this->contrat=null;
        $this->role="Contrat ";
        $this->action="CreateContrat ";
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModalContrat']);    
    }
    public function updateOrCreate(){
        sleep(2);
        $this->validate();
        switch ($this->action) {
            case "Createclient ":
                clients::store($this->client);
                $this->reset('client');
                $this->dispatchBrowserEvent("success",['message'=>"Enregistrement Effectué avec success",'modal'=>'openModal']);
                break;
            case "UpdateClient ":
                clients::update($this->client);
                dd($this->client);
                $this->reset('client');
                $this->dispatchBrowserEvent("success",['message'=>"Mise à jour Bien Faite",'modal'=>'openModalContrat']);
                break;
            case "CreateContrat ":
                Contrats::store($this->contrat);
                $this->dispatchBrowserEvent("success",['message'=>"Enregistrement du contrat Effectué avec success",'modal'=>'openModalContrat']);
                break;
        }
    }
    public function onclientUpdate(Contrat $contrat){
        $this->client=$contrat->Clients;
        $this->action="UpdateClient ";
        $this->reset('role');
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);
    }
    public function onclientView(Contrat $contrat){
        $this->client=$contrat->Clients;
        $this->contrat=$contrat;
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModalView']);
    }
    public function render()
    {
        $this->clients=Auth::user()->Entreprises->Client;
        return view('livewire.index-client');
    }
}
