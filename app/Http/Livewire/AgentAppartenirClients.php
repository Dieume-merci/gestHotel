<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AgentAppartenirClient;

class AgentAppartenirClients extends Component
{
    public  static function store($datas){
        AgentAppartenirClient::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        AgentAppartenirClient::destroy($datas);
     }
}
