<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $item = new User();
        $item->name = request('name');
        $item->email = request('email');
        $item->phone = request('phone') ?? null;
        $item->save();

        session(['id_user' => 1]);
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
