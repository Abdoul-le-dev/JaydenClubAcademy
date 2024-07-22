document.addEventListener('DOMContentLoaded',function()
{
    //get data image gallerie 

    $.ajax(
        {
            url:'/get_image_gallerie',
            type:'GET',
            success: function(response)
            {
                // Récupérer les données depuis la réponse
                let dataGalerie = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('dataGalerie', JSON.stringify(dataGalerie));

                console.log('Données de la gallerie récupérées et enregistrées dans le localStorage.');
        
            },
            error: function()
            {
                console.log('Données de la gallerie récupérées et enregistrées dans le localStorage.')
            }

        });

    //get data image joueur
    
    $.ajax(
        {
            url:'/get_image_joueur',
            type:'GET',
            success: function(response)
            {
                // Récupérer les données depuis la réponse
                let dataJoueur = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('dataJoueur', JSON.stringify(dataJoueur));

                console.log('Données joueur récupérées et enregistrées dans le localStorage.');
        
            },
            error: function()
            {
                console.log('Données joueur récupérées et enregistrées dans le localStorage.')
            }

        });



});