@php
    $resultat= App\Models\MatchResultat::where('match_id',$matche->id)->first();
@endphp

<div class="card">
    <div class="card-body">
      <div class="d-flex w-100">
        <div class="d-flex flex-column flex-grow-1 border-right pr-3">
          <!-- Equipe et score -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="team">
                @if ($matche->equipeA->logo)
              <img src="{{ Storage::url( $matche->equipeA->logo)}}" alt="{{$matche->equipeA->nom}}">
                @else
              <img src="/admin_assets/assets/images/empty_team.png" alt="Empty logo">
                @endif
              <h3 class="mb-0"> {{$matche->equipeA->nom}} </h3>
            </div>
            <h3 class="score mb-0">
                @if ($resultat)
                {{$resultat->score_a}}
                @else
                -
                @endif
            </h3>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="team">
                @if ($matche->equipeB->logo)
                <img src="{{ Storage::url( $matche->equipeB->logo)}}" alt="{{$matche->equipeB->nom}}">
                  @else
                <img src="/admin_assets/assets/images/empty_team.png" alt="Empty logo">
                  @endif
              <h3 class="mb-0">{{$matche->equipeB->nom}}</h3>
            </div>
            <h3 class="score mb-0">
                @if ($resultat)
                {{$resultat->score_b}}
                @else
                -
                @endif
                 </h3>
          </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center pl-3"  style="width:100px" >
          <div class="match-details">
            <span>Terminé<br> {{$matche->match_date}} </span><br>
            <span>{{$matche->start_date}}</span>
          </div>
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-chevron-down"></i> <i class="mdi mdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="{{route('dashboard.match.update.view',['id'=>$matche->id])}}">Modifier</a>
                {{-- <a class="dropdown-item" href="#">Supprimer</a> --}}
                <button type="button" class="btn btn-white text-success waves-effect waves-light" data-toggle="modal" data-target="#MatchResultatEditModal_{{$matche->id}}">
                    Résultat
                </button>
                <button type="button" class="btn btn-white text-danger waves-effect waves-light" data-toggle="modal" data-target="#DeleteMatchModal_{{$matche->id}}">
                    Supprimer
                </button>
            </div>
        </div>
        </div>
      </div>

    </div>

  </div>
  @include('admin.pages.matches.partials.delete_match_modal')
  @include('admin.pages.matches.partials.match_result_edit_modal')

