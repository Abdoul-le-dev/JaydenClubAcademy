@extends('admin.components.app')

@section('page_content')

</section>
<!-- Section Gallery-->
<section class="section section-variant-1  text-center">
  <div class="container">
    <div class="row row-30 w-full" data-lightgallery="group">

        @forelse ($datas as $data )

       
          <div class="col-xs-8 col-sm-6 col-lg-4 shadow flex flex-col justify-between items-center my-4 ">
          
           <div class="">
            <article class="thumbnail-classic ">

              <a class="thumbnail-classic-figure paragraph" href="{{asset('storage/'.$data->fichier_image)}}" data-lightgallery="item">
                
                <img src="{{  asset('storage/'.$data->fichier_image) }}" alt="{{ $data->nom }}" width="370" height="340">
              
              </a>

              

            </article>
           </div>
           <div class=" bg-blue-400 w-full">
            <h3 class="paragraph">{{ $data->nom }}</h3>
           </div>
           <div class="mt-2 flex :flex-row justify-between items-center">
           
            <a href="{{route('galerie-delete',['id'=> $data->id])}}" class="rounded bg-red-500 border-red-500  p-2 text-white titre2 text-xs my-2 titre2 ">Supprimer </a>
        </div>
           
            
        </div>
       
        
            
        @empty

        <div class="flex flex-row h-[70vh] justify-center items-center w-full">

            
            <h1 class="text-base font-semibold">Auccun fichier</h1>
            

            
        </div>
            
        @endforelse
      
     
    </div>
  </div>
</section>

@endsection