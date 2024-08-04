<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Http\Requests\StoreGallerieRequest;
use App\Http\Requests\UpdateGallerieRequest;
use Illuminate\Support\Facades\Request;

class GallerieController extends Controller
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
    public function create(StoreGallerieRequest $request)
    {
        $credentials = $request->validate([
            'nom' => ['required'],
            'format' => ['required'],
            'file' => ['required'],
        ], [
            
            'nom.required' => 'le nom du fichier est requis',
            'format.required' => 'Un fichier est requis',
            'file.required' => 'Un fichier est requis'
        ]);

        $nom = $request->nom;
        $format = $request->format;
        
        $link = $request->link;

       

        if($format =='image')
        {
           

            $image = Gallerie::create(
                [
                    'type' => 'image',
                    'nom' =>$nom,
                    'fichier_image'=> $request->file->store('gallerie')

                ]);

            return redirect()->route('galerie-view')->with('success',"L'image à été ajouté avec succès");    

        }
        if($format =='video')
        {
            $type = 'video';

            $image = Gallerie::created(
                [
                    'type' => $type,
                    'nom' =>$nom,
                    'link'=> $request->file->store('gallerie')

                ]);

            return redirect()->route('galerie-view')->with('success','La vidéo à été ajouté avec succès');    

        }

        return redirect()->route('galerie-view')->with('error',"Impossible d'ajouter le fichier"); 

        
    }

    public function delete($id)
    {
        $image = Gallerie::findOrFail($id);

        if($image)
        {
            $image->delete();
            return redirect()->route('galerie-view')->with('success','Le fichier à été supprimé avec succès');    

        }
        return redirect()->route('galerie-view')->with('error','Fichier non trouver');    


    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGallerieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallerie $gallerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallerie $gallerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGallerieRequest $request, Gallerie $gallerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallerie $gallerie)
    {
        //
    }
}
