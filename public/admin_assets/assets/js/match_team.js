$(document).ready(function() {
    var actual_select=null;
    console.log('Start')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.select_team').on('change',function(e){
        if(this.value=="new"){
            actual_select=this;

            $("#create_equipe_modal_button").click();
        }
    });

   async function loadTeams(callback) {
        $.ajax({
            url: '/dashboard/equipe/list',
            type: 'GET',
            success: function(response) {
                const teams = response.equipes;
                $('.select_team').empty();
                $('.select_team').append(`<option>Selectionner une équipe</option>`);
                teams.forEach(team => {
                    $('.select_team').append(`<option value="${team.id}">${team.nom}</option>`);
                });
                $('.select_team').append(`<option value="new">Nouvelle équipe</option>`);
                if(callback){
                    callback();
                }
            },
            error: function(response) {
                console.error('Erreur:', response.responseJSON);
            }
        });
    }

    // loadTeams();

    // Création d'une équipe
    $('#createEquipeForm').on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: '/dashboard/equipe/create',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: async function(response) {
                Toastify({
                    text: 'Ajouté avec succès' ,
                    duration: 3000,
                    close: true,
                    style: {
                        background: "green",
                      },
                }).showToast();
                console.log('Equipe créée:', response.equipe);
                // await loadTeams(function(){
                //     actual_select.value=response.equipe.id;
                // }); // Recharger la liste des équipes
                $('.select_team').append(`<option value="${response.equipe.id}">${response.equipe.nom}</option>`);
                  actual_select.value=response.equipe.id;
                // actual_select.val(response.equipe.id);

                $("#create_equipe_modal_button_close").click();
            },
            error: function(response) {
                Toastify({
                    text: 'Une erreur! Veuillez réessayer' ,
                    duration: 3000,
                    close: true,
                    style: {
                        background: "red",
                      },
                }).showToast();
                console.error('Erreur:', response.responseJSON);
            }
        });
    });

    // Mise à jour d'une équipe
    $('#updateEquipeForm').on('submit', function(e) {
        e.preventDefault();

        let id = $('#updateId').val();
        let formData = new FormData(this);

        $.ajax({
            url: '/dashboard/equipe/update/' + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log('Equipe mise à jour:', response.equipe);
                loadTeams(); // Recharger la liste des équipes
            },
            error: function(response) {
                console.error('Erreur:', response.responseJSON);
            }
        });
    });

    // Suppression d'une équipe
    $('#deleteEquipeButton').on('click', function() {
        let id = $(this).data('id');

        $.ajax({
            url: '/equipe/delete/' + id,
            type: 'DELETE',
            success: function(response) {
                console.log('Equipe supprimée:', response.equipe);
                loadTeams(); // Recharger la liste des équipes
            },
            error: function(response) {
                console.error('Erreur:', response.responseJSON);
            }
        });
    });
});
