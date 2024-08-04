@extends('admin.components.app')

@section('page_content')

</section>
<!-- Section Gallery-->
<section class="section section-variant-1  text-center">
  <div class="container">
    <div class="row row-30 w-full" data-lightgallery="group">
      @forelse ($datas as $data )
          <div class="col-xs-8 col-sm-6 col-lg-4 shadow flex flex-col justify-between items-center my-4">
              <div>
                  
                  <article class="thumbnail-classic">
                    @if ($data->type == 'video')
                        <a class="thumbnail-classic-figure paragraph" href="{{ asset('storage/'.$data->link) }}">
                            <video class="w-[370px] h-[340px] object-cover object-top" controls>
                                <source src="{{ asset('storage/'.$data->link) }}" type="video/mp4">
                                Votre navigateur ne supporte pas la balise vidéo.
                            </video>
                        </a>
                    @else
                        <a class="thumbnail-classic-figure paragraph" href="{{ asset('storage/'.$data->fichier_image) }}">
                            <img src="{{ asset('storage/'.$data->fichier_image) }}" alt="{{ $data->nom }}" class="w-[370px] h-[340px] object-cover object-top">
                        </a>
                    @endif
                </article>
                
              </div>
              <div class="bg-blue-400 w-full">
                  <h3 class="paragraph">{{ $data->nom }}</h3>
              </div>
              <div class="mt-2 flex flex-row justify-between items-center">
                  <a href="{{ route('galerie-delete', ['id' => $data->id]) }}" class="rounded bg-red-500 border-red-500 p-2 text-white titre2 text-xs my-2">Supprimer</a>
              </div>
          </div>
      @empty
          <div class="flex flex-row h-[70vh] justify-center items-center w-full">
              <h1 class="text-base font-semibold">Aucun fichier</h1>
          </div>
      @endforelse
  </div>
  
  </div>
</section>

@endsection