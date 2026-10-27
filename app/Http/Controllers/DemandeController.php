<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function viewAddDemande()
    {
        return view('demandes.addDemande');
    }

    public function addDemande(Request $request)
    {
        $validated = $request->validate([
            'title'  => 'required|string|max:100',
            'description' => 'required|string|max:250',
            'dueDate' => 'required|date|after:today',
        ]);

        $item = new Demande();
        $item->title  = $validated['title'];
        $item->description = $validated['description'];
        $item->statut_id = '1';
        $item->user_id = session('idUser');
        $item->dueDate = $validated['dueDate'];
        $item->save();

        return redirect()->route('profils.home')->with('success', 'Enregistrement réussi.');
    }

    public function updateDemande(Request $request, Demande $item)
    {
        $validated = $request->validate([
            'title'  => 'required|string|max:100',
            'description' => 'required|string|max:250',
            'statut_id' => 'required',
            'dueDate' => 'required|date|after:today',
        ]);

        $item->title  = $validated['title'];
        $item->description = $validated['description'];
        $item->statut_id = $validated['statut_id'];
        $item->user_id = session('idUser');
        $item->dueDate = $validated['dueDate'];
        $item->save();

        return back()->with('success', 'Modification réussi.');
    }
    public function deleteDemande(Demande $item)
    {
        $item->delete();
        return redirect()->route('profils.home')->with('success', 'suppression réussi.');
    }
}
