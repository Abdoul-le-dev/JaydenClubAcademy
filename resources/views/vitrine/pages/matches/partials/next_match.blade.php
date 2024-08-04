<article class="game-result">
    <div class="game-info">
        <p class="game-info-subtitle">New Yorkers Stadium -
            <time datetime="08:30"> 08:30 PM</time>
        <h3 class="game-info-title">European soccer cup: day 38</h3>
        <div class="game-info-main">
            <div class="game-info-team game-info-team-first">
                @if ($matche->equipeA->logo)
                    <figure><img src="{{ Storage::url($matche->equipeA->logo)}}" alt="{{$matche->equipeA->nom}}" width="75"
                            height="99">
                    </figure>
                @else
                    <figure><img src="/admin_assets/assets/images/empty_team.png" alt="Empty team" width="75" height="99">
                    </figure>
                @endif

                <div class="game-result-team-name">{{$matche->equipeA->nom}}</div>
                <!-- <div class="game-result-team-country">USA</div> -->
            </div>
            <div class="game-info-middle game-info-middle-vertical">
                <time class="time-big" datetime="2024-04-17"><span class="heading-3">Fri 19</span> May 2024
                </time>
                <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                <div class="group-sm">
                    <div class="button button-sm button-share-outline">Partager
                        <ul class="game-info-share">
                            <li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                            <li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                            <li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                            <li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- <a class="button button-sm button-primary" href="#">Buy tickets</a> -->
                </div>
            </div>
            <div class="game-info-team game-info-team-second">
                @if ($matche->equipeB->logo)
                    <figure><img src="{{ Storage::url($matche->equipeB->logo)}}" alt="{{$matche->equipeB->nom}}" width="75"
                            height="99">
                    </figure>
                @else
                    <figure><img src="/admin_assets/assets/images/empty_team.png" alt="Empty team" width="75" height="99">
                    </figure>
                @endif
                <div class="game-result-team-name">{{$matche->equipeB->nom}}</div>
                <!-- <div class="game-result-team-country">Spain</div> -->
            </div>
        </div>
    </div>
</article>
