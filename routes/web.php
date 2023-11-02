<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index');
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware'=>['auth','role:admin'],
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
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware'=>['auth'],
    'prefix' => 'HOTEL',
], function(){
    Route::get('Home', function () {
    return view('home');
    });
    Route::resources([
        'client'=>ClientController::class,
        'commentaire'=>CommentaireController::class,
    ]);
    Route::get('/account', function () {
        return view('auth.account');
    });
    Route::get('/paiement', function () {
        return view('components.paiement');
    });
});
