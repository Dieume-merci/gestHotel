<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Controllers\Agents;
use App\Http\Livewire\Controllers\Conventions;
use App\Http\Requests\AgentRequestUpdate;
use App\Http\Requests\AddUpdateConventionRequestion;

class IndexAgent extends Component
{
    public $agent;
    public $convention;
    public $role="Modifier ";
    protected $listeners=[
        'Agent'=> 'onAgentUpdate',
        'AgentView'=> 'onAgentView',
        'rendere'=> 'render',
    ];
    protected function rules(){
        if ($this->role=="Modifier " || $this->role=="Enregistrer " ) {
            return AgentRequestUpdate::rules();
        }else{
            return AddUpdateConventionRequestion::rules();
        }        
    }
    protected function updated($field){
        $this->validateOnly($field);
    }
    public function create(){
        $this->agent=null;
        $this->role="Enregistrer ";
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);    
    }
    public function updateOrCreate(){
        sleep(2);
        $this->validate();
        switch ($this->role) {
            case "Modifier ":
                Agents::update($this->agent);
                $this->dispatchBrowserEvent("success",['message'=>"La mise à jour Effectuée avec success",'modal'=>'openModal']);
                break;
            case "Enregistrer ":
                Agents::store($this->agent);
                $this->dispatchBrowserEvent("success",['message'=>"Enregistrement Effectué avec success",'modal'=>'openModal']);
                break;
                // pour l'ajoout d'une information supplementaire lié à une convention
            case "Completer ":
                Conventions::store(array_merge(['agent_id'=>$this->agent->id],$this->convention));
                $this->dispatchBrowserEvent("success",['message'=>"Enregistrement Effectué avec success",'modal'=>'addconvention']);
                break;
            default:
                Conventions::update($this->convention);
                $this->dispatchBrowserEvent("success",['message'=>"La mise à jour Effectuée avec success",'modal'=>'addconvention']);
                break;
        }
    }
    public function onAgentUpdate(Agent $Agent){
        $this->agent=$Agent;
        $this->reset('role');
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModal']);
    }
    public function onAgentView(Agent $Agent){
        $this->agent=$Agent;
        $this->convention=$Agent->Convention;
        switch ($this->convention) {
            case '':
                $this->role="Completer ";
                break;
            default:
                $this->role="Modifier. ";
                break;
        }
        $this->dispatchBrowserEvent('openModal',['modal'=>'openModalView']);
    }
    public function render()
    {
        return view('livewire.index-agent',[
            'domaines'=> Auth::user()->Entreprises->Domaines,
        ]);
    }
}
