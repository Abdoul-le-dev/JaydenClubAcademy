document.addEventListener('DOMContentLoaded',function()
{
     //gestion publication article
     var Image_article = document.querySelector('.Image');
     var Video_article = document.querySelector('.Video');
     
 
     var Article_add_admin = document.querySelector('.Format_article');
 
    if(Article_add_admin)
     {
        
         Article_add_admin.addEventListener('change',function()
         {
            
             if(Article_add_admin.value ==="Image")
             {
                 Video_article.classList.add('hidden');
                 Image_article.classList.remove('hidden');
                 Image_article.classList.add('bloc');
                
             }
             if(Article_add_admin.value ==="Video")
             {
                 Video_article.classList.remove('hidden');
                 Video_article.classList.add('bloc');
                 Image_article.classList.add('hidden');
                
         
             }
             
            
         });
     }
    
});