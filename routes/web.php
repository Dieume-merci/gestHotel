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
    Route::resources([
        'Agents'=>AgentController::class,
        'Clients'=>ClientController::class,
        'Entreprises'=>EntrepriseController::class,
        'Reserves'=>ReserveController::class,
        'Categories'=>CategorieController::class,
        'Domaines'=>DomaineController::class,
        'Dotations'=>DotationController::class,
        'Users'=>UserController::class,
    ]);
});
