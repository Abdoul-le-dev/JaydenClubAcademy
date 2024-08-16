@extends('admin.components.app')

@section('page_css')
        <!-- Dropify css -->
        <link href="/admin_assets/plugins/dropify/dropify.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/admin_assets/editor/summernote-bs4.css">

@endsection
@section('page_content')
<div class=" flex flex-col  items-center  ">

    <div class=" flex flex-row">
        
        <div class="flex justitify-center items-center rounded-full bg-white p-2">

            <img src="/landing_assets/assets/icon/blogs.png" alt="blogging" width="55" height="70" class="m-4">

        </div>
        
       
       
    </div>
    

   

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Image">
        @csrf

        <div class="flex flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2 titre3">Format de l'article</label>
            <select name="format" id="format" class="Format_article  titre3 p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Image" class="mx-8 Placeholder titre3 ">Image && Image</option>
                <option value="Video" class="mx-8 Placeholder titre3 ">Video && Video</option>
               
            </select>
        </div>

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2 titre3">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class="titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="entete" class="mx-2 font_title_first lg:w-1/2 titre3">Entête</label>
            <textarea name="entete" id="" cols="30" placeholder="Entete"  rows="2" class="titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row   md:justify-between items-center mb-2 mt-6 ">
            
            <label for="description" class="mx-4 lg:mx-2 font_title_first  titre3">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="5" class="titre3  border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5] " required ></textarea>
        </div>

    

        
        <div class="flex flex-row justify-between items-center mb-2 mt-6" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2 titre3 mt-2" required>Fichier image</label>
            
            <input name="file" type="file" class="Upload border Placeholder titre3">
        </div>
        <div class="flex flex-row justify-between items-center mb-2 mt-6" required>
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] ex titre3" required></label>
            <label  class="mx-2 font_title_first lg:w-1/2 size titre3" required></label>
            
           
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
            <label for="format" class="mx-2 font_title_first lg:w-1/2 titre3">Format de l'article</label>
            <select name="format" id="format" class="Format_article titre3 p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Image" class="mx-8 Placeholder titre3">Image</option>
               
            </select>
        </div>
        <div class="flex flex-col">
            <button class="p-2 my-2 titre3 bg-blue-400 text-white border-2 w-[400px] border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
            <a href="/dashboard/blog" class=" flex justify-center p-2 my-2 titre3 bg-red-400 text-white border-2 w-[400px] border-red-400 font_title_first" type="submit">
                Annuler
            </a>
        </div>  

    </form>

    <form action="{{ route('create') }}" method="POST"  class="Video hidden">
        @csrf

        <div class="flex flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2 titre3">Format de l'article</label>
            <select name="format" id="format" class="Format_article titre3 p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Video" class="mx-8 Placeholder titre3 ">Video && Video</option>
                <option value="Image" class="mx-8 Placeholder titre3 ">Image && Image</option>
               
               
            </select>
        </div>

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2 titre3">Titre</label>
            <textarea name="titre" id="" placeholder="Titre de l'article" cols="30" rows="3" class=" titre3 border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required></textarea>
        </div>
        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="entete" class="mx-2 font_title_first lg:w-1/2 titre3">Entête</label>
            <textarea name="entete" id="" cols="30" placeholder="Entete"  rows="2" class="titre3 border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2 titre3">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" placeholder="contenu de l'article" class="titre3 editor border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required ></textarea>
        </div>

        <div class="flex flex-row justify-between items-center mb-2" >

             <label for="video_link" class="mx-2 font_title_first lg:w-1/2 titre3">Lien fichier</label>
          
            
            <input name="video_link" type="text"  placeholder="Lien de la vidéo" class="titre3 Placeholder w-[400px] p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>
        </div>
        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2 titre3">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Video" class="mx-8 Placeholder titre3">Video</option>
               
            </select>
        </div>
        <div class="flex flex-col">
            <button class="p-2 my-2 titre3 bg-blue-400 text-white border-2 w-[400px] border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
            <a href="/dashboard/blog" class=" flex justify-center p-2 my-2 titre3 bg-red-400 text-white border-2 w-[400px] border-red-400 font_title_first" type="submit">
                Annuler
            </a>
        </div> 

    </form>

   
    

   



</div>
@endsection
@section('page_script')
<script src="/admin_assets/editor/summernote-bs4.min.js"></script>
<script>
$('.editor').summernote({
    fontSizes: ['10', '14'],
    toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['fontsize', ['fontsize']],
        ['para', ['ul', 'ol', 'paragraph']]
    ],
    placeholder: 'Write here ....',
    tabsize: 2,
    height: 200
});
</script>
@endsection