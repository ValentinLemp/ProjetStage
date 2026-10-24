<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;

Route::get('', [HomeController::class, 'accueil'])->name('accueil');


Route::controller(ProfilController::class)->group(function () {
    Route::get('connect','connexion')->name('profils.connect');
    Route::get('register','register')->name('profils.register');
});

Route::post('register', [UserController::class, 'addUser'])->name('user.add');

Route::get('profil', [ProfilController::class, 'profil'])->name('profil.home');


Route::fallback(function () {
    return view('error');
});
