@extends('vitrine.components.app')

@section('page_title')
Contact
@endsection

@section('content')

<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Contactez-nous</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="{{route('Home')}}">JAYDEN FOOTBALL ACADEMY</a></li>
         
          <li class="active">Contactez-nous</li>
        </ul>
      </div>
    </div>
</section>
  <!-- Section Contact-->
  <section class="section section-variant-1 bg-gray-100">
    <div class="container flex flex-col w-full">
      <div class="flex w-full">
          @if (session('success'))
            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5 w-full" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                  
                    <p class="text-sm Placeholder ">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
          @endif
          @if (session('error'))
              <div class="bg-red-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
                  <div class="flex">
                      <div class="py-1"><svg class="fill-current h-6 w-6 text-gred-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                      <div>
                    
                      <p class="text-sm Placeholder">{{ session('error') }}</p>
                      </div>
                  </div>
              </div>
          @endif
      </div>
      <div class="row row-50">
        <div class="col-lg-7 col-xl-8">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Entrer en contact
              </h5>
            </div>
          </article>
          <form class="rd-form "   method="post" action="{{route('contact-create')}}">

            @csrf
            <div class="row row-10 row-narrow">
              <div class="col-md-6">
                <div class="form-wrap">
                  <label class="form-label" for="form-user-name-1">Votre Nom</label>
                  <input class="form-input" id="form-user-name-1" type="text" name="name" required >
                 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrap">
                  <label class="form-label" for="form-user-phone">Télephone</label>
                  <input class="form-input" id="form-user-phone" type="text" name="phone" required >
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-wrap">
                  <label class="form-label" for="form-message">Message</label>
                  <textarea class="form-input" id="form-message" name="message" required></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrap">
                  <label class="form-label" for="form-email">E-mail</label>
                  <input class="form-input" id="form-email" type="email" name="email" required>
                </div>
              </div>
              <div class="col-md-6">
                <button class="button button-lg button-primary " type="submit">Envoyer maintenant</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-5 col-xl-4">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Contact Details
              </h5>
            </div>
          </article>
          <div class="contact-list">
            <dl>
              <dt>E-mail</dt>
              <dd><span class="icon icon-primary mdi mdi-email-outline"></span><a class="link" href="mailto:#">jaydenfootballacademy@gmail.com</a></dd>
            </dl>
            <dl>
              <dt>Address</dt>
              <dd><span class="icon icon-primary mdi mdi-map-marker"></span>
                <a class="link" href="#">Cotonou, Littoral, Benin, LOT 691 Dandji
            </a></dd>
            </dl>
            <dl>
              <dt>Téléphone</dt>
              <dd><span class="icon icon-primary mdi mdi-phone"></span><a class="link link-md" href="tel:#">+229 687 322 37 </a></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection