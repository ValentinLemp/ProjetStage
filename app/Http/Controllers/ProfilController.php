<?php
namespace App\Http\Controllers;
use App\Models\demande;
use App\Models\statut;
use Illuminate\Http\Request;


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

    public function profil(Request $request)
    {
        $validated = $request->validate(['statut_id' => 'nullable']);

        $items = Demande::with('statut')
            ->where('user_id', session('idUser'))
            ->when($validated['statut_id'] ?? null, fn ($q, $id) => $q->where('statut_id', $id))
            ->get();

        $statuts = Statut::all();
        return view('profils.home', compact('items', 'statuts'));
    }

    public function register()
    {
        return view('profils.register');
    }

    public function updateDemande(Demande $item)
    {
        $statuts = Statut::all();
        return view('demandes.updateDemande', compact('item', 'statuts'));
    }
}
