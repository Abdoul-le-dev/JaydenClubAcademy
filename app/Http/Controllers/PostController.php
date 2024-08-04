<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        User::create([
            'name'  => 'Abdoul',
            'email' => 'abdoul51@gmail.com',
            'password' => Hash::make('Abdoul51')
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('vitrine.pages.blog.modelArticle');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StorePostRequest $request,$id)
    {
        $titre = $request->titre;
        $contenu = $request->description;
        $news =$request->entete;
        
        $format = $request->format;
        $video_link = $request->video_link ;
        
        $update =[];

        if( $titre)
        {
            $update = array_merge($update,['titre'=> $titre]);

        }
        if($contenu)
        {
            $update = array_merge($update,['description'=>$contenu]);

        }
        if(  $format =='Image' )
        {
                 $fichier = $request->file->store('fichier');
            
                $update = array_merge($update,['fichier_image'=>$fichier]);
    
            
        }
        else
        {
            $update = array_merge($update,['fichier_link'=>$video_link]);
        }
        if($news)
        {
            $update = array_merge($update,['entete'=>$news]);

        }
        
            $article= Post::findOrFail($id);
            $article->update($update);

            return redirect()->route('admin-blog')->with('success',"L'article à été mise à jour avec succès");
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
