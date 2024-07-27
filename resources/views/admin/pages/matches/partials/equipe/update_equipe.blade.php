
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">
            Modifier équipe
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter une équipe</h5>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="nom">Nom d'équipe</label>
                                    <input type="text" class="form-control" value="{{old('nom')}}" name="nom" id="nom" placeholder="Nom du joueur" required="">
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="photo">Logo de l'équipe (Pas réquis) </label>
                                    <input type="file" class="dropify" accept="images/*" data-label="Selectionner la photo du joueur" id="photo" name="photo" data-height="300"  required="">
                                    <div class="valid-tooltip">
                                      Bon travail!
                                    </div>
                                  </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>

