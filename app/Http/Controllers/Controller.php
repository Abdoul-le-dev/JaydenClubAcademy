<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function albums()
    {
        return view('vitrine.pages.albums.index');
    }

    public function galerie()
    {
        return view('vitrine.pages.galerie.index');
    }
    public function aPropos()
    {
        return view('vitrine.pages.paperase.apropos');
    }
    public function mentionLegal()
    {
        return view('vitrine.pages.paperase.mentionLegale');
    }
    public function nosResultats()
    {
        return view('vitrine.pages.paperase.nosresultat');
    } 
    public function politiqueC()
    {
        return view('vitrine.pages.paperase.politiqueDeConfidentialite');
    }

}
