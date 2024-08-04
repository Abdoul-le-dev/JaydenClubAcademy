@extends('vitrine.components.app')

@section('page_title')
Calendriers et résultats
@endsection

@section('content')

 <!-- Section Breadcrumbs-->
 <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Calendrier et résultats</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">JAYDEN FOOTBALL ACADEMY</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Calendriers et résultats</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Section Album-->
    @include('vitrine.pages.matches.partials.match_list')

@endsection
