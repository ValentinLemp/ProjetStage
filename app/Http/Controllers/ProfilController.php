<?php
namespace App\Http\Controllers;
class ProfilController extends Controller
{
    public function __construct()
    {
        //voir si connecter ou non
    }

    public function connexion()
    {
        return view('profils.connect');
    }

    public function register()
    {
        return view('profils.register');
    }
}
