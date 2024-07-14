<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        //
        $credentials = $request->validate([
            'email' => ['required', 'email', 'unique:joueurs'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'date_de_naissance' => ['required','date'],
            'nationalite' => ['required'],
            'numero' => ['required'],
            'position_sur_terrain' => ['required'],
            'photo' => ['required','file'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'date_de_naissance.required' => 'Le champ date de naissance est requis.',
            'nationalite.required' => 'Le champ nationalite est requis.',
            'photo.required' => 'Le champ photo est requis.',
            'photo.file' => 'Le champ photo doit etre une image.',
            'position_sur_terrain.required' => 'Le champ position requis.',
            'numero.required' => 'Le champ numero requis.',
        ]);



        $user = Joueur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'nationalite' => $request->nationalite,
            'photo' => $request->file('photo')->store('public/joueurs_photos'),
            'position_sur_terrain' => $request->position_sur_terrain,
            'numero' => $request->numero,
            'objectif' => $request->objectif,
            'style_de_jeu' => $request->style_du_jeu,
        ]);

        return redirect()->back()->with('success', 'Joueur ajouté avec succès');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJoueurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Joueur $joueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJoueurRequest $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
}
