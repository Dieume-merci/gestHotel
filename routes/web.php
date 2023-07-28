<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'WICOM',
], function(){
    Route::resources([
        'Agents'=>AgentController::class,
        'Clients'=>ClientController::class,
        'Entreprises'=>EntrepriseController::class,
        'Reserces'=>ReserveController::class,
        'Categories'=>CategorieController::class,
        'Configurations'=>ConfigurationController::class,
        'Domaines'=>DomaineController::class,
        'Dotations'=>DotationController::class,
        'Users'=>UserController::class,
    ]);
});
