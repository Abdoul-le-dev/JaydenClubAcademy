@extends('vitrine.components.app')

@section('page_title')
Acceuil
@endsection

@section('content')
<!-- Abdoul Page-->
<!-- jayden club information-->

<section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-swiper='{"autoplay":{"delay":4000},"simulateTouch":false,"effect":"fade"}'>
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center" data-slide-bg="/landing_assets/images/slider-1-slide-1-1920x671.jpg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">We play Soccer</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">like no one else in the united states</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="/landing_assets/images/slider-1-slide-2-1920x671.jpg">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-xl-5">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">We Are Pros</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">in Everything Concerning Soccer</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="/landing_assets/images/slider-1-slide-3-1920x671.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Best Website</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">for soccer news, updates, <br class="d-none d-xl-block"> and game results</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</section>

<section class="bg-[#F3F4F6] flex flex-row   w-full h-[600px]">

  <div class="flex flex-col  w-[60%] h-[300px] ">
      
    <div class="flex flex-row w-full">
      <div class="p-4">
        <img src="" alt="Image 1" class="inset-0  object-cover z-10 Image1 w-[350px] h-[250px]">
    
      </div>
     
      <div class="p-4">
        <img src="" alt="Image 2" class="inset-0 object-cover z-10 Image2 w-[350px] h-[250px]">
    
      </div>
    </div>
    <div class="flex flex-row w-full">
      <div class="p-4">
        <img src="" alt="Image 2" class="inset-0  object-cover z-10 Image3 w-[350px] h-[250px]">
    
      </div>
     
      <div class="p-4">
        <img src="" alt="Image 4" class="inset-0 object-cover z-10 Image4 w-[350px] h-[250px]">
    
      </div>
    </div>
    
  </div>

 <div class="flex flex-col justify-center items-center w-[40%] ">
    <h3 class="text-3xl font-semibold mb-4">JAYDEN FOOTBALL ACADEMY</h3>
    <p class="text-gray-700 mb-4 p-2">
      Fondée en mars 2024 et basée au Bénin, Jayden Football Academy se consacre à la formation et au développement des talents footballistiques. Notre objectif est d'offrir à chaque jeune talent la possibilité de s'épanouir, quel que soit son contexte financier. Nous recrutons des joueurs prometteurs à travers l'Afrique, leur fournissant une formation de qualité et des opportunités de développement professionnel dans le monde du football.
    </p>
    <a href="our-club/index.htm" class="mt-4 inline-block px-6 py-3 hover:text-white hover:bg-black border border-gray-300 text-gray-700 rounded-md ">
      Obtenir plus d'informations
    </a>
 </div>

</section>

  <!-- Latest News-->
<section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-8">
          <div class="main-component">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">BLOG D'ACTUALITÉS
                </h5><a class="button button-xs button-gray-outline" href="news-1.html">Toute les nouvelles</a>
              </div>
            </article>
            <div class="row row-30">
              @foreach ($datas as $data )

              <div class="col-md-6">
                <!-- Post Future-->
                <article class="post-future"><a class="post-future-figure" href="blog-post.html">
                  <img src="/storage/fichier/AaTuNs2d5GFoYqaNnpgw6Igen54iOnt4C4xb78SE.jpg" alt="" width="368" height="287"></a>
                  <div class="post-future-main">
                    <h4 class="post-future-title"><a href="blog-post.html">{{$data->titre}}</a></h4>
                    <div class="post-future-meta">
                      <!-- Badge-->
                      <div class="badge badge-secondary">The Team
                      </div>
                      <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2024">{{$data->created_at}}</time>
                      </div>
                    </div>
                    <hr>
                    <div class="post-future-text">
                      <p>{{ Str::limit($data->description, 100) }}</p>
                    </div>
                    <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="{{route('model-article',['id' =>$data->id])}}">Read more</a>
                      <div class="post-future-share">
                        <div class="inline-toggle-parent">
                          <div class="inline-toggle icon material-icons-share"></div>
                          <div class="inline-toggle-element">
                            <ul class="list-inline">
                              <li>Share</li>
                              <li><a class="icon fa-facebook" href="#"></a></li>
                              <li><a class="icon fa-twitter" href="#"></a></li>
                              <li><a class="icon fa-google-plus" href="#"></a></li>
                              <li><a class="icon fa-instagram" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
                
              @endforeach
              
             
             
            </div>
          </div>
          <div class="main-component">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Nos videos d'entraînements 
                </h5>
                <a class="button button-xs button-gray-outline">JAYDEN ACADEMIE FOOTBALL</a>
              </div>
            </article>
            <!-- Game Result Bug-->
            <article class="game-result">
              <div class="game-info game-info-creative">
                <p class="game-info-subtitle">Real Stadium -
                  <time datetime="08:30"> 08:30 PM</time>
                </p>
                <h3 class="game-info-title">Champions league semi-final 2024</h3>
                <div class="game-info-main">
                  <div class="game-info-team game-info-team-first">
                    <figure><img src="/landing_assets/images/team-sportland-75x99.png" alt="" width="75" height="99">
                    </figure>
                    <div class="game-result-team-name">Sportland</div>
                    <div class="game-result-team-country">Italy</div>
                  </div>
                  <div class="game-info-middle game-info-middle-vertical">
                    <time class="time-big" datetime="2024-12-31"><span class="heading-3">Fri 31</span> December 2024
                    </time>
                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                    <div class="group-sm">
                      <div class="button button-sm button-share-outline">Share
                        <ul class="game-info-share">
                          <li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                          <li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                          <li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          <li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </div><a class="button button-sm button-primary" href="#">Buy tickets</a>
                    </div>
                  </div>
                  <div class="game-info-team game-info-team-second">
                    <figure><img src="/landing_assets/images/team-dream-team-91x91.png" alt="" width="91" height="91">
                    </figure>
                    <div class="game-result-team-name">Dream Team</div>
                    <div class="game-result-team-country">Spain</div>
                  </div>
                </div>
              </div>
              <div class="game-info-countdown">
                <div class="countdown countdown-bordered" data-type="until" data-time="31 Dec 2024 16:00" data-format="dhms" data-style="short"></div>
              </div>
            </article>
          </div>
        </div>
        <!-- Aside Block-->
        <div class="col-lg-4">
          <aside class="aside-components">
            <div class="aside-component">
              <div class="owl-carousel-outer-navigation-1">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">DERNIERS RÉSULTATS
                    </h5>
                    <div class="owl-carousel-arrows-outline">
                      <div class="owl-nav">
                        <button class="owl-arrow owl-arrow-prev"></button>
                        <button class="owl-arrow owl-arrow-next"></button>
                      </div>
                    </div>
                  </div>
                </article>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-nav-custom=".owl-carousel-outer-navigation-1">
                  <!-- Game Result Creative-->
                  <article class="game-result game-result-creative">
                    <div class="game-result-main-vertical">
                      <div class="game-result-team game-result-team-horizontal game-result-team-first">
                        <figure class="game-result-team-figure"><img src="/landing_assets/images/team-sportland-31x41.png" alt="" width="31" height="41">
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Sportland</div>
                          <div class="game-result-team-country">Los angeles</div>
                        </div>
                        <div class="game-result-score game-result-score-big game-result-team-win">2<span class="game-result-team-label game-result-team-label-right">Win</span>
                        </div>
                      </div><span class="game-result-team-divider">VS</span>
                      <div class="game-result-team game-result-team-horizontal game-result-team-second">
                        <figure class="game-result-team-figure"><img src="/landing_assets/images/team-fenix-40x32.png" alt="" width="40" height="32">
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Real madrid</div>
                          <div class="game-result-team-country">Spain</div>
                        </div>
                        <div class="game-result-score game-result-score-big">1
                        </div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>Home</li>
                        <li>New Yorkers Stadium</li>
                        <li>
                          <time datetime="2024-04-14">April 14, 2024</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- Game Result Creative-->
                  <article class="game-result game-result-creative">
                    <div class="game-result-main-vertical">
                      <div class="game-result-team game-result-team-horizontal game-result-team-first">
                        <figure class="game-result-team-figure"><img src="/landing_assets/images/team-bavaria-fc-26x34.png" alt="" width="26" height="34">
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Bavaria FC</div>
                          <div class="game-result-team-country">Germany</div>
                        </div>
                        <div class="game-result-score game-result-score-big">2
                        </div>
                      </div><span class="game-result-team-divider">VS</span>
                      <div class="game-result-team game-result-team-horizontal game-result-team-second">
                        <figure class="game-result-team-figure"><img src="/landing_assets/images/team-athletic-33x30.png" alt="" width="33" height="30">
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Atletico</div>
                          <div class="game-result-team-country">USA</div>
                        </div>
                        <div class="game-result-score game-result-score-big game-result-team-win">3<span class="game-result-team-label game-result-team-label-right">Win</span>
                        </div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>Away</li>
                        <li>Bavaria Stadium</li>
                        <li>
                          <time datetime="2024-04-14">April 14, 2024</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">In the spotlight
                  </h5><a class="button button-xs button-gray-outline" href="news-1.html">All news</a>
                </div>
              </article>
              <!-- List Post Classic-->
              <div class="list-post-classic">
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="/landing_assets/images/blog-element-1-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Raheem Sterling turns the tide for Manchester</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="/landing_assets/images/blog-element-2-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Prem in 90 seconds: Chelsea's crisis is over!</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="/landing_assets/images/blog-element-3-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Good vibes back at struggling Schalke</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="/landing_assets/images/blog-element-4-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Liverpool in desperate need of backup players</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
              </div>
            </div>
            {{-- <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Standings
                  </h5><a class="button button-xs button-gray-outline" href="standings.html">Full Standings</a>
                </div>
              </article>
              <!-- Table team-->
              <div class="table-custom-responsive">
                <table class="table-custom table-standings table-classic">
                  <thead>
                    <tr>
                      <th colspan="2">Team Position</th>
                      <th>W</th>
                      <th>L</th>
                      <th>PTS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span>1</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="/landing_assets/images/team-sportland-31x41.png" alt="" width="31" height="41">
                        </div>
                        <div class="team-title">
                          <div class="team-name">Sportland</div>
                          <div class="team-country">USA</div>
                        </div>
                      </td>
                      <td>153</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>2</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="/landing_assets/images/team-dream-team-34x34.png" alt="" width="34" height="34">
                        </div>
                        <div class="team-title">
                          <div class="team-name">Dream team</div>
                          <div class="team-country">Spain</div>
                        </div>
                      </td>
                      <td>120</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>3</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="/landing_assets/images/team-real-madrid-28x37.png" alt="" width="28" height="37">
                        </div>
                        <div class="team-title">
                          <div class="team-name">Real Madrid</div>
                          <div class="team-country">Spain</div>
                        </div>
                      </td>
                      <td>100</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>4</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="/landing_assets/images/team-celta-vigo-35x39.png" alt="" width="35" height="39">
                        </div>
                        <div class="team-title">
                          <div class="team-name">Celta Vigo</div>
                          <div class="team-country">Italy</div>
                        </div>
                      </td>
                      <td>98</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>5</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="/landing_assets/images/team-barcelona-30x35.png" alt="" width="30" height="35">
                        </div>
                        <div class="team-title">
                          <div class="team-name">Barcelona</div>
                          <div class="team-country">Spain</div>
                        </div>
                      </td>
                      <td>98</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>6</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="/landing_assets/images/team-bavaria-fc-26x34.png" alt="" width="26" height="34">
                        </div>
                        <div class="team-title">
                          <div class="team-name">Bavaria FC</div>
                          <div class="team-country">Germany</div>
                        </div>
                      </td>
                      <td>98</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> --}}
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Follow us
                  </h5>
                </div>
              </article>
              <!-- Buttons Media-->
              <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
                  <h4 class="button-media-title">50k</h4>
                  <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="#">
                  <h4 class="button-media-title">120k</h4>
                  <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="#">
                  <h4 class="button-media-title">15k</h4>
                  <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="#">
                  <h4 class="button-media-title">85k</h4>
                  <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
            </div>
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Our Awards
                  </h5>
                </div>
              </article>
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                                  <!-- Awards Item-->
                                  <div class="awards-item">
                                    <div class="awards-item-main">
                                      <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                                      </h4>
                                      <div class="divider"></div>
                                      <h5 class="awards-item-time">December 2014</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="/landing_assets/images/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                                    </div>
                                  </div>
                                  <!-- Awards Item-->
                                  <div class="awards-item">
                                    <div class="awards-item-main">
                                      <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                                      </h4>
                                      <div class="divider"></div>
                                      <h5 class="awards-item-time">June 2015</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="/landing_assets/images/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                                    </div>
                                  </div>
                                  <!-- Awards Item-->
                                  <div class="awards-item">
                                    <div class="awards-item-main">
                                      <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                                      </h4>
                                      <div class="divider"></div>
                                      <h5 class="awards-item-time">November 2016</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="/landing_assets/images/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                                    </div>
                                  </div>
              </div>
            </div>
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Gallery
                  </h5>
                </div>
              </article>
              <article class="gallery" data-lightgallery="group">
                <div class="row row-10 row-narrow">
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="/landing_assets/images/gallery-soccer-1-original.jpg"><img src="/landing_assets/images/gallery-soccer-1-212x212.jpg" alt="">
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="/landing_assets/images/gallery-soccer-2-original.jpg"><img src="/landing_assets/images/gallery-soccer-2-212x212.jpg" alt="">
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="/landing_assets/images/gallery-soccer-3-original.jpg"><img src="/landing_assets/images/gallery-soccer-3-212x212.jpg" alt="">
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="/landing_assets/images/gallery-soccer-4-original.jpg"><img src="/landing_assets/images/gallery-soccer-4-212x212.jpg" alt="">
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="/landing_assets/images/gallery-soccer-5-original.jpg"><img src="/landing_assets/images/gallery-soccer-5-212x212.jpg" alt="">
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="/landing_assets/images/gallery-soccer-6-original.jpg"><img src="/landing_assets/images/gallery-soccer-6-212x212.jpg" alt="">
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                </div>
              </article>
            </div>
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Fan Voting
                  </h5>
                </div>
              </article>
              <div class="block-voting">
                <div class="group-md">
                  <!-- Player Voting Item-->
                  <div class="player-voting-item">
                    <div class="player-voting-item-figure"><img src="/landing_assets/images/player-5-152x144.jpg" alt="" width="152" height="144">
                      <div class="player-number">
                        <p>21</p>
                      </div>
                    </div>
                    <div class="player-voting-item-title">
                      <p>Joe Montana</p>
                    </div>
                    <div class="player-voting-item-progress">
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern progress-bar-modern-red">
                        <div class="progress-header">
                          <p>Pass Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">95</span>
                      </article>
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Shots Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">70</span>
                      </article>
                    </div>
                    <button class="button button-block button-icon button-icon-left button-primary" type="button"><span class="icon material-icons-thumb_up"></span><span>854 votes</span></button>
                  </div>
                  <!-- Player Voting Item-->
                  <div class="player-voting-item">
                    <div class="player-voting-item-figure"><img src="/landing_assets/images/player-6-152x144.jpg" alt="" width="152" height="144">
                      <div class="player-number">
                        <p>7</p>
                      </div>
                    </div>
                    <div class="player-voting-item-title">
                      <p>George Blanda</p>
                    </div>
                    <div class="player-voting-item-progress">
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern progress-bar-modern-red">
                        <div class="progress-header">
                          <p>Pass Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">95</span>
                      </article>
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Shots Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">70</span>
                      </article>
                    </div>
                    <button class="button button-block button-icon button-icon-left button-primary" type="button"><span class="icon material-icons-thumb_up"></span><span>436 votes</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="aside-component">
              <div class="owl-carousel-outer-navigation">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Joueurs
                    </h5>
                    <div class="owl-carousel-arrows-outline">
                      <div class="owl-nav">
                        <button class="owl-arrow owl-arrow-prev"></button>
                        <button class="owl-arrow owl-arrow-next"></button>
                      </div>
                    </div>
                  </div>
                </article>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
                  <article class="product">
                    <header class="product-header">
                      <!-- Badge-->
                      <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
                      </div>
                      <div class="product-figure"><img src="/landing_assets/images/shop/product-1.png" alt=""></div>
                     
                    </header>
                    <footer class="product-content">
                      <h6 class="product-title"><a href="product-page.html">Nike hoops elite backpack</a></h6>
                      <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
                      </div>
                     
                    </footer>
                  </article>
                 
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
</section>
@endsection
