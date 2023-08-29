<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Contrat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Contrats extends Component
{
    public  static function store($datas){
        $datas=array_merge($datas,[
            // 'user_id'=>Auth::user()->id,
            'entreprise_id'=>Auth::user()->Entreprises->id
        ]);
        $datas['close']='/storage/files/company/closes/'.basename($datas['close']->store('/files/company/closes/','public'));
        Contrat::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Contrat::destroy($datas);
     }
}
