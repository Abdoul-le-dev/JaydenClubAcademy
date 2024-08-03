@extends('admin.components.app')

@section('page_content')

<div class=" flex justify-center items-center">


    <form action="{{route('galerie-save')}}" method="POST" enctype="multipart/form-data">

        @csrf
        
        <div class="bg-white rounded-md   mt-2 flex flex-col flex-wrap p-5 justify-center items-center " style="min-height: 60vh">
            
            <div class=" flex flex-row">
        
                <div class="flex justitify-center items-center rounded-full bg-[#F8F8F8] p-2">
        
                    <img src="/landing_assets/assets/icon/image.png" alt="blogging" width="55" height="70" class="m-4">
        
                </div>
                
               
               
            </div>
            <div class="hidden">
                <label for="format" class="mx-2 font_title_first lg:w-1/2 titre3">Format</label>
                <input type="format" class="form-control" value="image" id="nom" name="format">
                
            </div>

            <div class="flex flex-row justify-between items-center mb-2 mt-4">
                <label for="nom" class="mx-2 font_title_first lg:w-1/2 titre3">Nom </label>
                <input type="text" class="form-control titre3" value="{{old('nom')}}" id="nom" name="nom" placeholder="Nom de l'image" required="">
                
            </div>
        
            <div class="flex flex-row justify-between items-center mb-2 mt-4" required>
                <label for="file" class="mx-2 font_title_first lg:w-1/2 titre3 mt-2" required>Fichier image</label>
                
                <input name="file" type="file" class="Upload border Placeholder titre3">
            </div>
           <div class="flex flex-row">
            <div class="flex flex-row justify-between items-center mb-2 mt-6" required>
                <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] ex" required></label>
                <label  class="mx-2 font_title_first lg:w-1/2 size" required></label>
                
               
            </div>
            
            <div class="flex flex-row justify-between items-center mb-2" required>
                
                <div class="pr lg:w-1/2 hidden flex flex-row flex-wrap justify-between">
                    <label for="file" class="mx-2 font_title_first  label" ></label>
                    <label  class="mx-2 font_title_first  size" required></label>
                </div>
                <progress min="0" max="100" class="pl hidden" value="0" style="color:#4ADE80">
            
                </progress>
               
               
               
            </div>
           </div>

           <div class="w-full flex flex-col items-center justify-center mt-2">
            <button class="p-2 my-2 text-white bg-green-400 border-2 w-[600px] border-green-400 font_title_first titre2" type="submit">
                Ajouter l'image
            </button>
            <a href="/dashboard/galerie/add" class="p-2 my-2 text-white flex justify-center bg-red-400 border-2 w-[600px] border-red-400 font_title_first titre2">
                Annuler
            </a>
        </div>  
        
        
        </div>
    </form>
    
    
</div>




@endsection

