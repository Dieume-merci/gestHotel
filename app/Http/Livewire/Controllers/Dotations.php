<?php

namespace App\Http\Livewire\Controllers;

use Livewire\Component;
use App\Models\Dotation;

class Dotations extends Component
{
    public  static function store($datas){
        Dotation::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Dotation::destroy($datas);
     }
}
