<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Type;
use App\Models\Espace;
use App\Http\Requests\AddEspaceRequest;
use App\Http\Livewire\Controllers\Espaces;
use Livewire\WithFileUploads;

class IndexEspace extends Component
{
    use WithFileUploads;
    public $espace;
    protected $listeners=[
        'Espaceedit'=> 'Espaceedit',
        'Espacedelete'=> 'Espacedelete',
    ];
    protected function rules(){
           return AddEspaceRequest::rules();
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function Create(){
        sleep(2);
        $this->validate();
        try {
            Espaces::store($this->espace);
            $this->dispatchBrowserEvent("success",['message'=>"Enregistrement Effectué avec success",'modal'=>'openModal']);
            $this->reset("espace");
            $this->emit("refreshPowerGrid");
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent("erreur",['message'=>"Ces Données Existaient deja"]);
        }
    }
    public function Espacedelete(Espace $espace){
        if(!count($espace->Reservations)){
            espaces::destroy($espace->id);
            $this->dispatchBrowserEvent("success",['message'=>"Suppression Bien Faite"]);
            $this->reset("espace");
            $this->emit("refreshPowerGrid");
        }else{
            $this->dispatchBrowserEvent("erreur",['message'=>"Impossible, Il ya Un Espace Qui est Affecté à ce Type"]);
        }
    }
    public function edit(){
            espaces::update($this->espace);
            $this->dispatchBrowserEvent("success",['message'=>"Mise à jour Bien Faite",'modal'=>'modifier-type']);
            $this->reset('espace');
            $this->emit("refreshPowerGrid");
    }
    public function Espaceedit(Espace $espace)
    {
        $this->espace=$espace;
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);
    }
    public function quitteer()
    {
        $this->dispatchBrowserEvent('closeModal',['modal'=>'openModal']);
        $this->reset("espace");
        $this->emit("refreshPowerGrid");
    }
    public function render()
    {
        return view('livewire.index-espace',[
            'types'=>Type::all(),
        ]);
    }
}
