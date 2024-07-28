
        <!-- Button trigger modal -->


        <!-- Modal -->
        <form method="post" action="{{route('dashboard.match.result.edit',['id'=>$matche->id])}}">
            @csrf
        <div class="modal fade" id="MatchResultatEditModal_{{$matche->id}}" tabindex="-1" role="dialog" aria-labelledby="createEquipeModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Résultat du match({{$matche->equipeA->nom}} VS {{$matche->equipeB->nom}}) </h5>
                        <button type="button" class="close waves-effect waves-light" id="create_equipe_modal_button_close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 mb-3">
                            <label for="score_a">Score A</label>
                            <input type="number" class="form-control" value="@if($resultat!=null){{$resultat->score_a}}@endif"  name="score_a" id="score_a" placeholder="Score de l'équipe A" required="">
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="score_b">Score B</label>
                            <input type="number" class="form-control" value="@if($resultat!=null){{$resultat->score_b}}@endif"  name="score_b" id="score_b" placeholder="Score de l'équipe B" required="">
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Editer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
