<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Clients extends Component
{
    public  static function store($datas){
        return Client::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Client::destroy($datas);
     }
}
