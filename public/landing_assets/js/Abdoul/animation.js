document.addEventListener('DOMContentLoaded',function()
{
    const images = [
        'landing_assets/assets/data/1.jpg',
        'landing_assets/assets/data/2.jpg',
        'landing_assets/assets/data/3.jpg',
        'landing_assets/assets/data/4.jpg'
      ];
      
      const image1 = document.querySelector('.Image1');
      const image2 = document.querySelector('.Image2');
      const image3 = document.querySelector('.Image3');
      const image4 = document.querySelector('.Image4');
      
      let currentIndex =0 ;
      
      function changeImages() {
       if(image1)
        {
          image1.src = images[currentIndex % images.length];
          setTimeout(() => {
            image2.src = images[(currentIndex + 1) % images.length];
          }, 300); // 0,3 seconde (300 millisecondes) après le changement de image 3
          
          setTimeout(() => {
            image4.src = images[(currentIndex + 2) % images.length];
          }, 600); // 0,6 seconde (800 millisecondes) après le changement de image 3
          
          setTimeout(() => {
            image3.src = images[(currentIndex + 3) % images.length];
          }, 900); // 0,9 seconde (1200 millisecondes) après le changement de image 3
          
          currentIndex++;
        }
      }
      
      // Appeler la fonction pour la première fois
      changeImages();
      
      // Définir l'intervalle pour changer les images toutes les trois secondes
      setInterval(changeImages, 5000);

         

});