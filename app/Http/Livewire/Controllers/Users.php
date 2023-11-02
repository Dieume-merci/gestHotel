<?php

namespace App\Http\Livewire\Controllers;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public  static function store($datas){
        User::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function updatephoto($datas){
        $datas['image']='/storage/files/'.basename($datas['image']->store('/files/','public'));
        $datas->save();
     }
     public  static function destroy($datas){
        User::destroy($datas);
     }
}
