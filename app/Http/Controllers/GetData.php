<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\Joueur;
use Illuminate\Http\Request;

class GetData extends Controller
{
    public function getImage(Request $request)
    {
        $data = Gallerie::latest()->take(15)->get();

        return response()->json(['data' => $data]);
    }
    public function getJoueur(Request $request)
    {
        $data = Joueur::latest()->get();

        return response()->json(['data' => $data]);
    }
}
