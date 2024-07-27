
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary waves-effect waves-light d-none" id="create_equipe_modal_button" data-toggle="modal" data-target="#createEquipeModal">
            Nouvelle équipe
        </button>

        <!-- Modal -->
        <form id="createEquipeForm" method="post" action="">
        <div class="modal fade" id="createEquipeModal" tabindex="-1" role="dialog" aria-labelledby="createEquipeModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter une équipe</h5>
                        <button type="button" class="close waves-effect waves-light" id="create_equipe_modal_button_close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="nom">Nom d'équipe</label>
                                    <input type="text" class="form-control"  name="nom" id="nom" placeholder="Nom de l'équipe" required="">
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="photo">Logo de l'équipe (Pas réquis) </label>
                                    <input type="file" class="dropify" accept="images/*" data-label="Selectionner le logo de l'équipe" id="photo" name="logo" data-height="200">
                                    <div class="valid-tooltip">
                                      Bon travail!
                                    </div>
                                  </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
