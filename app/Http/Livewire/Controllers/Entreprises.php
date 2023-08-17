<?php

namespace App\Http\Livewire\Controllers;

use Livewire\Component;
use App\Models\Entreprise;

class Entreprises extends Component
{
    public  static function store($datas){
        Entreprise::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Entreprise::destroy($datas);
     }
}
