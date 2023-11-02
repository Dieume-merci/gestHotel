<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Controllers\Users;
use App\Http\Requests\updateUserRequest;
use App\Http\Requests\updateUserPictureRequest;

class Account extends Component
{
    use WithFileUploads;
    public User $users;
    public $photo;
    protected function rules(){
        if ($this->photo) {
            return updateUserPictureRequest::rules();
        }else{
            return updateUserRequest::rules();
        }
    }
    protected function updated($field){
        $this->validateOnly($field);
        if ($this->photo) {
            $this->storefile();
        }
    }
    public function store(){
        sleep(2);
        $this->validate();
        Users::update($this->users);
        $this->dispatchBrowserEvent("success",['message'=>"Mise à Jour Est bien Faite"]);
        sleep(3);
        return redirect()->to(url("HOTEL/Home"));
    }
    public function storefile(){
        sleep(2);
        $this->validate();
        Users::updatephoto($this->users);
        $this->reset("photo");
        $this->dispatchBrowserEvent("success",['message'=>"Mise à Jour de la photo Est bien Faite"]);
        sleep(3);
        return redirect()->to(url("HOTEL/Home"));
       
    }
    public function setphoto(){
        $this->photo=true;
    }
    public function render()
    {
        return view('livewire.account');
    }
}
