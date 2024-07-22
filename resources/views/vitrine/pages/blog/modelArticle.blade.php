@extends('vitrine.components.app')

@section('page_title')
Article
@endsection

@section('content')
<!-- Section Breadcrumbs-->
<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="landing_assets/images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Blog post</h3>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">JAYDEN FOOTBALL ACADEMY</a></li>
          <li><a href="#">Nouvelle</a></li>
          <li class="active">Blog post</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Blog Post-->
  <section class="section section-sm bg-gray-100">
    <div class="container">
      <div class="row row-30">
        <div class="col-lg-8">
          <div class="blog-post">
            <!-- Badge-->
            <div class="badge badge-secondary">The Team
            </div>
            <h3 class="blog-post-title">Coutinho’s camp: it was all barca’s fault and we can prove it</h3>
            <div class="blog-post-header">
              <div class="blog-post-author"><img class="img-circle" src="landing_assets/images/user-3-63x63.jpg" alt="" width="63" height="63">
                <p class="post-author">Katrin Burns</p>
              </div>
              <div class="blog-post-meta">
                <time class="blog-post-time" datetime="2024"><span class="icon mdi mdi-clock"></span>April 15, 2024</time>
                <div class="blog-post-comment"><span class="icon mdi mdi-comment-outline"></span>345</div>
                <div class="blog-post-view"><span class="icon fl-justicons-visible6"></span>234</div>
              </div>
            </div>
            <div class="blog-post-author-quote">
              <p>Philippe Coutinho is reportedly seeking clear-the-air talks with Liverpool after Barcelona gave up on trying to sign the Brazilian. Barca failed to make a breakthrough in their attempts to replace Neymar with the Liverpool attacker this season.</p>
            </div>
            <div class="blog-post-share">
              <p>Share this post</p>
              <ul class="group">
                <li><a class="icon fa-facebook" href="#"></a></li>
                <li><a class="icon fa-twitter" href="#"></a></li>
                <li><a class="icon fa-google-plus" href="#"></a></li>
                <li><a class="icon fa-instagram" href="#"></a></li>
              </ul>
            </div>
            <div class="blog-post-content">
              <p>The Independent claims the player is ready for talks to settle any potential bad blood. It’s understood Liverpool rejected three bids from the Catalans with the final figure believed to be a £118million offer, which in fact proved to be just £82million up front with the rest in add-ons. Barca had imposed a 7pm Sunday deadline on Liverpool to agree to an offer that they had already rejected 48 hours earlier.</p>
              <p>The Reds sporting director Michael Edwards ignored their deadline as Liverpool stuck to their stance that the player was not for sale at any price.</p><img src="landing_assets/images/blog-post-1-683x407.jpg" alt="" width="683" height="407">
              <p>The report of the Independent says: “People within the 25-year-old midfielder’s entourage are pointing the finger at Barcelona for manipulating their client and have suggested the Nou Camp club used family members to provide additional pressure. They insist the ill-conceived email was Barca’s idea.” Still, there’s no updates on how this situation can be resolved.</p>
              <!-- Quote Default-->
              <article class="quote-default">
                <div class="quote-default-text">
                  <p class="q">Coutinho’s camp will attempt to shift the blame for the saga on to Barca.</p>
                </div>
              </article>
              <p>Now though, Coutinho and his representatives are ready to accept that a move is not going to happen, which leaves the player in an awkward position as he prepares to return to the Liverpool fold. The 25-year-old has yet to return to full training at Melwood and he will not be involved against either Hoffenheim on Wednesday night or Arsenal on Sunday.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 owl-carousel-outer-navigation">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Related News
                  </h5>
                  <div class="owl-carousel-arrows-outline">
                    <div class="owl-nav">
                      <button class="owl-arrow owl-arrow-prev"></button>
                      <button class="owl-arrow owl-arrow-next"></button>
                    </div>
                  </div>
                </div>
              </article>
              <!-- Blog Carousel-->
              <div class="owl-carousel" data-items="1" data-sm-items="2" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
                <!-- Post Carmen-->
                <article class="post-carmen"><img src="landing_assets/images/news-5-2-369x343.jpg" alt="" width="369" height="343">
                  <div class="post-carmen-header">
                    <!-- Badge-->
                    <div class="badge badge-secondary">The Team
                    </div>
                  </div>
                  <div class="post-carmen-main">
                    <h4 class="post-carmen-title"><a href="blog-post.html">Daily top 10 news: Chelsea, world cup 2024 &amp; more</a></h4>
                    <div class="post-carmen-meta">
                      <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2024">April 15, 2024</time>
                      </div>
                      <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                      <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                      </div>
                    </div>
                  </div>
                </article>
                <!-- Post Carmen-->
                <article class="post-carmen"><img src="landing_assets/images/news-5-3-369x343.jpg" alt="" width="369" height="343">
                  <div class="post-carmen-header">
                    <!-- Post Video Button--><a class="post-video-button" href="#modal1" data-bs-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                  </div>
                  <div class="post-carmen-main">
                    <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
                    <div class="post-carmen-meta">
                      <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2024">April 15, 2024</time>
                      </div>
                      <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                      <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                      </div>
                    </div>
                  </div>
                </article>
                <!-- Post Carmen-->
                <article class="post-carmen"><img src="landing_assets/images/news-5-4-369x343.jpg" alt="" width="369" height="343">
                  <div class="post-carmen-header">
                    <!-- Badge-->
                    <div class="badge badge-primary">The League
                    </div>
                  </div>
                  <div class="post-carmen-main">
                    <h4 class="post-carmen-title"><a href="blog-post.html">Why would Messi swap Barca for Manchester?</a></h4>
                    <div class="post-carmen-meta">
                      <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2024">April 15, 2024</time>
                      </div>
                      <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                      <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">3 comments
                  </h5>
                </div>
              </article>
              <div class="blog-post-comments">
                <!-- Post Comment-->
                <div class="post-comment post-comment-parent">
                  <div class="post-comment-aside"><img class="img-circle" src="landing_assets/images/user-4-69x69.jpg" alt="" width="69" height="69">
                  </div>
                  <div class="post-comment-main">
                    <div class="post-comment-header">
                      <h5 class="author-name">Linda Peterson</h5>
                      <time class="post-comment-time" datetime="2024">2 days ago
                      </time>
                    </div>
                    <div class="post-comment-text">
                      <p>Thanks for the post! All you described looks odd, to be honest. However, it’s a fair play to Liverpool for keeping him. But £82m upfront + add ons is a lot of money for a player, who while clearly being talented goes missing in one game too many. Pretty much any list of the world's top 40-50 players wouldn't feature Coutinho. And for Liverpool to demand £100m for him is a bit odd. Soccer is really unpredictable if you ask me.</p>
                    </div>
                    <div class="post-comment-footer">
                      <div class="comment-like"><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></div>
                      <div class="comment-reply"><span class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></div>
                    </div>
                  </div>
                </div>
                <!-- Post Comment-->
                <div class="post-comment post-comment-child">
                  <div class="post-comment-aside"><img class="img-circle" src="landing_assets/images/user-5-69x69.jpg" alt="" width="69" height="69">
                  </div>
                  <div class="post-comment-main">
                    <div class="post-comment-header">
                      <h5 class="author-name">Erika Wood</h5>
                      <time class="post-comment-time" datetime="2024">2 days ago
                      </time>
                    </div>
                    <div class="post-comment-text">
                      <p>You are absolutely right! As a long-time soccer fan I can’t see any reasons why this deal happened if it was rejected 48 hours earlier. It looks like a kind of affair Coutinho would have never gotten into.</p>
                    </div>
                    <div class="post-comment-footer">
                      <div class="comment-like"><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></div>
                      <div class="comment-reply"><span class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></div>
                    </div>
                  </div>
                </div>
                <!-- Post Comment-->
                <div class="post-comment">
                  <div class="post-comment-aside"><img class="img-circle" src="landing_assets/images/user-6-69x69.jpg" alt="" width="69" height="69">
                  </div>
                  <div class="post-comment-main">
                    <div class="post-comment-header">
                      <h5 class="author-name">Erik Peterson</h5>
                      <time class="post-comment-time" datetime="2024">2 days ago
                      </time>
                    </div>
                    <div class="post-comment-text">
                      <p>All this situation seems to be a greatly planned manipulation. Well done to Liverpool on this - if true they get a key player back who is happy to play for them after feeling manipulated. That's a solid win. To my mind, it’s another absolute transfer window shocker for Barca. Their team sheet against Betis this weekend was so poor compared to their team of a couple of years ago. This window has hugely accelerated their decline.</p>
                    </div>
                    <div class="post-comment-footer">
                      <div class="comment-like"><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></div>
                      <div class="comment-reply"><span class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></div>
                    </div>
                  </div>
                </div>
                <div class="comment-box">
                  <div class="comment-box-aside"><img class="img-circle" src="landing_assets/images/user-7-69x69.jpg" alt="" width="69" height="69">
                  </div>
                  <div class="comment-box-main">
                    <h5 class="comment-box-name">Miranda</h5>
                    <!-- RD Mailform-->
                    <form class="rd-mailform comment-box-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <label class="form-label" for="comment-message">Your comment</label>
                        <textarea class="form-input" id="comment-message" name="message" ></textarea>
                      </div>
                      <div class="form-button">
                        <button class="button button-primary" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Blog Alide-->
          <div class="block-aside">
            <div class="block-aside-item">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Categories
                  </h5>
                </div>
              </article>
              <!--Block Categories-->
              <div class="block-categories">
                <ul class="list-marked list-marked-categories">
                  <li><a href="#">Soccer</a><span class="list-marked-counter">68</span></li>
                  <li><a href="#">The Team</a><span class="list-marked-counter">16</span></li>
                  <li><a href="#">League</a><span class="list-marked-counter">20</span></li>
                </ul>
              </div>
            </div>
            <div class="block-aside-item">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">In The Spotlight
                  </h5><a class="button button-xs button-gray-outline" href="news-5.html">All News</a>
                </div>
              </article>
              <!-- List Post Classic-->
              <div class="list-post-classic">
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="landing_assets/images/blog-element-1-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Raheem Sterling turns the tide for Manchester</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="landing_assets/images/blog-element-2-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Prem in 90 seconds: Chelsea's crisis is over!</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="landing_assets/images/blog-element-3-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Good vibes back at struggling Schalke</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
                                  <!-- Post Classic-->
                                  <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="landing_assets/images/blog-element-4-94x94.jpg" alt="" width="94" height="94"></a></div>
                                    <div class="post-classic-main">
                                      <p class="post-classic-title"><a href="blog-post.html">Liverpool in desperate need of backup players</a></p>
                                      <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                        <time datetime="2024">April 15, 2024</time>
                                      </div>
                                    </div>
                                  </article>
              </div>
            </div>
            <div class="block-aside-item">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Follow Us
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
            <div class="block-aside-item">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Latest Comments
                  </h5>
                </div>
              </article>
              <!-- List Comments Classic-->
              <div class="list-comments-classic">
                                  <!-- Comment Classic-->
                                  <div class="comment-classic">
                                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                      <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                    </svg>
                                    <div class="comment-classic-header">
                                      <div class="comment-classic-header-aside"><img src="landing_assets/images/user-1-63x63.jpg" alt="" width="63" height="63">
                                      </div>
                                      <div class="comment-classic-header-main">
                                        <p class="comment-classic-title">Amanda Norton</p>
                                        <time class="comment-classic-time" datetime="2024">4 hours ago
                                        </time>
                                      </div>
                                    </div>
                                    <div class="comment-classic-body">
                                      <div class="comment-classic-text">
                                        <p>I am not really a big fan of soccer but even I am sure that Liverpool are going to make it this time just like they did 3 years...</p>
                                      </div>
                                      <div class="comment-classic-post-title"><a href="blog-post.html">Six Big Questions About the Future of Manchester’s Updated Team</a></div>
                                    </div>
                                  </div>
                                  <!-- Comment Classic-->
                                  <div class="comment-classic">
                                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                      <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                    </svg>
                                    <div class="comment-classic-header">
                                      <div class="comment-classic-header-aside"><img src="landing_assets/images/user-2-63x63.jpg" alt="" width="63" height="63">
                                      </div>
                                      <div class="comment-classic-header-main">
                                        <p class="comment-classic-title">Robert Norton</p>
                                        <time class="comment-classic-time" datetime="2024">14 hours ago
                                        </time>
                                      </div>
                                    </div>
                                    <div class="comment-classic-body">
                                      <div class="comment-classic-text">
                                        <p>Real Madrid are my personal favorites...</p>
                                      </div>
                                      <div class="comment-classic-post-title"><a href="blog-post.html">Which Team is Your Personal Favorite This Year?</a></div>
                                    </div>
                                  </div>
                                  <!-- Comment Classic-->
                                  <div class="comment-classic">
                                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                                      <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                                    </svg>
                                    <div class="comment-classic-header">
                                      <div class="comment-classic-header-aside"><img src="landing_assets/images/user-3-63x63.jpg" alt="" width="63" height="63">
                                      </div>
                                      <div class="comment-classic-header-main">
                                        <p class="comment-classic-title">Rebecca Smith</p>
                                        <time class="comment-classic-time" datetime="2024">20 hours ago
                                        </time>
                                      </div>
                                    </div>
                                    <div class="comment-classic-body">
                                      <div class="comment-classic-text">
                                        <p>My opinion on the topic is that Rollers don’t have enough chances to withstand the...</p>
                                      </div>
                                      <div class="comment-classic-post-title"><a href="blog-post.html">Rollers: Some Facts About New Stars of Premier League 2024</a></div>
                                    </div>
                                  </div>
              </div>
            </div>
            <div class="block-aside-item">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Join Our Newsletter
                  </h5>
                </div>
              </article>
              <!-- Mail Form Modern-->
              <form class="rd-mailform rd-mailform-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <label class="form-label" for="subscribe-email">Enter Your E-mail</label>
                  <input class="form-input" id="subscribe-email" type="email" name="email" >
                </div>
                <div class="form-wrap">
                  <button class="button button-block button-primary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="block-aside-item">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Tags
                  </h5>
                </div>
              </article>
              <!-- List Tags-->
              <ul class="list-tags">
                <li><a href="#">Sport</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">League</a></li>
                <li><a href="#">Cup</a></li>
                <li><a href="#">Soccer</a></li>
                <li><a href="#">Player</a></li>
                <li><a href="#">Championship</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection