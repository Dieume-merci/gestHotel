<?php

namespace App\Http\Livewire\Home;

use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IndexClient extends Component
{
    use WithPagination;
    private $table=[];
    public $methode;
    public int $editId=0;
    public array $selection = [];
    protected $listeners=[
        'UpdateScript'=> 'onUpdateScript',
    ];

    public function rules(){
        // return addMethodeRequest::rules();
    }
    public function updated($field){
        // $this->validateOnly($field);
    }
    public function update(){
        // sleep(3);
        // $this->validate();
        // try {
        //     Clients::update($this->methode);
        //     $this->emit('UpdateScript');
        //     $this->dispatchBrowserEvent('success',['message'=>'Mise à jour Faite avec success']);
        // } catch (\Throwable $th) {
        //     $this->dispatchBrowserEvent('erreur');
        // }
    }
    public function destroy(array $ids){
        // 
    }
    public function store(){
        //    
    }
    public function onUpdateScript(){
        // $this->reset('methode');
        // $this->reset('editId');
        // $this->resetPage();
    }
    public function startEdit(int $id){
        // 
    }
    public function render()
    {
        return view('livewire.home.index-client',[
            'Entreprises'=>Entreprise::findOrFail(Auth::user()->Entreprises->id)
            ]);
    }
}
