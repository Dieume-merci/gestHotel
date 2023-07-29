<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AgentAffecterContrat;

class AgentAffecterContrats extends Component
{
    public  static function store($datas){
        AgentAffecterContrat::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        AgentAffecterContrat::destroy($datas);
     }
}
