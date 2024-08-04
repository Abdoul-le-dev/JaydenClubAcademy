@extends('admin.components.app')

@section('page_content')

<div class="w-full flex flex-row justify-center item">

    <img src="/landing_assets/assets/icon/update.png" alt="update" width="80" height="20">
  
</div>

<div class="mt-2 flex flex-row w-full mb-10 ">
       
    <div class="w-1/2 ml-12 ">
        <h3 class="titre3 text-xl nowrap font-semibold titre2">Mise à jour de l'article n°{{$article->id}}</h3>
    </div>

    <div class="flex flex-row justify-center items-center Placeholder  w-1/2">
            <div class="flex flex-row justify-end ">
                <label for="format" class="mx-2 titre3 text-xl titre2">Format  de l'article</label>
            </div>
            <select name="format" id="formatSelect"  class="titre3 p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >

                @if ($article->fichier_image)

                <option value="Image" class="mx-8  Placeholder text-xl titre3">Image && Image</option>
            
                    
                @else
                <option value="Video" class="mx-8  Placeholder text-xl titre3">Video && Video</option>

                <script>

                    document.addEventListener('DOMContentLoaded',function()
                    {
                        var Image_article = document.querySelector('.Image_costum ');
                        var Video_article = document.querySelector('.Video_costum');

                        Video_article.classList.remove('hidden');
                        Video_article.classList.add('bloc');
                        Image_article.classList.add('hidden');

                    });


                    
                
                </script>
            
                    
                @endif

            
            </select>
    </div>

</div>
<div class=" flex flex-col  items-center  ">

   
    @if ($errors)

        @foreach ( $errors->all() as $error  )
            <div class="flex flex-col justify-start">
                <li class="Placeholder text-red-400 titre3">{{ $error}}</li>
            </div>
            
        @endforeach
        
    @endif

    <section>
       
    
       
    </section>

    <form action="{{ route('admin-blog-updates',['id'=>$article->id]) }}" method="POST" enctype="multipart/form-data" class="Image_costum  max-w-[600px] p-4" >
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="" class="text-base  text-black mr-6 titre3">Titre:</a> {{$article->titre}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-6 mt-10">

            <label for="titre" class="mx-2 titre3 lg:w-1/2 text-base font-semibold text-green-300 titre3">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class=" titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>

        </div>
        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="" class="text-base  text-black mr-6 titre3">Entête:</a> {{$article->entete}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-6 mt-10">

            <label for="entete" class="mx-2 titre3 lg:w-1/2 text-base font-semibold text-green-300 titre3">Entête</label>
            <textarea name="entete" id="" cols="30" placeholder="Entête"  rows="3" class=" titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>

        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="" class="text-base  text-black mr-6 titre3">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 mt-6 ">
            
            <label for="description" class="mx-2 titre3 lg:w-1/2 font-semibold text-green-300">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="3" class="titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"   ></textarea>
        </div>

        
        
        <div class="flex flex-row justify-between items-center mb-2 mt-6"  >
            <label for="file" class="mx-2 titre3 lg:w-1/2 font-semibold text-green-300"  >Fichier image</label>
            
            <input name="file" type="file" class="Upload titre3  border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label  class="mx-2 titre3 lg:w-1/2 text-[#4287f5] ex"  ></label>
            <label  class="mx-2 titre3 lg:w-1/2 size"  ></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2"  >
            
            <div class="pr lg:w-1/2 hidden flex flex-row flex-wrap justify-between">
                <label for="file" class="mx-2 titre3  label" ></label>
                <label  class="mx-2 titre3  size" ></label>
            </div>
            <progress min="0" max="100" class="pl hidden" value="0">

            </progress>
           
           
           
        </div>

        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 titre3 lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
                <option value="Image" class="mx-8 Placeholder">Image</option>
               
            </select>
        </div>
        <div class="w-full flex flex-col justify-center mt-4">
            <button class="p-2 my-2 bg-blue-400 titre3 border-2 w-[600px] border-blue-400 titre2 text-white" type="submit">
                Mettre à jour
            </button>
            <a href="/dashboard" class=" my-2 flex justify-center p-2 bg-red-400 titre3 border-2 w-[600px] border-red-400 titre2 text-white" >
                Annuler
            </a>
        </div>  

    </form>

    <form action="{{ route('admin-blog-updates',['id'=>$article->id]) }}" method="POST" enctype="multipart/form-data" class="Video_costum hidden max-w-[600px] p-4">
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="" class="text-base  text-black mr-6 titre3">Titre:</a> {{$article->titre}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-6 mt-10">

            <label for="titre" class="mx-2 titre3 lg:w-1/2 text-base font-semibold text-green-300 titre3">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class=" titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>

        </div>
        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="" class="text-base  text-black mr-6 titre3">Entête:</a> {{$article->entete}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-6 mt-10">

            <label for="entete" class="mx-2 titre3 lg:w-1/2 text-base font-semibold text-green-300 titre3">Entête</label>
            <textarea name="entete" id="" cols="30" placeholder="Entête"  rows="3" class=" titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>

        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="" class="text-base  text-black mr-6 titre3">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 mt-6 ">
            
            <label for="description" class="mx-2 titre3 lg:w-1/2 font-semibold text-green-300">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="3" class="titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"   ></textarea>
        </div>

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="" class="text-base  text-black mr-6 titre3">Lien Youtube:</a> {{$article->fichier_link}}</p>
        </div>
     
        <div class="flex flex-row justify-between items-center my-2" >

             <label for="categorie" class="mx-2 titre3 lg:w-1/2">Lien fichier</label>
          
            
            <input name="video_link" type="text"  placeholder="Lien de la vidéo" class="Placeholder p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >
        </div>
        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 titre3 lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
                <option value="Video" class="mx-8 Placeholder">Video</option>
               
            </select>
        </div>
        <div class="w-full flex flex-col justify-center mt-4">
            <button class="p-2 my-2 bg-blue-400 titre3 border-2 w-[600px] border-blue-400 titre2 text-white" type="submit">
                Mettre à jour
            </button>
            <a href="/dashboard" class=" my-2 flex justify-center p-2 bg-red-400 titre3 border-2 w-[600px] border-red-400 titre2 text-white" >
                Annuler
            </a>
        </div>  
    </form>

   
   

   



</div>
@endsection