@extends('layouts.global-layouts')
@section('contenu')
  @livewire('account', ['users' => Auth::user()], key(Auth::user()->id))
    @endsection
    