@extends('vitrine.components.app')

@section('page_title')
Blog
@endsection

@section('content')

<div class=" flex flex-col  items-center min-h-[100vh] lg:min-h-[87vh] shadow bg-[#DCDCDC]">

    <div class="mt-10 flex flex-row">
       <h3 class="font_title_first text-xl mx-2">Ajouter un article</h3>
       <p class="font_title_first text-xl Image_text">Rubrique:Image</p>
       <p class="font_title_first text-xl hidden Video_text">Rubrique:Video</p>
    </div>
    @if ($errors)

    @foreach ( $errors->all() as $error  )
    <div class="flex flex-col justify-start">
        <li class="Placeholder text-red-400">{{ $error}}</li>
    </div>
        
    @endforeach
        
    @endif

    <div class="flex flex-row justify-between items-center mb-2 mt-10">
        <label for="format" class="mx-10 font_title_first lg:w-1/2">Format de l'article</label>
        <select name="format" id="format" class="Format_article ml-10 p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>

            <option value="Image" class="mx-8 Placeholder">Image && Image</option>
            <option value="Video" class="mx-8 Placeholder">Video && Video</option>
           
        </select>
    </div>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Image">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

    

        
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier image</label>
            
            <input name="file" type="file" class="Upload border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] ex" required></label>
            <label  class="mx-2 font_title_first lg:w-1/2 size" required></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2" required>
            
            <div class="pr lg:w-1/2 hidden flex flex-row flex-wrap justify-between">
                <label for="file" class="mx-2 font_title_first  label" ></label>
                <label  class="mx-2 font_title_first  size" required></label>
            </div>
            <progress min="0" max="100" class="pl hidden" value="0">

            </progress>
           
           
           
        </div>

        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Image" class="mx-8 Placeholder">Image</option>
               
            </select>
        </div>
        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{ route('create') }}" method="POST"  class="Video hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" placeholder="Titre de l'article" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" placeholder="contenu de l'article" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required ></textarea>
        </div>

        <div class="flex flex-row justify-between items-center mb-2" >

             <label for="video_link" class="mx-2 font_title_first lg:w-1/2">Lien fichier</label>
          
            
            <input name="video_link" type="text"  placeholder="Lien de la vidéo" class="Placeholder p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>
        </div>
        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Video" class="mx-8 Placeholder">Video</option>
               
            </select>
        </div>
        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

   
    

   



</div>


@endsection