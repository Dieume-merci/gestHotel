<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Espace;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Espaces extends Component
{
    public  static function store($datas){
        $datas=array_merge($datas,[
            'user_id'=>Auth::user()->id,
        ]);
        if (array_key_exists('image',$datas)) {
            $datas['image']='/storage/files/'.basename($datas['image']->store('/files/','public'));
        }
        Espace::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Espace::destroy($datas);
     }
}
