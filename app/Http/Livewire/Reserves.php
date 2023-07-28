<?php

namespace App\Http\Livewire;

use App\Models\Reserve;
use Livewire\Component;

class Reserves extends Component
{
    public  static function store($datas){
        Reserve::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Reserve::destroy($datas);
     }
}
