@extends('vitrine.components.app')

@section('page_title')
A propos
@endsection

@section('content')
    
<section class="section parallax-container breadcrumbs-wrap " data-parallax-img="landing_assets/assets/data/5.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">A propos</h3>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="{{route('Home')}}">JAYDEN FOOTBALL ACADEMY</a></li>
         
          <li class="active">A propos</li>
        </ul>
      </div>
    </div>
</section>

<div class="mt-5 flex flex-col w-full min-h-[250vh] ">

    <div class="flex flex-col justify-center items-center">
        <h3>Qui somme nous ?</h3>
    </div>

    <div class="flex flex flex-col mt-10 lg:flex-row">

        <div class=" lg:w-1/2 h-[300px] rounded-sm mx-4  rounded-full bg-black" >

            <img src="landing_assets/assets/data/3.jpg" alt="Image 2" class="inset-0 object-cover z-10 Image2 w-[450px] h-[300px]">

        </div>
        <div class="lg:w-1/2 p-4">
            <h4 class="mb-6">
                Bienvenue chez JAYDEN ACADEMY FOOTBALL !
            </h4>

            <p class="p-2">
                À Jayden Football Academy, nous croyons en la puissance de l'éducation et du sport pour façonner l'avenir de nos étudiants. Fondée avec passion, notre académie de sports-études propose un programme complet subdivisé en deux sections de formation, avec une gamme de sports dont le football. Nous croyons en nos jeunes talents et nous nous engageons à faire d'eux les meilleurs en leur offrant des stages et des opportunités d'apprentissage dans des clubs qui partagent nos valeurs, tant à l'international qu'au niveau local.
            </p>
            <button class=" hidden mt-4  lg:flex bg-yellow-400 p-2 w-48 lg:flex-row justify-center items-center rounded-sm ">

                <a href="tel:+229" class="text-white mr-4"><h3>Appelez nous</h3></a>
                <img src="https://cdn.prod.website-files.com/642be22edcd54d1803e6f276/642be22edcd54d378fe6f2ad_ArrowUpRight%20Black.svg" loading="lazy" alt="" class="arrow-upright-icon">

            </button>
            <div class="flex justify-center items-center lg:hidden">
                <button class="mt-4 bg-yellow-400 p-2 w-48 flex flex-row justify-center items-center rounded-sm">

                    <a href="tel:+229" class="text-white mr-4"><h3>Appelez nous</h3></a>
                    <img src="https://cdn.prod.website-files.com/642be22edcd54d1803e6f276/642be22edcd54d378fe6f2ad_ArrowUpRight%20Black.svg" loading="lazy" alt="" class="arrow-upright-icon">
    
                </button>
            </div>
        </div>

    </div>

    <div class="flex flex-col justify-center items-center mt-10">
        <h3>Notre mission ?</h3>
    </div>

    <div class="flex flex-col mt-10 lg:flex-row">

       

        <div class=" w-full lg:w-1/2 p-4">
            <h4 class="mb-6">
                JAYDEN ACADEMY FOOTBALL, notre mission 
            </h4>

            <p class="p-2">
              
                À Jayden Football Academy, notre mission est claire : encourager un parcours académique complet tout en cultivant le talent sportif de nos élèves. Nous créons un environnement éducatif stimulant où les jeunes esprits peuvent s'épanouir, tant sur le terrain que dans les salles de classe. Chez Jayden Football Academy, nous façonnons des leaders et des athlètes accomplis, prêts à relever les défis du monde du sport d'aujourd'hui. Notre approche holistique vise à développer non seulement les compétences sportives, mais aussi les valeurs de leadership et de résilience, préparant ainsi nos étudiants à exceller dans toutes les sphères de leur vie.

            </p>
           
        </div>


        <div class="w-full lg:w-1/2 h-[300px] rounded-sm mx-4  rounded-full " >

            <img src="landing_assets/assets/data/6.jpg" alt="Image 2" class="inset-0 object-cover z-10 Image2 w-[450px] h-[300px]">

        </div>
       
    </div>

    <div class="flex flex-col justify-center items-center mt-10">
        <h3>Une approche éducative unique</h3>
    </div>
    <div class="flex flex-col justify-center items-center mt-4 mx">
       <div class="w-[90%]">
        <p class=" ">Jayden Football Academy offre un modèle éducatif où passion et scolarité se conjuguent harmonieusement. Notre approche pédagogique, nourrie de bienveillance et d'exigence, met l'accent sur la qualité de l'enseignement et le travail psychologique. Nous proposons un accompagnement individualisé et constant, garantissant que chaque étudiant atteint son plus haut potentiel, tant sur le terrain qu'en classe. En intégrant des techniques de développement personnel et de résilience, nous assurons que nos jeunes talents s'épanouissent pleinement et sont préparés à relever tous les défis.</p>
    
       </div>
    </div>

    <div class="w-[90%] m-10  hidden lg:flex lg:flex-col justify-center">

        <div class="w-full m-10 flex flex-wrap justify-center lg:mb-[50px]">
            
            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/one.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Bien gérer</h3>
                    <p>Le temps pour obtenir les meilleures performances sportives et scolaires</p>
                </div>
            </div>
            
        
            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/two.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Suivre</h3>
                    <p>Rigoureusement les programmes de l'Éducation nationale et des supports pédagogiques adaptés.</p>
                </div>
            </div>
        
            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/three.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Valoriser</h3>
                    <p>Les efforts, les progressions, les compétences et le travail.</p>
                </div>
            </div>
        
            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/four.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Transmettre</h3>
                    <p>Les méthodes de travail avec un encadrement régulier et personnalisé.</p>
                </div>
            </div>
        </div>

        <div class="w-full m-10 flex flex-wrap justify-center">
            
            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/five.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Accompagner </h3>
                    <p>chaque jeune pour qu'il développe son sens des responsabilités et son autonomie.</p>
                </div>
            </div>

            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/six.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Connexion spirituel</h3>
                    <p>chaque jeune developpe un mental stable, une vision de la vie et une connexion spirituel.</p>
                </div>
            </div>

            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/seven.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Créer</h3>
                    <p>un espace de concertation et de coordination entre le jeune, sa famille, l'équipe enseignante et l'équipe sportive.</p>
                </div>
            </div>

            <div class="w-1/2 md:w-[20%] h-[150px] flex flex-col justify-center items-center mx-4 my-8 md:mx-10">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/eight.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Humilité sportive</h3>
                    <p>Promouvoir les valeurs d'humilité et de respect à travers le sport, tout en renforçant les liens entre les jeunes athlètes.</p>
                </div>
            </div>

        </div>
       
       
        
    
    </div>

    <div class="w-full m-10 flex flex-wrap   lg:hidden">

     
            
            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center ">
                <div class="flex flex-row rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/one.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Bien gérer</h3>
                    <p>Le temps pour obtenir les meilleures performances sportives et scolaires</p>
                </div>
            </div>
            
        
            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/two.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Suivre</h3>
                    <p>Rigoureusement les programmes de l'Éducation nationale et des supports pédagogiques adaptés.</p>
                </div>
            </div>
        
            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/three.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Valoriser</h3>
                    <p>Les efforts, les progressions, les compétences et le travail.</p>
                </div>
            </div>
        
            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/four.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Transmettre</h3>
                    <p>Les méthodes de travail avec un encadrement régulier et personnalisé.</p>
                </div>
            </div>
        

       
            
            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/five.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Accompagner </h3>
                    <p>chaque jeune pour qu'il développe son sens des responsabilités et son autonomie.</p>
                </div>
            </div>

            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/six.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Connexion spirituel</h3>
                    <p>chaque jeune developpe un mental stable, une vision de la vie et une connexion spirituel.</p>
                </div>
            </div>

            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/seven.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Créer</h3>
                    <p>un espace de concertation et de coordination entre le jeune, sa famille, l'équipe enseignante et l'équipe sportive.</p>
                </div>
            </div>

            <div class="w-2/3 h-[250px] flex flex-col justify-center items-center">
                <div class="flex flex-row justify-center items-center rounded-full bg-white p-2 w-24">
                    <img src="landing_assets/assets/data/eight.png" alt="Image 2" width="55" height="70" class="m-4">
                </div>
                <div class="bg-white text-center">
                    <h3 class="mb-4">Humilité sportive</h3>
                    <p>Promouvoir les valeurs d'humilité et de respect à travers le sport, tout en renforçant les liens entre les jeunes athlètes.</p>
                </div>
            </div>

       
       
       
        
    
    </div>

    <div class="m-10 w-[85%] hidden  lg:flex justify-center items-center">
        <div class="bg-[#F9F9F9] text-center p-4 rounded shadow-md">
            <!-- En-tête -->
            <h3 class="mb-4 text-xl font-semibold text-gray-800">Un parcours éducatif complet </h3>
            <!-- Paragraphe -->
            <p class="text-gray-600">
                Que votre enfant soit au collège ou au lycée, Sports Études Academy offre un parcours éducatif complet qui accompagne les jeunes à chaque étape de leur évolution. Nous préparons avec rigueur nos élèves pour un avenir prometteur, qu'ils aspirent à poursuivre des études supérieures, à exceller dans leur carrière sportive, ou à s’insérer dans le monde professionnel.
            </p>
        </div>
        
    </div>
    
    <div class="my-10  ml-6 w-[85%] flex lg:hidden justify-center items-center">
        <div class="bg-[#F9F9F9] text-center p-4 rounded shadow-md">
            <!-- En-tête -->
            <h3 class="mb-4 text-xl font-semibold text-gray-800">Un parcours éducatif complet </h3>
            <!-- Paragraphe -->
            <p class="text-gray-600">
                Que votre enfant soit au collège ou au lycée, Sports Études Academy offre un parcours éducatif complet qui accompagne les jeunes à chaque étape de leur évolution. Nous préparons avec rigueur nos élèves pour un avenir prometteur, qu'ils aspirent à poursuivre des études supérieures, à exceller dans leur carrière sportive, ou à s’insérer dans le monde professionnel.
            </p>
        </div>
        
    </div>


</div>

@endsection