@extends('admin.components.app')

@section('page_content')
<div class="w-full ">
   
    <div class="flex items-center justify-center">
        <h1 class="font_title_first text-xl paragraph">Liste des demandes </h1>
    </div>
   @forelse ($listes as $liste )

   <div class="mt-6">
    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder paragraph">{{ $liste->created_at}}</span><a href="#"
                class="px-2 py-1 font-bold text-gray-100   bg-[#4287F5] paragraph">{{ $liste->mail}}</a>
        </div>
        <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder paragraph">NOM: {{ $liste->nom}}</span><a href="#"
            class="px-2 py-1 font-bold text-gray-100  bg-[#4287F5] paragraph" href="tel:{{ $liste->phone}}">+229 {{ $liste->phone}}</a>
        </div>
        <div class="mt-2 flex flex-col">

            <p class="mt-2 text-gray-600 Placeholder font-semibold paragraph">Message: {{ $liste->object }}</p>
            
            
        </div>
        <div class="mt-4">

            <a href="mailto:{{$liste->mail}}" class="w-[200px] bg-green-400 rounded my-4 p-2 paragraph text-white">Repondre par email</a>

        </div>
    </div>
   </div>
   
       
   @empty
   <div class="w-full min-h-[80vh] flex justify-center items-center">
    <h1 class="mt-6 Placeholder paragraph text-black">Auccune demande </h1>
   </div>
       
   @endforelse

     
   
   
    
    
</div>
@endsection