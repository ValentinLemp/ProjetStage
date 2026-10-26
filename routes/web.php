<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;

//route-------------
Route::get('', [HomeController::class, 'accueil'])->name('accueil');

Route::controller(ProfilController::class)->group(function () {
    Route::get('connect','connexion')->name('profils.connect');
    Route::get('register','register')->name('profils.register');
    Route::get('profil','profil')->name('profils.home');
    Route::get('demande/modifier/{item}','updateDemande')->name('profils.demande.modifier');
});


Route::fallback(function () {
    return view('error');
});


//USER----------------
Route::controller(UserController::class)->group(function (){
    Route::post('register', 'addUser')->name('user.add');
    Route::Post('connexion', 'connexion')->name('user.connexion');
    Route::Post('profil/modifier', 'updateUser')->name('user.update');
    Route::get('profil/delete', 'deleteUser')->name('user.delete');
    Route::get('profil/deconnexion', 'deconnexion')->name('user.deconnexion');
    Route::get('profil/modifier', 'selectUser')->name('profils.modifier');
});

//DEMANDE----------------
Route::controller(DemandeController::class)->group(function (){
    Route::post('demande/addDemande', 'addDemande')->name('demande.add');
    Route::get('demande/nouvelleDemande', 'viewAddDemande')->name('demande.view.add');
    Route::Post('demande/modifier{item}', 'updateDemande')->name('demande.update');
    Route::get('demande/delete/{item}', 'deleteDemande')->name('demande.delete');
});

//utiliser le delete, put ou garde absolument le post ? avec @methode('delete, put) dans le form


