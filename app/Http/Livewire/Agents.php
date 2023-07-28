<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use Livewire\Component;

class Agents extends Component
{
    public  static function store($datas){
        Agent::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Agent::destroy($datas);
     }
}
