@extends('vitrine.components.app')

@section('page_title')
les membres du staff
@endsection

@section('content')

 <!-- Section Breadcrumbs-->
 <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Membres des joueurs</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="/">JAYDEN FOOTBALL ACADEMY</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Joueurs</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Section Album-->
    @include('vitrine.pages.joueur.partials.list_joueur')

@endsection
