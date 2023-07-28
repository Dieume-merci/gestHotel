<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Configuration;

class Configurations extends Component
{
    public  static function store($datas){
        Configuration::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Configuration::destroy($datas);
     }
}
