<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Contrat;
use Livewire\Component;

class Contrats extends Component
{
    public  static function store($datas){
        Contrat::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Contrat::destroy($datas);
     }
}
