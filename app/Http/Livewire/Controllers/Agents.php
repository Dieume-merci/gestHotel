<?php

namespace App\Http\Livewire\Controllers;

use App\Models\Agent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Agents extends Component
{
    public static function store($datas){
        $datas=array_merge($datas,[
            // 'user_id'=>Auth::user()->id,
            'entreprise_id'=>Auth::user()->Entreprises->id
        ]);
        Agent::firstOrCreate($datas);
    }
    public  static function update($datas){
        $datas->save();
     }
     public  static function destroy($datas){
        Agent::destroy($datas);
     }
}
