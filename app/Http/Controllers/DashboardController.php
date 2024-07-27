<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\Joueur;
use App\Models\Matche;
use App\Models\Officiel;
use App\Models\Post;
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
    public function delete($id)
    {
        $article = Post::findOrFail($id);

        $article->delete();

        return redirect()->route('admin-blog')->with('success', 'Article supprimé avec succès');;

    }

    public function updates(Request $request)
    {
        $titre = $request->titre;
        $contenu = $request->description;
        $video_link = $request->video_link;
        $format = $request->format();
        $tab = [ ];
        $tabs = [];
        $post_id = $request->input('id');

        if($titre)
        {
            $tab = array_merge($tab,['title' => $titre]);
        }
        if($contenu)
        {
            $tab = array_merge($tab,['description' => $contenu]);
        }

        if($format =='Image')
        {
            $fichier = $request->file->store('fichier');

            $tab = array_merge($tab,['fichier_image' => $fichier]);

        }
        if($format =='Video')
        {

            if (preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            }
            // Match long URL format (youtube.com)
            elseif (preg_match('/youtube\.com\/.*v=([^&]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            }
            // Match embed URL format
            elseif (preg_match('/youtube\.com\/embed\/([^&]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            } else {
                // If no match is found, return null or handle the error appropriately
                return null;
            }
            // Extraire l'identifiant de la vidéo de l'URL
           // preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches);

            //$video_id = $matches[1];

            $video_id = "https://www.youtube-nocookie.com/embed/".$video_id."?si=sutV20EDxIDLzQLy&amp;controls=0&amp;start=68";


            $tab = array_merge($tab,['fichier_link' => $video_id]);

        }


        $article = Post::findOrFail($post_id);

        $article->update($tab);

        return redirect()->route('admin-blog')->with('sucess','L\'article à été mise a jour avec succes');




    }
















    public function blog()
    {
        $posts = Post::latest()->get();
        return view('admin.pages.blog.liste',compact('posts'));
    }

    public function ajouter()
    {
        return view('admin.pages.blog.create');
    }

    public function article($id)
    {
        $post= Post::findOrFail($id);
        return view('admin.pages.blog.article',compact('post'));
    }

    public function update($id)
    {
        $article= Post::findOrFail($id);
        return view('admin.pages.blog.update',compact('article'));
    }

    public function albums()
    {
        return view('admin.pages.album.index');
    }
    public function addAlbums()
    {
        return view('admin.pages.album.add');
    }

    public function galeries()
    {
        $datas =Gallerie::latest()->get();
        return view('vitrine.pages.galerie.index',compact('datas'));
    }
    public function galerie()
    {
        $datas =Gallerie::latest()->get();
        return view('admin.pages.galerie.index',compact('datas'));
    }
    public function addData()
    {
        return view('admin.pages.galerie.add');
    }
    public function image()
    {
        return view('admin.pages.galerie.image');
    }
    public function video()
    {
        return view('admin.pages.galerie.video');
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




    public function matches_view(){
        $matches=Matche::all();
        return view('admin.pages.matches.index',['matches'=>$matches]);
    }
    public function new_match(){
        return view('admin.pages.matches.create_match');
    }
    public function update_match($id){
        $matche=Matche::findOrFail($id);
        return view('admin.pages.matches.update_matche',['matche'=>$matche]);
    }

}
