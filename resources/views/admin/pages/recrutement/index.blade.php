@extends('admin.components.app')

@section('page_title')
recrutement
@endsection

@section('page_content')
<div class="w-full ">
   
    <div class="flex items-center justify-center">
        <h1 class="font_title_first text-xl paragraph">Liste des demandes de recrutement </h1>
    </div>
   @forelse ($listes as $liste )

   <div class="mt-6">
    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <span class="font-light text-gray-600 Placeholder paragraph">{{  $liste->created_at}}</span>

            <a  class="px-2 py-1 font-bold text-white  rounded bg-[#4287F5] paragraph">
                {{  $liste->nom}}  {{  $liste->prenom}}
            </a>

            <a href="{{route('recrutement-voir',['id'=>$liste->id])}}" class="text-blue-500 hover:underline font_title_first paragraph">Voir toute la demande</a>
           
           
        </div>
        
       
    </div>
   </div>
   
   
       
   @empty
   <div class="w-full min-h-[50vh] flex flex-col justify-center items-center">
    <h1 class="mt-6 Placeholder">Auccune demande </h1>
   </div>
       
   @endforelse

     
   
   
    
    
</div>
@endsection