@extends('vitrine.components.app')

@section('page_title')
Albums
@endsection

@section('content')

 <!-- Section Breadcrumbs-->
 <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Albums</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">JAYDEN FOOTBALL ACADEMY</a></li>
          <li><a href="#">Features</a></li>
          <li class="active">Albums</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Section Album-->
  <section class="section section-variant-1 bg-gray-100">
    <div class="container">
      <div class="row row-30">
        <div class="col-xs-8 col-sm-6 col-lg-4">
          <!-- Thumbnail Modern-->
          <article class="thumbnail-modern">
            <div class="swiper-container swiper-slider" data-autoplay-hover="true" data-autoplay-hover-delay="1500" data-swiper='{"loop":false,"autoplay":false,"simulateTouch":false,"effect":"fade"}'>
              <div class="swiper-wrapper" data-lightgallery="group">
                <div class="swiper-slide"><a href="images/album1-image-1-1200x667-original.jpg" data-lightgallery="item"><img src="images/album1-image-1-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album1-image-2-1199x800-original.jpg" data-lightgallery="item"><img src="images/album1-image-2-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album1-image-3-800x800-original.jpg" data-lightgallery="item"><img src="images/album1-image-3-370x295.jpg" alt="" width="370" height="295"></a></div>
              </div>
            </div>
            <div class="thumbnail-modern-caption">
              <h6 class="thumbnail-modern-title">Album #1</h6>
              <time class="thumbnail-modern-date" datetime="2024-11">November 2024</time>
            </div>
          </article>
        </div>
        <div class="col-xs-8 col-sm-6 col-lg-4">
          <!-- Thumbnail Modern-->
          <article class="thumbnail-modern">
            <div class="swiper-container swiper-slider" data-autoplay-hover="true" data-autoplay-hover-delay="1500" data-swiper='{"loop":false,"autoplay":false,"simulateTouch":false,"effect":"fade"}'>
              <div class="swiper-wrapper" data-lightgallery="group">
                <div class="swiper-slide"><a href="images/album2-image-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/album2-image-1-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album2-image-2-1200x696-original.jpg" data-lightgallery="item"><img src="images/album2-image-2-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album2-image-3-1200x797-original.jpg" data-lightgallery="item"><img src="images/album2-image-3-370x295.jpg" alt="" width="370" height="295"></a></div>
              </div>
            </div>
            <div class="thumbnail-modern-caption">
              <h6 class="thumbnail-modern-title">Album #2</h6>
              <time class="thumbnail-modern-date" datetime="2024-12">December 2024</time>
            </div>
          </article>
        </div>
        <div class="col-xs-8 col-sm-6 col-lg-4">
          <!-- Thumbnail Modern-->
          <article class="thumbnail-modern">
            <div class="swiper-container swiper-slider" data-autoplay-hover="true" data-autoplay-hover-delay="1500" data-swiper='{"loop":false,"autoplay":false,"simulateTouch":false,"effect":"fade"}'>
              <div class="swiper-wrapper" data-lightgallery="group">
                <div class="swiper-slide"><a href="images/album3-image-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/album3-image-1-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album3-image-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/album3-image-2-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album3-image-3-800x800-original.jpg" data-lightgallery="item"><img src="images/album3-image-3-370x295.jpg" alt="" width="370" height="295"></a></div>
              </div>
            </div>
            <div class="thumbnail-modern-caption">
              <h6 class="thumbnail-modern-title">Album 3</h6>
              <time class="thumbnail-modern-date" datetime="2024-01">January 2024</time>
            </div>
          </article>
        </div>
        <div class="col-xs-8 col-sm-6 col-lg-4">
          <!-- Thumbnail Modern-->
          <article class="thumbnail-modern">
            <div class="swiper-container swiper-slider" data-autoplay-hover="true" data-autoplay-hover-delay="1500" data-swiper='{"loop":false,"autoplay":false,"simulateTouch":false,"effect":"fade"}'>
              <div class="swiper-wrapper" data-lightgallery="group">
                <div class="swiper-slide"><a href="images/gallery-image-3-1195x800-original.jpg" data-lightgallery="item"><img src="images/album4-image-1-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album4-image-2-1200x770-original.jpg" data-lightgallery="item"><img src="images/album4-image-2-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album4-image-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/album4-image-3-370x295.jpg" alt="" width="370" height="295"></a></div>
              </div>
            </div>
            <div class="thumbnail-modern-caption">
              <h6 class="thumbnail-modern-title">Album 4</h6>
              <time class="thumbnail-modern-date" datetime="2024-02">February 2024</time>
            </div>
          </article>
        </div>
        <div class="col-xs-8 col-sm-6 col-lg-4">
          <!-- Thumbnail Modern-->
          <article class="thumbnail-modern">
            <div class="swiper-container swiper-slider" data-autoplay-hover="true" data-autoplay-hover-delay="1500" data-swiper='{"loop":false,"autoplay":false,"simulateTouch":false,"effect":"fade"}'>
              <div class="swiper-wrapper" data-lightgallery="group">
                <div class="swiper-slide"><a href="images/gallery-image-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/album5-image-1-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album5-image-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/album5-image-2-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album5-image-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/album5-image-3-370x295.jpg" alt="" width="370" height="295"></a></div>
              </div>
            </div>
            <div class="thumbnail-modern-caption">
              <h6 class="thumbnail-modern-title">Album 5</h6>
              <time class="thumbnail-modern-date" datetime="2024-03">March 2024</time>
            </div>
          </article>
        </div>
        <div class="col-xs-8 col-sm-6 col-lg-4">
          <!-- Thumbnail Modern-->
          <article class="thumbnail-modern">
            <div class="swiper-container swiper-slider" data-autoplay-hover="true" data-autoplay-hover-delay="1500" data-swiper='{"loop":false,"autoplay":false,"simulateTouch":false,"effect":"fade"}'>
              <div class="swiper-wrapper" data-lightgallery="group">
                <div class="swiper-slide"><a href="images/album6-image-1-1190x800-original.jpg" data-lightgallery="item"><img src="images/album6-image-1-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album6-image-2-1199x800-original.jpg" data-lightgallery="item"><img src="images/album6-image-2-370x295.jpg" alt="" width="370" height="295"></a></div>
                <div class="swiper-slide"><a href="images/album6-image-3-1117x800-original.jpg" data-lightgallery="item"><img src="images/album6-image-3-370x295.jpg" alt="" width="370" height="295"></a></div>
              </div>
            </div>
            <div class="thumbnail-modern-caption">
              <h6 class="thumbnail-modern-title">Album 6</h6>
              <time class="thumbnail-modern-date" datetime="2024-04">April 2024</time>
            </div>
          </article>
        </div>
      </div>
    </div>
</section>

@endsection