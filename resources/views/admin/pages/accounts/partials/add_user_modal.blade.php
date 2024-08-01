
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#createUserModal">
           Ajouter utilisateur
        </button>

        <!-- Modal -->
        <form  method="post" action="{{route('dashboard.accounts.create')}}">
            @csrf
        <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createEquipeModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter un utilisateur </h5>
                        <button type="button" class="close waves-effect waves-light" id="create_equipe_modal_button_close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control"  name="nom" id="nom" placeholder="Nom de l'utilisateur" required="">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="prenom">Prenom</label>
                                    <input type="text" class="form-control"  name="prenom" id="prenom" placeholder="Prenom de l'utilisateur" required="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="nom">Email</label>
                                    <input type="text" class="form-control"  name="email" id="email" placeholder="Email de l'utilisateur" required="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="role">Role</label>
                                    <select name="role" class="form-control" id="role">
                                        <option value="1">Joueur</option>
                                        <option value="2">Staff</option>
                                        <option value="3">Admin</option>
                                        <option value="0">Autre</option>
                                    </select>
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
