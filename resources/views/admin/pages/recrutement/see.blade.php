@extends('admin.components.app')

@section('page_title')
recrutement
@endsection

@section('page_content')
<div class="w-full ">
   
    
   @forelse ($listes as $liste )

   
        <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                
                    <div class="flex flex-col">
                        <div class="flex justify-center items-center my-2">
                            <h3 class="paragraph font-semibold">Informations Personnel du Candidat</h3>
                        </div>
                        <div class="flex flex-row justify-between my-4">
                            <h3 class="paragraph">Nom: <span class="">{{$liste->nom}}</span></h3>
                            <h3 class="paragraph">Prenom: <span>{{$liste->prenom}}</span></h3>
                            <h3 class="paragraph">Date de naissance: <span>{{$liste->date}}</span></h3>
                            <h3 class="paragraph">Genre: <span>{{$liste->genre}}</span></h3>
                        </div>
                        <div class="flex flex-row justify-between my-2 w-[50%]">
                            <h3 class="paragraph">Residence: <span class="">{{$liste->nom}}</span></h3>
                            <h3 class="paragraph">Nationnalité: <span>{{$liste->prenom}}</span></h3>
                            
                        </div>
                        <div class="flex justify-center items-center my-4">
                            <h3 class="paragraph font-semibold">Informations sur ces motivations</h3>
                        </div>
                        <div class="flex flex-col justify-between my-4">
                            <h3 class="paragraph my-2">Êtes vous scolarisé ? si oui ou ? votre niveau actuelle:</h3>
                            <p class="paragraph"><span>{{$liste->message1}}</span></p>
                        
                        </div>
                        <div class="flex flex-col justify-between my-4">
                            <h3 class="paragraph my-2">Êtes vous disponiblité pour un entretient virtuelle ? si oui quand ?</h3>
                            <p class="paragraph"><span>{{$liste->message2}}</span></p>
                        
                        </div>
                        <div class="flex flex-col justify-between my-4">
                            <h3 class="paragraph my-2">Pourquoi le football ? et pourquoi nous ?</h3>
                            <p class="paragraph"><span>{{$liste->message3}}</span></p>
                        
                        </div>
                        <div class="flex justify-center items-center my-2">
                            <h3 class="paragraph font-semibold">Contact du titeur légal</h3>
                        </div>
                        <div class="flex flex-row justify-between my-4">
                            <h3 class="paragraph">Numero: <span class="">{{$liste->telephone}}</span></h3>
                            <h3 class="paragraph">Email: <span>{{$liste->email}}</span></h3>
                        
                        </div>
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