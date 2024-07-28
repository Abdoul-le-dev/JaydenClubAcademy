@php
    $equipes=App\Models\Equipe::all();
@endphp


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modifier ce match</h4>
                <form method="POST" action="{{route('dashboard.match.update',['id'=>$matche->id])}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="equipe_a">Èquipe A</label>
                        <select id="type" name="equipe_a" value="{{$matche->equipe_a}}" class="form-control select_team" required >
                            <option>Sélectionner une équipe</option>

                            @foreach ($equipes as $equipe )
                            <option value="{{$equipe->id}}"  @if ($matche->equipe_a==$equipe->id) @selected(true) @endif  >{{$equipe->nom}}</option>
                            @endforeach

                            <option value="new">Nouvelle equipe</option>
                        </select>

                        <div class="valid-tooltip">
                          Bon travail!
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="equipe_b">Equipe B</label>
                        <select id="type" name="equipe_b" value="{{old('equipe_b')}}" class="form-control select_team" required >
                            <option>Sélectionner une équipe</option>

                            @foreach ($equipes as $equipe )
                            <option @if ($matche->equipe_b==$equipe->id) @selected(true) @endif value="{{$equipe->id}}">{{$equipe->nom}}</option>
                            @endforeach
                            <option value="new">Nouvelle équipe</option>
                        </select>
                        <div class="valid-tooltip">
                          Bon travail!
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label for="match_date">Date du match</label>
                        <div class="input-group">
                          <input type="date" class="form-control" value="{{$matche->match_date}}" name="match_date" id="match_date" placeholder="Date du match" aria-describedby="validationTooltipUsernamePrepend" required="">
                          <div class="invalid-tooltip">
                            Veuillez entrer le mail du joueur.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label>Terrain</label>
                            <input type="text" name="terrain" value="{{$matche->terrain}}" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="nationalite">Heure du debut</label>
                        <input type="time" class="form-control" value="{{$matche->start_date}}" id="start_date" name="start_date" placeholder="Heaur du debut" required="">
                        <div class="valid-tooltip">
                          Bon travail!
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="end_date">Heure de la fin</label>
                        <input type="time" class="form-control" id="end_date" value="{{$matche->end_date}}" name="end_date" placeholder="end_date">
                        <div class="valid-tooltip">
                          Bon travail!
                        </div>
                      </div>
                    </div>

                    <button class="btn btn-primary waves-effect waves-light" type="submit">Modifier ce match</button>
                  </form>

            </div> <!-- end card-body-->
        </div> <!-- end card -->
    </div> <!-- end col-->
</div>

{{-- modal de creation d'équipe --}}

@include('admin.pages.matches.partials.equipe.create_equipe')
