
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#DeleteUserModal_{{$user->id}}">
            Supprimer
         </button>

        <!-- Modal -->
        <form method="post" action="{{route('dashboard.accounts.delete',['id'=>$user->id])}}">
            @method('DELETE')
            @csrf
        <div class="modal fade" id="DeleteUserModal_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Supprimé le match</h5>
                        <button type="button" class="close waves-effect waves-light" id="create_equipe_modal_button_close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Êtes vous sur de vouloir suprimer cet utilisateur?</p>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">Oui</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
