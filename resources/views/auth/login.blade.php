@extends('layouts.partial-layouts')

@section('contenu')
<div class="row">
  <div class="col-7">
    <img src="royal/img/slider/header-slider-2.jpg" width="100%" height="100%" alt="">
  </div>
  <div class="col-lg-5 bg-success">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0 " style="background-color: #cccc;">
          <div class="row w-100 mx-0">
            <div class="col-lg-12 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  {{-- <img src="../../images/logo.svg" alt="logo"> --}}
                </div>
                <h4>Hôtel Basile Lodge</h4>
                <h6 class="font-weight-light">Connecter Pour Continuer</h6>
                <form class="pt-3" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      {{ __('CONNEXION') }}
                    </button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Rester Connecté') }}
                      </label>
                    </div>
                    <a href="#" class="auth-link text-black"> 
                      {{-- {{ __('Mot de passe oublié?') }} --}}
                    </a>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    {{ __("Vous n'avez pas Un compte?") }}
                     <a href="{{ route("register")}}" class="text-primary">
                      {{ __("Créer") }}
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    @endsection
    