<?php

namespace App\Http\Livewire\Controllers;

use Livewire\Component;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class Commentaires extends Component
{
    public  static function store($datas){
        // dd(Auth::user()->Client->id);
        if (empty(Auth::user()->Client->id)) {
           $client=clients::store([
                'user_id'=>Auth::user()->id
            ]);
        }
        $id_client = (empty(Auth::user()->Client->id)) ? $client->id : Auth::user()->Client->id ;
        $datas=array_merge($datas,[
            'client_id'=> $id_client,
        ]);

        Commentaire::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Commentaire::destroy($datas);
     }
}
