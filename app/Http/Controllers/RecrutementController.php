<?php

namespace App\Http\Controllers;

use App\Models\Recrutement;
use App\Http\Requests\StoreRecrutementRequest;
use App\Http\Requests\UpdateRecrutementRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Request;

class RecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vitrine.pages.recrutement.index');
    }
    public function voir($id)
    {
        $listes= Recrutement::where('id',$id)->get();

        return view('admin.pages.recrutement.see',compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreRecrutementRequest $request)
    {
        $recrutement = Recrutement::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date' => $request->date,
            'genre' => $request->genre,
            'residence' => $request->residence,
            'nationnalite' => $request->nationnalite,
            'message1' => $request->message1,
            'message2' => $request->message2,
            'message3' => $request->message3,
            'email' => $request-> email,
            'telephone' => $request-> telephone,
        ]);

        return redirect()->route('recrutement-view')->with('success',"Votre demande a été transmise avec succès ");

        
    }

    public function liste() 
    {
        $listes= Recrutement::latest()->take(5)->get();

        return view('admin.pages.recrutement.index',compact('listes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecrutementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recrutement $recrutement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recrutement $recrutement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecrutementRequest $request, Recrutement $recrutement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recrutement $recrutement)
    {
        //
    }
}
