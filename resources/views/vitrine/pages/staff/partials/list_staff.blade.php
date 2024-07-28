<section class="section section-sm bg-gray-100">
    <div class="container">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Staff Techniques
          </h5>
        </div>
      </article>
      <div class="row row-30">
        @foreach ($officiels as $officiel )
        <div class="col-sm-6 col-lg-4">
            <!-- Player Info Modern-->
            @include('vitrine.pages.staff.partials.staff')
          </div>
        @endforeach

      </div>
    </div>
</section>
