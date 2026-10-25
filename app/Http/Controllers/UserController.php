<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function connexion(request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::where('email', $validated['email'])->first();

        if ($user == null) {
            return back()
                ->withErrors(['email' => 'Aucun compte ne correspond à cette adresse.'])
                ->withInput();
        }

        session(['idUser' => $user->id]);

        return redirect()->route('profils.home')
            ->with('success', 'Connexion réussie.');
    }
    public function addUser(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email',
            'phone' => 'nullable|string|max:20',
        ]);

        $item = new User();
        $item->name  = $validated['name'];
        $item->email = $validated['email'];
        $item->phone = $validated['phone'] ?? null;
        $item->save();

        session(['idUser' =>  $item->id]);
        return redirect()->route('profils.home')->with('success', 'Enregistrement réussi.');
    }

    public function updateUser(Request $request)
    {
        $item = User::findOrFail(session('idUser'));


        $validated = $request->validate([
            'name'  => 'required|string|max:100',
            'email' => ['required', 'email', 'max:100', Rule::unique('users', 'email')->ignore($item->id)],
            'phone' => 'nullable|string|max:20',
        ]);

        $item->name  = $validated['name'];
        $item->email = $validated['email'];
        $item->phone = $validated['phone'] ?? null;
        $item->update();

        session(['idUser' =>  $item->id]);
        return back()->with('success', 'Modification réussi.');
    }

    public function selectUser()
    {
        $item = User::findOrFail(session('idUser'));
        return view('profils.updateProfil', ['item' => $item]);
    }


    public function deleteUser()
    {
        $item = User::findOrFail(session('idUser'));
        $item->delete();

        session(['idUser' => null]);
        return redirect()->route('accueil')->with('success', 'Modification réussi.');
    }

    public function deconnexion()
    {
        session(['idUser' => null]);
        return redirect()->route('accueil')->with('success', 'Modification réussi.');
    }
}
