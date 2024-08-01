@extends('vitrine.components.app')
@section('content')
<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Mot de passe oublié</h3>

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
                <form action="{{ route('password_reset') }}" method="post">
                    @csrf
                    <div class="form-wrap mb-3">
                        <label class="form-label" for="form-register-email">E-mail</label>
                        <input class="form-input" id="form-register-email" type="email" name="email">
                      </div>

                      <button class="button button-lg button-primary button-block" type="submit">Envoyer</button>
                </form>
            </div>
           </div>
        </div>
      </div>
    </div>
  </section>
@endsection
