<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">
  <head>

    <title>JAYDEN ACADEMY - @yield('page_title') </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="landing_assets/assets/image/logo_s_b_crop.png " type="image/x-icon">
    <!-- Stylesheets
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600,900%7CRoboto:400,900">
    --><link rel="stylesheet" href="/landing_assets/css/bootstrap.css">
    <link rel="stylesheet" href="/landing_assets/css/fonts.css">
    <link rel="stylesheet" href="/landing_assets/css/font.css">
    <link rel="stylesheet" href="/landing_assets/css/tailwindcss.css">
    <link rel="stylesheet" href="/landing_assets/css/style.css" id="main-styles-link">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('page_css')
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      @include('vitrine.components.layouts.header')
      <!-- Swiper-->


      <!-- Latest News-->
      @yield('content')
      <!-- Page Footer-->
     @include('vitrine.components.layouts.footer')
      <!-- Modal Video-->
      @include('vitrine.components.layouts.video_modal')
    </div>
    <!-- PANEL-->
    <div class="layout-panel-wrap">
      <div class="layout-panel">
        <!-- <button class="layout-panel-toggle" data-custom-toggle=".layout-panel-wrap"><span></span></button>-->
        <div class="layout-panel-content">
          <h6>Choose your color scheme:</h6>
          <div class="theme-switcher-list">
            <button class="theme-switcher-list-item" data-theme-name="soccer">Soccer</button>
            <button class="theme-switcher-list-item" data-theme-name="baseball">Baseball</button>
            <button class="theme-switcher-list-item" data-theme-name="basketball">Basketball</button>
            <button class="theme-switcher-list-item" data-theme-name="billiards">Billiards</button>
            <button class="theme-switcher-list-item" data-theme-name="bowling">Bowling</button>
            <button class="theme-switcher-list-item" data-theme-name="rugby">Rugby</button>
            <button class="theme-switcher-list-item" data-theme-name="tennis">Tennis</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="/landing_assets/js/core.min.js"></script>
    <script src="/landing_assets/js/script.js"></script>
    <script src="/landing_assets/js/Abdoul/animation.js"></script>
    <script src="/landing_assets/js/Abdoul/getData.js"></script>
   
    @yield('page_script')
     <!-- Javascript-->
          
</html>
