<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Officiel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('admin.pages.dashboard.index');
    }

    public function joueurs_view(){
        $joueurs=Joueur::all();
        return view('admin.pages.joueurs.index',['joueurs'=>$joueurs]);
    }
    public function new_joueur(){
        return view('admin.pages.joueurs.create_joueur');
    }

    public function officiels_view(){
        $officiels=Officiel::all();
        return view('admin.pages.officiels.index',['officiels'=>$officiels]);
    }
    public function new_officiel(){
        return view('admin.pages.officiels.create');
    }
    public function update_officiel($id){
        $officiel=Officiel::findOrFail($id);
        return view('admin.pages.officiels.update_officiel',['officiel'=>$officiel]);
    }
    public function update_joueur($id){
        $joueur=Joueur::findOrFail($id);
        return view('admin.pages.joueurs.update_joueur',['joueur'=>$joueur]);
    }
}
