@extends('vitrine.components.app')
@section('content')
<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Login and Register</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Features</a></li>
          <li class="active">Login and Register</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Section Login/register-->
  <section class="section section-variant-1 bg-gray-100">
    <div class="container">
      <div class="row row-50 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6">
          <div class="card-login-register" id="card-l-r">
            <div class="card-top-panel">
              <div class="card-top-panel-left">
                <h5 class="card-title card-title-login">Login</h5>
                <h5 class="card-title card-title-register">Register</h5>
              </div>
              <div class="card-top-panel-right"><span class="card-subtitle"><span class="card-subtitle-login">Register now</span><span class="card-subtitle-register">Sign in</span></span>
                <button class="card-toggle" data-custom-toggle="#card-l-r"><span class="card-toggle-circle"></span></button>
              </div>
            </div>
            @include('auth.pages.partials.login_card')
            @include('auth.pages.partials.register_card')
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
