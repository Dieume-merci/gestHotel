<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Convention;
use Livewire\Component;

class Conventions extends Component
{
    public  static function store($datas){
        Convention::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Convention::destroy($datas);
     }
}
