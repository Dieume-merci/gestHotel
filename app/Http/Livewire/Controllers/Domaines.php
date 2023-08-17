<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Domaine;
use Livewire\Component;

class Domaines extends Component
{
    public  static function store($datas){
        Domaine::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Domaine::destroy($datas);
     }
}
