<section class="section section-sm bg-gray-100">
    <div class="container">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Nos Joueurs
          </h5>
        </div>
      </article>
      <div class="row row-30">
        @foreach ($joueurs as $joueur )
        <div class="col-sm-6 col-lg-4">
            <!-- Player Info Modern-->
            @include('vitrine.pages.joueur.partials.single_joueur')
          </div>
        @endforeach
      </div>
    </div>
</section>






