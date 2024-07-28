<div class="player-info-modern player-info-modern-accent"><a class="player-info-modern-figure" href="{{route('staffs.single.view',['id'=>$officiel->id])}}">
    <img src="{{Storage::url($officiel->photo)}}" alt="" width="368" height="286"></a>
    <div class="player-info-modern-footer">
      <div class="player-info-modern-number"><span class="icon fa-weixin"></span>
      </div>
      <div class="player-info-modern-content">
        <div class="player-info-modern-title">
          <h5><a href="{{route('staffs.single.view',['id'=>$officiel->id])}}">{{$officiel->prenom}}  {{$officiel->nom}}</a></h5>
          <p>{{$officiel->fonction}}</p>
        </div>
        <div class="player-info-modern-progress">
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
  </div>
