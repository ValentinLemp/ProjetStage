<?php
namespace App\Http\Controllers;
use App\Models\demande;


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
            return redirect()->route('profils.home');
        }
    }

    public function profil()
    {
        $items = Demande::with('statut')->where('user_id', session('idUser'))->get();
        return view('profils.home', ['items' => $items]);
    }

    public function register()
    {
        return view('profils.register');
    }
}
