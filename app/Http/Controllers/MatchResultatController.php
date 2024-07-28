<?php

namespace App\Http\Controllers;

use App\Models\MatchResultat;
use App\Http\Requests\StoreMatchResultatRequest;
use App\Http\Requests\UpdateMatchResultatRequest;
use App\Models\Matche;
use Illuminate\Http\Request;

class MatchResultatController extends Controller
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
    public function create(Request $request,$id)
    {

        $matche=Matche::findOrFail($id);

        //
        $credentials = $request->validate([
            'score_a' => ['required'],
            'score_b' => ['required'],

        ], [
            'equipe_a.required' => 'Equipe A est requise.',
            'equipe_b.required' => 'Equipe B est requise.',
        ]);
        $match_result=MatchResultat::where('match_id',$matche->id)->first();
        if($match_result!=null){
            $match_result = $match_result->update([
                'score_a' => $request->score_a,
                'score_b' => $request->score_b,
            ]);
        }else{
            $match_result = MatchResultat::create([
                'score_a' => $request->score_a,
                'score_b' => $request->score_b,
                'match_id' => $matche->id,
            ]);
        }
        return redirect()->back()->with('success', 'Match Resultat ajouté avec succès');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatchResultatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchResultat $matchResultat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MatchResultat $matchResultat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatchResultatRequest $request, MatchResultat $matchResultat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchResultat $matchResultat)
    {
        //
    }
}
