document.addEventListener('DOMContentLoaded', (event) => {
    var formatSelect = document.getElementById('formatSelect');

    if (formatSelect) {
        var Image_costum = document.querySelector('.Image_costum');
     
        var Video_costum = document.querySelector('.Video_costum');
       

        formatSelect.addEventListener('change', function() {
            var selectedFormat = formatSelect.value;

            // Vérifiez et manipulez les éléments en fonction du format sélectionné
            if (Image_costum && selectedFormat=='Image') {
                Video_costum.classList.add('hidden');
            }
           
            if (Video_costum && selectedFormat=='Video') {
                
                Image_costum.classList.add('hidden');
            }
            

           
        });

        // Déclencher l'événement change pour appliquer les classes au chargement initial
        formatSelect.dispatchEvent(new Event('change'));
    } else {
        console.error('Élément <select> introuvable.');
    }
});