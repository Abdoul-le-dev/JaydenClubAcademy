<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('vitrine.pages.blog.index');
    }

    public function create(StorePostRequest $request)
    {

        dd($request);
        $titre = $request->titre;
        $contenu = $request->description;
        $news =$request->entete;
        $format = $request->format;
        $video_link = $request->video_link ;

        //dd($titre);
       
    
        
        if($format =='Image')
        {
            $fichier = $request->file->store('fichier');
            
            $post = Post::create([
                    'titre'=>$request->titre,
                    'entete'=> $news,
                    'description' =>$contenu,
                    'fichier_image'=>$fichier,
                    'type_article'=>$format,
                   
                    
            ]);

            return redirect()->route('admin-blog')->with('success','L\'article à été ajouter avec succes');
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
            
            
            $video_id = "https://www.youtube-nocookie.com/embed/".$video_id."?si=sutV20EDxIDLzQLy&amp;controls=0&amp;start=68";
            $post = Post::create([
                'titre'=>$titre,
                'description' =>$contenu,
                'type_article'=>$format,
                'fichier_link'=>$video_id,
                
            ]);

            return redirect()->route('admin-blog')->with('success','L\'article à été ajouter avec succes');

        }
       
        
        
        

      
       
        
    }

  

   
}
