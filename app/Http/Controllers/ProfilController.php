<?php
namespace App\Http\Controllers;
class ProfilController extends Controller
{
    public function connexion()
    {
        if(session('idUser') == null)
        {
            return view('profils.connect');
        }
        else
        {
            return view('profils.home');
        }
    }

    public function profil()
    {
        return view('profils.home');
    }

    public function register()
    {
        return view('profils.register');
    }
}
