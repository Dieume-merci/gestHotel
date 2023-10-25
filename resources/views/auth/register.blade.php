@extends('layouts.partial-layouts')

@section('contenu')
<div class="row">
  <div class="col-7">
    <img src="royal/img/slider/header-slider-2.jpg" width="100%" height="100%" alt="">
  </div>
  <div class="col-lg-5 bg-success">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper " style="background-color: #ddd;;">
          <div class="row w-100 mx-0">
            <div class="col-lg-12 mx-auto">
              <div class="auth-form-light text-left py-5 px-sm-5">
                <div class="brand-logo">
                  {{-- <img src="../../images/logo.svg" alt="logo"> --}}
                </div>
                <h4>Register Famille Lodge</h4>
                <h6 class="font-weight-light">Creation d'un Compte</h6>
                <form class="pt-3" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <span>{{__("Nom")}}</span>
                    <input type="text" class="form-control @error('name') is-invalid @enderror form-control" name="name" value="{{ old('name') }}" autocomplete="nom" autofocus placeholder="Nom">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <span>{{__("Postnom")}}</span>
                    <input type="text" class="form-control @error('postnom') is-invalid @enderror form-control" name="postnom" value="{{ old('postnom') }}" autocomplete="postnom" autofocus placeholder="PostNom">
                    @error('postnom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <span>{{__("Prenom")}}</span>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror form-control" name="prenom" value="{{ old('prenom') }}" autocomplete="prenom" autofocus placeholder="Prenom">
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <span>{{__("Email")}}</span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <span>{{__("Password")}}</span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <span>{{__("Password_repeat")}}</span>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="current-password_confirmation" placeholder="password_confirmation">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary font-weight-medium auth-form-btn">
                      {{ __("S'ENREGISTRER") }}
                    </button>
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
    