<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('home');
});

Route::controller(ProfilController::class)->group(function () {
    Route::get('connect','connexion')->name('profils.connect');
    Route::get('register','register')->name('profils.register');
});

Route::fallback(function () {
    return view('error');
});
