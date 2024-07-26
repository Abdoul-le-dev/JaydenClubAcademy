@extends('admin.components.app')

@section('page_content')

<div class=" flex justify-center items-center">


    <div class="bg-white rounded-md   mt-10 flex flex-row  flex-wrap p-10 justify-center items-center " style="min-height: 60vh">
    
    
    
        <div class="p-5 border-2 border-indigo-200  rounded-lg flex flex-col justify-center items-center m-10 w-48">
            <img src="/landing_assets/assets/icon/image.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer">
            <a href="{{route('galerie-image')}}"> <h3 class="FP-Menu bg-indigo-200 p-2 rounded-md cursor-pointer hover:bg-indigo-300 nowrap w-36">Ajouter une image</h3></a>
        </div>
    
        
    
        <div class="p-5 border-2 border-indigo-200  rounded-lg flex flex-col justify-center items-center m-10 ">
            <img src="/landing_assets/assets/icon/video.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer">
            <a href="{{route('galerie-video')}}"><h3 class="FP-Menu bg-indigo-200 p-2 rounded-md cursor-pointer hover:bg-indigo-300">Ajouter une video</h3></a>
        </div>
    
    
    
    </div>
    
    
</div>
@endsection