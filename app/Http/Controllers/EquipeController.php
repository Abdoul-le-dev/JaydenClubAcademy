<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Http\Requests\StoreEquipeRequest;
use App\Http\Requests\UpdateEquipeRequest;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equipes = Equipe::all();
    return response()->json(['equipes' => $equipes]);
    }
    public function list()
    {
        //
        $equipes = Equipe::all();
        return response()->json(['equipes' => $equipes]);
    }

    public function create(Request $request)
    {
        //
        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
        ],[
            'nom.required' => 'Le champ nom est réquis.',

        ]);

        $equipe = Equipe::create([
            'nom' => $request->nom,
            'logo' => $request->file('logo')!=null ? $request->file('logo')->store('public/equipes_logos') : null ,
        ]);

        return response()->json(['equipe' =>$equipe]);
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        //dis en question
        $equipe=Equipe::findOrFail($id);
        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
        ],[
            'nom.required' => 'Le champ nom est requis.',
        ]);

        $equipe = $equipe->update([
            'nom' => $request->nom,
        ]);
        if($request->file('logo')!=null){
            $equipe = $equipe->update([
                'logo' => $request->file('logo')->store('public/equipes_logos'),
            ]);
        }

        return response()->json(['equipe' =>$equipe]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

    }

    public function delete( $id)
    {
        $equipe=Equipe::findOrFail($id);
        $equipe->delete();
        return response()->json(['dish' =>$equipe]);
    }
}
