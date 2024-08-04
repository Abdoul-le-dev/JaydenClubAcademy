<?php

namespace App\Http\Controllers;

use App\Models\Matche;
use App\Models\Officiel;
use App\Models\Post;
use Illuminate\Http\Request;

class VitrineController extends Controller
{
    //


    public function index(){

        //recuperation des 4 derniers article

        $datas = Post::latest()->take(4)->get();

        return view('vitrine.pages.accueil.index',compact('datas'));
    }

    public function staffs_view(){

        //recuperation des 4 derniers article

        $officiels = Officiel::all();

        return view('vitrine.pages.staff.index',compact('officiels'));
    }


   public function matches_view(){
    $matches = Matche::all();
    return view('vitrine.pages.matches.index',compact('matches'));
   }
}
