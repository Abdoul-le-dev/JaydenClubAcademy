<article class="post-future">
    <a class="post-future-figure relative" href="blog-post.html">
      @if ($data->fichier_link) <!-- Vérifie si le lien est une vidéo -->
      
        <div class="w-full h-[287px] object-cover  relative overflow-hidden" style="overflow: hidden">
            <div class="absolute w-full h-full flex justify-center items-center">
                <!-- Post Video Button--><a class="post-video-button" href="#modal_blog_{{$data->id}}" data-bs-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>=
               </div>
          <iframe class="w-full h-full object-cover" src="{{$data->fichier_link}}" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
      @else <!-- Si ce n'est pas une vidéo, affiche l'image -->
        <img src="{{ asset('storage/'.$data->fichier_image) }}" alt="image" class="w-[368px] h-[287px] object-cover">
      @endif
    </a>
    <div class="post-future-main">
      <div class="h-[100px] flex flex-col justify-between">
        <h4 class="post-future-title">
          <a href="" class="titre3 font-normal">{{ Str::limit($data->titre, 30) }}</a>
        </h4>
        <div class="post-future-meta">
          <!-- Badge -->
          <div class="badge badge-secondary">{{ $data->entete }}
            <span class="icon mdi mdi-clock"></span>
            <time datetime="2024">{{ $data->created_at }}</time>
          </div>
        </div>
      </div>
      <hr>
      <div class="post-future-text">
        <p>{{ strip_tags(substr($data->description, 0, 100)) }}</p>
      </div>
      <div class="post-future-footer group-flex group-flex-xs">
        <a class="button button-gray-outline" href="{{ route('model-article', ['id' => $data->id]) }}">Read more</a>
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

  @include('vitrine.pages.accueil.partials.video_modal')