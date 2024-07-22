<?php

namespace App\Http\Controllers;

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
}
