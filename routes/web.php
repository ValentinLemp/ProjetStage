<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;

Route::get('', [HomeController::class, 'accueil'])->name('accueil');

Route::controller(ProfilController::class)->group(function () {
    Route::get('connect','connexion')->name('profils.connect');
    Route::get('register','register')->name('profils.register');
});

Route::fallback(function () {
    return view('error');
});
