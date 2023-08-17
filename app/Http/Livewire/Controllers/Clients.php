<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Client;
use Livewire\Component;

class Clients extends Component
{
    public  static function store($datas){
        Client::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Client::destroy($datas);
     }
}
