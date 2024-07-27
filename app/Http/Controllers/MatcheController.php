<?php

namespace App\Http\Controllers;

use App\Models\Matche;
use App\Http\Requests\StoreMatcheRequest;
use App\Http\Requests\UpdateMatcheRequest;
use Illuminate\Http\Request;

class MatcheController extends Controller
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
            'equipe_a' => ['required', 'exists:equipes,id'],
            'equipe_b' => ['required', 'exists:equipes,id', 'different:equipe_a'],
            'match_date' => ['required', 'date'],
            'start_date' => ['required', 'date_format:H:i'],
            'terrain' => ['required'],
        ], [
            'equipe_a.required' => 'Equipe A est requise.',
            'equipe_b.required' => 'Equipe B est requise.',
            'match_date.required' => 'La date du match est requise.',
            'start_date.required' => 'Heure du début est requise.',
            'terrain.required' => 'Le terrain est requis.',
            'equipe_a.exists' => 'Equipe A doit exister.',
            'equipe_b.exists' => 'Equipe B doit exister.',
            'equipe_b.different' => 'Equipe B doit être différente de Equipe A.',
        ]);

        $user = Matche::create([
            'equipe_a' => $request->equipe_a,
            'equipe_b' => $request->equipe_b,
            'match_date' => $request->match_date,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'terrain' => $request->terrain
        ]);

        return redirect()->back()->with('success', 'Match ajouté avec succès');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatcheRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Matche $matche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matche $matche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $matche=Matche::findOrFail($id);

        //
        $credentials = $request->validate([
            'equipe_a' => ['required', 'email', 'unique:joueurs'],
            'equipe_b' => ['required'],
            'match_date' => ['required'],
            'start_date' => ['required','date'],
            'terrain' => ['required'],
        ], [
            'equipe_a.required' => 'Equipe A est requis.',
            'equipe_b.required' => 'Equipe B  est requis.',
            'match_date.required' => 'La date du match est requis.',
            'start_date.required' => 'Heure du début est requis.',
            'terrain.required' => 'Le terrain est requis.'
        ]);



        $match = $matche->update([
            'equipe_a' => $request->equipe_a,
            'equipe_b' => $request->equipe_b,
            'match_date' => $request->match_date,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'terrain' => $request->terrain
        ]);
        return redirect()->back()->with('success', 'Match modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $matche=Matche::findOrFail($id);
        $matche->forceDelete();
        return redirect()->back()->with('success', 'Joueur supprimé avec succès');
    }
}
