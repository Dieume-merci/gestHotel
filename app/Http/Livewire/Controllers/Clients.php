<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Clients extends Component
{
    public  static function store($datas){
        $datas=array_merge($datas,[
            'user_id'=>Auth::user()->id,
            'entreprise_id'=>Auth::user()->Entreprises->id
        ]);
        if (array_key_exists('logo',$datas)) {
            $datas['logo']='/storage/files/customer/images/'.basename($datas['logo']->store('/files/customer/images/','public'));
        }
        Client::firstOrCreate($datas);
    }
    public  static function update($datas){
        // if ($datas['logo']==null) {
        //     unset($datas['logo']);
        // }else{
        //     $datas['logo']='/storage/files/customer/images/'.basename($datas['logo']->store('/files/customer/images/','public'));
        // }
        // dd($datas);
        $datas->save();
     }
     public  static function destroy($datas){
        Client::destroy($datas);
     }
}
