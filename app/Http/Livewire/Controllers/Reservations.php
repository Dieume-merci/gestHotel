<?php

namespace App\Http\Livewire\Controllers;

use Livewire\Component;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class Reservations extends Component
{
    public  static function store($datas){
        if (empty(Auth::user()->Client->id)) {
            $client=clients::store([
                 'user_id'=>Auth::user()->id
             ]);
         }
         $id_client = (empty(Auth::user()->Client->id)) ? $client->id : Auth::user()->Client->id ;
         $datas=array_merge($datas,[
             'client_id'=> $id_client,
         ]);

        return Reservation::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Reservation::destroy($datas);
     }
}
