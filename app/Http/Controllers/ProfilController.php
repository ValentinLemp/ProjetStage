<?php
namespace App\Http\Controllers;
class ProfilController extends Controller
{
    public function connexion()
    {
        //session(['idUser' => null]);
        if(session('idUser') == null)
        {
            return view('profils.connect');
        }
        else
        {
            return redirect()->route('profils.home');
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
