<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function chows($id)
    {
        $items = Demande::findOrFail($id);
        return $items;
    }

    public function add()
    {
        $item = new Demande();
        $item->title = "";
        $item->description = "";
        $item->statut_id = "";
        $item->save();
    }
    public function delete($id)
    {
        $item = Demande::findOrFail($id);
        $item->delete();
    }
}
