<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware'=>'App\Http\Middleware\Authenticate',
    'prefix' => 'HOTEL',

], function(){
    Route::get('Home', function () {
    return view('home');
    });
    Route::resources([
        'type'=>TypeController::class,
        'client'=>ClientController::class,
        'entreprise'=>EntrepriseController::class,
        'commentaire'=>CommentaireController::class,
        'espace'=>EspaceController::class,
        'user'=>UserController::class,
    ]);
});
