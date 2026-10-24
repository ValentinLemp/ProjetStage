<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;

//route-------------
Route::get('', [HomeController::class, 'accueil'])->name('accueil');

Route::controller(ProfilController::class)->group(function () {
    Route::get('connect','connexion')->name('profils.connect');
    Route::get('register','register')->name('profils.register');

Route::get('profil', [ProfilController::class, 'profil'])->name('profils.home');
Route::get('profil/modifier', [UserController::class, 'selectUser'])->name('profils.modifier');
});


Route::fallback(function () {
    return view('error');
});


//USER----------------
Route::post('register', [UserController::class, 'addUser'])->name('user.add');
Route::Post('connexion', [UserController::class, 'connexion'])->name('user.connexion');
Route::Post('profil/modifier', [UserController::class, 'updateUser'])->name('user.update');

