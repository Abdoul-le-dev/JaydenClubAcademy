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
                            <h3 class=" font-semibold titre2">Informations Personnel du Candidat</h3>
                        </div>
                        <div class="flex flex-row justify-between my-4">
                            <h3 class=" titre4">Nom: <span class="paragraph">{{$liste->nom}}</span></h3>
                            <h3 class="titre4">Prenom: <span class="paragraph">{{$liste->prenom}}</span></h3>
                            <h3 class="titre4">Date de naissance: <span class="paragraph">{{$liste->date}}</span></h3>
                            <h3 class="titre4">Genre: <span class="paragraph">{{$liste->genre}}</span></h3>
                        </div>
                        <div class="flex flex-row justify-between my-2 w-1/2">
                            <h3 class="titre4">Residence: <span class="paragraph">{{$liste->nom}}</span></h3>
                            <h3 class="titre4">Nationnalité: <span class="paragraph">{{$liste->prenom}}</span></h3>
                            
                        </div>
                        <div class="flex justify-center items-center my-4">
                            <h3 class=" font-semibold titre2">Informations sur ces motivations</h3>
                        </div>
                        <div class="flex flex-col justify-between my-4">
                            <h3 class=" my-2 titre4">Êtes vous scolarisé ? si oui ou ? votre niveau actuelle:</h3>
                            <p class="paragraph"><span>{{$liste->message1}}</span></p>
                        
                        </div>
                        <div class="flex flex-col justify-between my-4">
                            <h3 class=" my-2 titre4">Êtes vous disponiblité pour un entretient virtuelle ? si oui quand ?</h3>
                            <p class="paragraph"><span>{{$liste->message2}}</span></p>
                        
                        </div>
                        <div class="flex flex-col justify-between my-4">
                            <h3 class=" my-2 titre4">Pourquoi le football ? et pourquoi nous ?</h3>
                            <p class=" paragraph"><span>{{$liste->message3}}</span></p>
                        
                        </div>
                        <div class="flex justify-center items-center my-2">
                            <h3 class=" font-semibold titre2">Contact du titeur légal</h3>
                        </div>
                        <div class="flex flex-row justify-between my-4">
                            <h3 class="titre4">Numero: <span class="paragraph">{{$liste->telephone}}</span></h3>
                            <h3 class="titre4">Email: <span class="paragraph">{{$liste->email}}</span></h3>
                        
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