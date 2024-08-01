@extends('vitrine.components.app')
@section('content')
<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Modifier votre mot de passe</h3>

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
                <form action="{{ route('change_password') }}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger bg-danger" style="background: red;color:white">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="hidden" name="token" value="{{$token}}">

                    <div class="form-wrap mb-3">
                        <label class="form-label" for="form-register-email">Mot de passe</label>
                        <input class="form-input" type="password" name="password">
                      </div>
                      <div class="form-wrap mb-3">
                        <label class="form-label" for="form-register-email">Confirmer le mot de passe</label>
                        <input class="form-input" type="password" name="password2">
                      </div>

                      <button class="button button-lg button-primary button-block" type="submit">Changer </button>
                </form>
            </div>
           </div>
        </div>
      </div>
    </div>
  </section>
@endsection
