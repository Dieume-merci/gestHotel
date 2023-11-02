<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Commentaire;
use App\Http\Requests\AddCommentaireRequest;
use App\Http\Livewire\Controllers\Commentaires;

class IndexCommentaire extends Component
{
    public $commentaire;
    protected function rules(){
        return AddCommentaireRequest::rules();      
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function create(){
        sleep(2);
        $this->validate();
        Commentaires::store($this->commentaire);
        $this->dispatchBrowserEvent("success",['message'=>"Un Nouveau Commentaire est ajouté avec success",'modal'=>'openModalcommentaire']);  
    }
    
    public function render()
    {
        return view('livewire.index-commentaire');
    }
}
