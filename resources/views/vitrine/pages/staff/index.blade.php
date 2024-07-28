@extends('vitrine.components.app')

@section('page_title')
les membres du staff
@endsection

@section('content')

 <!-- Section Breadcrumbs-->
 <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Membres du Staff</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">JAYDEN FOOTBALL ACADEMY</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Staff</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Section Album-->
    @include('vitrine.pages.staff.partials.list_staff')

@endsection
