<?php

namespace App\Http\Controllers;

use App\Models\demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function chows($id)
    {
        $items = demande::findOrFail($id);
        return $items;
    }

    public function add()
    {
        $item = new demande();
        $item->title = "";
        $item->description = "";
        $item->statut_id = "";
        $item->save();
    }
    public function delete($id)
    {
        $item = demande::findOrFail($id);
        $item->delete();
    }
}
