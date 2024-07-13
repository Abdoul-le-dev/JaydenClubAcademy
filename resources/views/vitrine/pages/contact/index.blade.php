@extends('vitrine.components.app')

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
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-7 col-xl-8">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Entrer en contact
              </h5>
            </div>
          </article>
          <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
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
                <button class="button button-lg button-primary button-block" type="submit">Envoyer maintenant</button>
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