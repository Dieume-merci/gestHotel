<div class="auth-form-light text-left py-5 px-sm-5">
    <div class="text-right">
      <div class="sidebar-profile-image">
        <form wire:submit.prevent="storefile" enctype="multipart/form-data">
          @csrf
          <label for="photo">
          <img wire:click="setphoto" src="{{asset(Auth::user()->image)}}" width="50" alt="image"><br>
          </label>
          <input type="file" wire:model="users.image" class="d-none" id="photo">
        </form>
        @error('users.image')
            <span class="text-danger" role="alert">
                <i>{{ $message }}</i>
            </span>
        @enderror
        <span class="sidebar-status-indicator">Changer la Photo</span>
      </div>
    </div>
    <h4>Changer Les Information</h4>
    <h6 class="font-weight-light"></h6>
    <form class="pt-3" wire:submit.prevent="store">
      @csrf
      <!-- <input type="text" wire:model="photo.file"> -->
      <div class="form-group">
        <span>{{__("Nom")}}</span>
        <input type="text" class="form-control" wire:model="users.nom">
        @error('users.nom')
            <span class="text-danger" role="alert">
                <i>{{ $message }}</i>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <span>{{__("Postnom")}}</span>
        <input type="text" class="form-control" wire:model="users.postnom">
        @error('users.postnom')
            <span class="text-danger" role="alert">
                <i>{{ $message }}</i>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <span>{{__("Prenom")}}</span>
        <input type="text" class="form-control" wire:model="users.prenom">
        @error('users.prenom')
            <span class="text-danger" role="alert">
                <i>{{ $message }}</i>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <span>{{__("Email")}}</span>
        <input type="email" class="form-control" wire:model="users.email">
        @error('users.email')
            <span class="text-danger" role="alert">
                <i>{{ $message }}</i>
            </span>
        @enderror
      </div>
      <div class="mt-3">
        <button class="btn btn-block btn-primary font-weight-medium auth-form-btn">
          {{ __("METTRE A JOUR") }}
        </button>
      </div>
    </form>
  </div>   