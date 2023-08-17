<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware'=>'App\Http\middleware\Authenticate',
    'prefix' => 'WICOM',

], function(){
    Route::get('Home', function () {
    return view('home');
    });
    Route::resources([
        'agent'=>AgentController::class,
        'client'=>ClientController::class,
        'entreprise'=>EntrepriseController::class,
        'reserve'=>ReserveController::class,
        'categorie'=>CategorieController::class,
        'domaine'=>DomaineController::class,
        'dotation'=>DotationController::class,
        'user'=>UserController::class,
    ]);
});
