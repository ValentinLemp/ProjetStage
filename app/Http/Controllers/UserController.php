<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

        return redirect()->route('profil.home')
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
        return redirect()->route('profil.home')->with('success', 'Enregistrement réussi.');
    }

    public function chows($id)
    {
        $item = User::findOrFail($id);
        return $item;
    }

    public function update($id)
    {
        $item = User::findOrFail($id);
        $item->name = "";
        $item->email = "";
        $item->phone = "";
        $item->update();
    }
    public function delete($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
    }
}
