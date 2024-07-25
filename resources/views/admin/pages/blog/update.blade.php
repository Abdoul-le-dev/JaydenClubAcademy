@extends('admin.components.app')

@section('page_content')

<div class="w-full flex flex-row justify-center item">

    <img src="/landing_assets/assets/icon/update.png" alt="update" width="80" height="20">
  
</div>

<div class="mt-2 flex flex-row w-full mb-10 ">
       
    <div class="w-1/2 ml-12 ">
        <h3 class="font_title_first text-xl nowrap font-semibold">Mise à jour de l'article n°{{$article->id}}</h3>
    </div>

    <div class="flex flex-row justify-center items-center Placeholder  w-1/2">
            <div class="flex flex-row justify-end ">
                <label for="format" class="mx-2 font_title_first text-xl ">Format  de l'article</label>
            </div>
            <select name="format" id="formatSelect"  class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >

                @if ($article->fichier_image)

                <option value="Image" class="mx-8  Placeholder text-xl">Image && Image</option>
            
                    
                @else
                <option value="Video" class="mx-8  Placeholder text-xl">Video && Video</option>
            
                    
                @endif

            
            </select>
    </div>

</div>
<div class=" flex flex-col  items-center  ">

   
    @if ($errors)

        @foreach ( $errors->all() as $error  )
            <div class="flex flex-col justify-start">
                <li class="Placeholder text-red-400">{{ $error}}</li>
            </div>
            
        @endforeach
        
    @endif

    <section>
       
    
       
    </section>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Image_costum  max-w-[600px] p-4" >
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="" class="text-base font-semibold text-black mr-6">Titre:</a> {{$article->titre}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-6 mt-10">

            <label for="titre" class="mx-2 font_title_first lg:w-1/2 text-base font-semibold text-black">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>

        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="" class="text-base font-semibold text-black mr-6">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 mt-6 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2 font-semibold text-black">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"   ></textarea>
        </div>

        
        
        <div class="flex flex-row justify-between items-center mb-2 mt-6"  >
            <label for="file" class="mx-2 font_title_first lg:w-1/2 font-semibold text-black"  >Fichier image</label>
            
            <input name="file" type="file" class="Upload border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] ex"  ></label>
            <label  class="mx-2 font_title_first lg:w-1/2 size"  ></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2"  >
            
            <div class="pr lg:w-1/2 hidden flex flex-row flex-wrap justify-between">
                <label for="file" class="mx-2 font_title_first  label" ></label>
                <label  class="mx-2 font_title_first  size" ></label>
            </div>
            <progress min="0" max="100" class="pl hidden" value="0">

            </progress>
           
           
           
        </div>

        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
                <option value="Image" class="mx-8 Placeholder">Image</option>
               
            </select>
        </div>
        <div class="w-full flex flex-row justify-center mt-4">
            <button class="p-2 bg-blue-400 border-2 w-[600px] border-blue-400 font_title_first" type="submit">
                Mettre à jour
            </button>
        </div>  

    </form>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Video_costum hidden max-w-[600px] p-4">
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="">Titre:</a> {{$article->title}}</p>
        </div>

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" placeholder="Titre de l'article" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2"  ></textarea>
        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" placeholder="contenu de l'article" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2"   ></textarea>
        </div>

        
     
        <div class="flex flex-row justify-between items-center mb-2" >

             <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Lien fichier</label>
          
            
            <input name="video_link" type="text"  placeholder="Lien de la vidéo" class="Placeholder p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >
        </div>
        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
                <option value="Video" class="mx-8 Placeholder">Video</option>
               
            </select>
        </div>
        <div class="w-full flex flex-row justify-center mt-4">
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

   
   

   



</div>
@endsection