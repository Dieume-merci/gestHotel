<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class Categories extends Component
{
    public  static function store($datas){
        Categorie::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Categorie::destroy($datas);
     }
}
