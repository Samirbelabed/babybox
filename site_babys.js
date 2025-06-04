
  document.addEventListener("DOMContentLoaded", function() {
   
    let links = document.querySelectorAll('.link');
    

    links.forEach(function(link) {
      
      let icon = document.createElement('span');
      icon.classList.add('icon');
      icon.innerHTML = '<img src ="images/biberon.png" style= "height: 50px; width: 50px;">';
      icon.style.float = 'left';
      icon.style.marginRight = '10px';

     
      link.appendChild(icon);
    
    });





});








   