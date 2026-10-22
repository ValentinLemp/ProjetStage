<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        $item = new user();
        $item->name = "";
        $item->email  "";
        $item->phone = "";
        $item->save();
    }

    public function chows($id)
    {
        $item = user::findOrFail($id);
        return $item;
    }

    public function update($id)
    {
        $item = user::findOrFail($id);
        $item->name = "";
        $item->email = "";
        $item->phone = "";
        $item->update();
    }
    public function delete($id)
    {
        $item = user::findOrFail($id);
        $item->delete();
    }
}
