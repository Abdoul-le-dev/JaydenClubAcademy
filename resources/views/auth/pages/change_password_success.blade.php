@extends('vitrine.components.app')
@section('content')
<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Mot de passe changé</h3>

      </div>
    </div>
  </section>
  <!-- Section Login/register-->
  <section class="section section-variant-1 bg-gray-100">
    <div class="container">
      <div class="row row-50 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6">
           <div class="card">
            <div class="card-body">
                <div class="confirm d-flex flex-column justify-content-center align-items-center">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h3>Votre mot de passe est modifié avec succès!</h3>
                </div>
            </div>
           </div>
        </div>
      </div>
    </div>
  </section>
@endsection
