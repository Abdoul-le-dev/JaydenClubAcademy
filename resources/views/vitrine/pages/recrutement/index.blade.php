@extends('vitrine.components.app')

@section('page_title')
Admission
@endsection


@section('content')

<section class="section parallax-container breadcrumbs-wrap " data-parallax-img="landing_assets/assets/data/5.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Demande d'admission</h3>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="{{route('Home')}}">JAYDEN FOOTBALL ACADEMY</a></li>
         
          <li class="active">Admission </li>
        </ul>
      </div>
    </div>
</section>


<div class=" bg-[#F3F4F6]  flex flex-col w-full sm:justify-center  sm:items-center lg:flex-row ">

    <div class="w-[80%] lg:w-[60%] mt-10 mx-5 p-4 shadow rounded-sm bg-white my-5">

        <div class="flex justify-center items-center mt-2 p-2 ">
            <h1>Candidatez maintenant</h1>
        </div>

        <form action="">

            <div>
                <h3>Vous?</h3>
            </div>
            <div class="row row-10 row-narrow my-2">
                <div class="col-md-6">
                    <div class="form-wrap">
                    <label class="form-label" for="form-user-name-1">Votre Nom</label>
                    <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-wrap">
                    <label class="form-label" for="form-user-name-1">Votre Prénom</label>
                    <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                    
                    </div>
                </div>

            </div>    
        
            <div class="row row-10 row-narrow my-2">

                <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="form-user-name-1">Votre Date de naissance</label>
                      <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                     
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="form-user-name-1">Votre genre</label>
                      <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                     
                    </div>
                </div>
            </div>

            <div class="row row-10 row-narrow my-2">

                <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="form-user-name-1">Zone de residence actuel</label>
                      <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                     
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="form-user-name-1">Votre Nationnalité</label>
                      <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                     
                    </div>
                </div>
            </div>

           

            <div class="my-4">
                <h3>Question ?</h3>
            </div>

            <div class="col-md-12">
                <div class="form-wrap">

                  <label class="form-label" for="form-message">Êtes vous scolarisé ? si oui ou ? votre niveau actuelle</label>
                  <textarea class="form-input"  id="form-message" name="message" required></textarea>
                    
                </div>
            </div>

            <div class="col-md-12 my-4">
                <div class="form-wrap">
                  <label class="form-label" for="form-user-name-1">Êtes vous disponiblité pour un entretient virtuelle ? si oui quand ?</label>
                  <textarea class="form-input" id="form-message" name="message" required></textarea>
                 
                </div>
            </div>

            <div class="col-md-12 my-4">
                <div class="form-wrap">
                  <label class="form-label" for="form-message">Pourquoi le football ? et pourquoi nous ?</label>
                  <textarea class="form-input" id="form-message" name="message" required></textarea>
                 
                </div>
            </div>
            <div class="my-4">
                <h3>Vous joindre ?</h3>
            </div>
            
            <div class="row row-10 row-narrow my-2">

                <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="form-email">Votre mail ou celui de votre titeur légal</label>
                      <input class="form-input" id="form-email" type="text" name="name" required >
                     
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="form-user-phone">Votre numero de télephone ou celui de votre titeur légal</label>
                      <input class="form-input" id="form-user-phone" type="text" name="name" required >
                     
                    </div>
                </div>

            </div>

            <div class="col-md-12 ">
                <button class="button button-lg button-primary button-block" type="submit">Envoyer maintenant</button>
              </div>

        </form>

    </div>

    <div class="w-[80%] lg:w-[40%] max-h-[110vh] flex flex-col bg-white mx-5 p-4 my-5">

        <div class="flex flex-row mt-2 mb-6">

            <div class="mx-2">
                <img src="/landing_assets/assets/icon/admission.png" alt="admission" width="300" height="300">
            </div>
            <div>
                <div class="bg-blue-400 mb-4 mt-2 w-48 p-2">
                    <h1>Demande d'admission</h1>
                </div>
                <h4>La première étape pour intégrer notre école est de remplir ce formulaire de demande d'admission. Les informations se trouvant sur ce formulaire permettent à nos chargés d'admission de mieux comprendre vos attentes, de vous contacter par la suite et de passer à l'étape suivante : Notre journée de détection.</h4>
            </div>

        </div>

        <div class="flex flex-row mt-2 mb-6">

            <div class="mx-2">
                <img src="/landing_assets/assets/icon/jd.png" alt="jd" width="200" height="200">
            </div>
            <div>
                <div class="bg-blue-400 mb-4 mt-2 w-48 p-2">
                    <h1>Journée de détection</h1>
                </div>
                <h5>
                    Cette journée de détection nous permet d'évaluer le niveau global de votre enfant avec un test sportif et un test scolaire le matin ou l'après-midi.
                </h5>
            </div>
    
        </div>

        <div class="flex flex-row mt-2 mb-6">

            <div class="mx-2">
                <img src="/landing_assets/assets/icon/if.png" alt="jd" width="200" height="200">
            </div>
            <div>
                <div class="bg-blue-400 mb-4 mt-2 w-48 p-2">
                    <h1>Inscription finale</h1>
                </div>
                <h5>

                    Une fois votre enfant accepté (réponse en 24/48h) nos chargés d'admissions vous enverront le dossier d'inscription finale à remplir.
                    
                </h5>
            </div>
    
        </div>
        
        
    </div>

    

    

</div>

@endsection