


                  <div class="player-info-modern"><a class="player-info-modern-figure" href="{{route('joueur-view',['id'=>$joueur->id])}}"><img src="{{asset('/storage/'.$joueur->photo)}}" alt="" width="368" height="286"></a>
                    <div class="player-info-modern-footer">
                      <div class="player-info-modern-number">
                        <p>{{$joueur->numero}}</p>
                      </div>
                      <div class="player-info-modern-content">
                        <div class="player-info-modern-title">
                          <h5><a href="{{route('joueur-view',['id'=>$joueur->id])}}">{{$joueur->nom}} <span>{{$joueur->prenom}}</span></a></h5>
                          <p>  {{$joueur->position_sur_terrain}} </p>
                        </div>
                        <div class="player-info-modern-progress">
                          <!-- Linear progress bar-->
                          <article class="progress-linear progress-bar-modern">
                            <div class="progress-header">
                              <p>Buts</p>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div><span class="progress-value">95</span>
                          </article>
                          <!-- Linear progress bar-->
                          <article class="progress-linear progress-bar-modern">
                            <div class="progress-header">
                              <p>Matchs</p>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div><span class="progress-value">70</span>
                          </article>
                        </div>
                      </div>
                    </div>
                  </div>
