<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        $item = new User();
        $item->name = "";
        $item->email = "";
        $item->phone = "";
        $item->save();
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
