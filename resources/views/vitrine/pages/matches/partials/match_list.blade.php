<section class="section section-sm bg-gray-100">
    <div class="container">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Prochainement
          </h5>
        </div>
      </article>
      <div class="row row-30 mb-3">
        @foreach ($matches as $matche )
        <div class="col-12">
            @include('vitrine.pages.matches.partials.next_match')
         </div>
        @endforeach

      </div>

      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Résultats
          </h5>
        </div>
      </article>


      <div class="row row-30 mb-3">
      @foreach ($matches as $matche )
      <div class="col-md-6">
            @include('vitrine.pages.matches.partials.prev_match')
         </div>
        @endforeach

      </div>

    </div>
</section>
