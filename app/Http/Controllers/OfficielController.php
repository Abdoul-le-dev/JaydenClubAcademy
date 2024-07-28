<?php

namespace App\Http\Controllers;

use App\Models\Officiel;
use App\Http\Requests\StoreOfficielRequest;
use App\Http\Requests\UpdateOfficielRequest;
use Illuminate\Http\Request;
class OfficielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function staff_view($id){
        $officiel=Officiel::findOrFail($id);

        return view('vitrine.pages.staff.single_staff',compact('officiel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        //
        $credentials = $request->validate([
            'email' => ['required', 'email', 'unique:officiels'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'fonction' => ['required'],
            'telephone' => ['required'],
            'photo' => ['required','file'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'photo.required' => 'Le champ photo est requis.',
            'photo.file' => 'Le champ photo doit etre une image.',
            'telephone.required' => 'Le champ telephone est requis.',
            'fonction.required' => 'Le champ fonction requis.',
        ]);



        $user = Officiel::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'fonction' => $request->fonction,
            'telephone' => $request->telephone,
            'photo' => $request->file('photo')!=null ? $request->file('photo')->store('public/officiels_photos') : null
        ]);

        return redirect()->back()->with('success', 'Officiel ajouté avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfficielRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Officiel $officiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Officiel $officiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $officiel=Officiel::findOrFail($id);

        //
        $credentials = $request->validate([
            'email' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'fonction' => ['required'],
            'telephone' => ['required'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'photo.required' => 'Le champ photo est requis.',
            'photo.file' => 'Le champ photo doit etre une image.',
            'telephone.required' => 'Le champ telephone est requis.',
            'fonction.required' => 'Le champ fonction requis.',
        ]);



        $user = $officiel->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'fonction' => $request->fonction,
            'telephone' => $request->telephone,

        ]);

        if($request->hasFile('photo')){
            $user = $officiel->update([
                'photo' =>  $request->file('photo')->store('public/officiels_photos')
            ]);
        }

        return redirect()->back()->with('success', 'Officiel modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $officiel=Officiel::findOrFail($id);
        $officiel->forceDelete();
        return redirect()->back()->with('success', 'Officiel supprimé avec succès');
    }
}
