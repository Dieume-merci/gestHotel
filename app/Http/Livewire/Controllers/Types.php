<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Type;
use Livewire\Component;

class Types extends Component
{
    public  static function store($datas){
        Type::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Type::destroy($datas);
     }
}
