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

        $titre = $request->titre;
        $contenu = $request->description;
        $format = $request->format;
        $video_link = $request->video_link ;

        //dd($titre);
       
        

        $post_id = Post::latest()->first();
        if($post_id !== null ){$post_id = (int) $post_id->id + 1;}
        else
        {
            $post_id=1;

        }
        
        if($format =='Image')
        {
            $fichier = $request->file->store('blog_image');
            
            $post = Post::create([
                    'title'      =>$titre,
                    'description' =>$contenu,
                    'fichier_image'=>$fichier,
                    'type_article'=>$format,
                    'detail_id'=>$post_id,
                    
            ]);
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
            $post = Post::create([
                'title'      =>$titre,
                'description' =>$contenu,
               // 'fichier_image'=>$fichier,
                'type_article'=>$format,
                'detail_id'=>$post_id,
                'fichier_link'=>$video_id,
                
            ]);

        }
       
        
        
        

      
       
        
    }
   
}
