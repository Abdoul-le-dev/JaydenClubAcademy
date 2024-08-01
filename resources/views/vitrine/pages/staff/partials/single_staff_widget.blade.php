<section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-30">
        <div class="col-lg-8">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Informations et statistiques
              </h5>
            </div>
          </article>
          <!-- Player Info Corporate-->
          <div class="player-info-corporate">
            <div class="player-info-figure">
              <div class="player-img"><img src="{{Storage::url($officiel->photo)}}" alt="" width="368" height="286">
              </div>
              <div class="team-logo-img"><img src="{{Storage::url($officiel->photo)}}" alt="" width="237" height="312">
              </div>
            </div>
            <div class="player-info-main">
              <h4 class="player-info-title">{{$officiel->prenom}} {{$officiel->nom}}</h4>
              <p class="player-info-subtitle">{{$officiel->fonction}}</p>
              <hr>
              <div class="player-info-progress">
                <!-- Linear progress bar-->
                <article class="progress-linear progress-bar-modern">
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
            </div>
          </div>
          <!--  Block Player Info-->
          <div class="block-player-info">
            {!! $officiel->description !!}

        </div>
    </div>
        <div class="col-lg-4">
          <div class="row row-30">

            <div class="col-md-6 col-lg-12">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Awards
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
            <div class="col-md-6 col-lg-12">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Actualités
                  </h5>
                </div>
              </article>
                                <!-- Comment Modern-->
                                <div class="comment-modern">
                                  <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                    <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                  </svg>
                                  <p class="comment-modern-title"><a href="blog-post.html"><span class="text-primary">Williams-Goss</span> Signed a two-year contract with the Serbian club KK Partizan</a></p>
                                  <time class="comment-modern-time" datetime="2024"><span class="icon mdi mdi-clock icon-primary"></span>April 15, 2024
                                  </time>
                                </div>
                                <!-- Comment Modern-->
                                <div class="comment-modern">
                                  <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                    <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                  </svg>
                                  <p class="comment-modern-title"><a href="blog-post.html"><span class="text-primary">Hill </span> Underwent surgery Sunday to repair a torn hamstring and is expected to be sidelined</a></p>
                                  <time class="comment-modern-time" datetime="2024"><span class="icon mdi mdi-clock icon-primary"></span>April 15, 2024
                                  </time>
                                </div>
                                <!-- Comment Modern-->
                                <div class="comment-modern">
                                  <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                    <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                  </svg>
                                  <p class="comment-modern-title"><a href="blog-post.html"><span class="text-primary">Fultz</span> Says he will be ready for fall camp after his recovery period is finished</a></p>
                                  <time class="comment-modern-time" datetime="2024"><span class="icon mdi mdi-clock icon-primary"></span>April 15, 2024
                                  </time>
                                </div>
                                <!-- Comment Modern-->
                                <div class="comment-modern">
                                  <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                    <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                  </svg>
                                  <p class="comment-modern-title"><a href="blog-post.html"><span class="text-primary">Knight </span> Underwent surgery to repair a torn ACL in his left knee and has been declared out</a></p>
                                  <time class="comment-modern-time" datetime="2024"><span class="icon mdi mdi-clock icon-primary"></span>April 15, 2024
                                  </time>
                                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
