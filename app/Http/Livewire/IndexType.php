<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Requests\AddTypeRequest;
use App\Http\Livewire\Controllers\Types;
use App\Models\Type;
class IndexType extends Component
{
    public $type;
    protected $listeners=[
        'editType'=> 'editType',
        'destroytype'=> 'destroyType',
    ];
    protected function rules(){
           return AddTypeRequest::rules();
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function Create(){
        sleep(2);
        $this->validate();
        Types::store($this->type);
        $this->dispatchBrowserEvent("success",['message'=>"Enregistrement Effectué avec success",'modal'=>'openModal']);
        $this->reset("type");
    }
    public function destroyType(Type $type){
        if(!count($type->Espaces)){
            Types::destroy($type->id);
            $this->dispatchBrowserEvent("success",['message'=>"Suppression Bien Faite"]);
        }else{
            $this->dispatchBrowserEvent("erreur",['message'=>"Impossible, Il ya Un Espace Qui est Affecté à ce Type"]);
        }
    }
    public function edit(){
            Types::update($this->type);
            $this->dispatchBrowserEvent("success",['message'=>"Suppression Bien Faite",'modal'=>'modifier-type']);
            $this->reset("type");
    }
    public function editType(Type $type)
    {
        $this->type=$type;
        $this->dispatchBrowserEvent('openModal',['modal'=>'modifier-type']);
    }
    public function render()
    {
        return view('livewire.index-type');
    }
}
