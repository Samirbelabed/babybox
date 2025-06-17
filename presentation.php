<?php 

include 'db.php';



?>



<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="site_babys.js"></script>
    <link href="css/site_babys.css" rel="stylesheet">
    <link href="css/site_babys2.css" rel="stylesheet">
</head>


<body>

<div class="marque">

    <a href="index.php"> <img src="images/baby_logo.png" alt="" class="logo" style ="width: 380px; height:380px; padding: 10 10;"> </a> 

</div>
    

<div class="entete">


<ul>

<li>  <a href="vetements.php" class="link">Vetements</a> </li>
<li> <a href="" class="link">Accesoires-Jouets</a>
<li>  <a href="paniers.php" class="link">Paniers</a> </li>
<li>  <a href="" class="link">Contact</a></li>
<li>  <a href="formulaire.php" class="link">Inscription</a></li>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<li> <a href="login.php" value =""> <i class="fa-regular fa-user icone"></i> </a> <p class="login">Login</p> </li>

<li> <a href="includes/deconnexion.php" value =""> <i class="fa-solid fa-circle-user icone"></i> </a> <p class="login">Logout</p> </li>





</ul>






</div>




<div class="Hochets">
  
   <img src="images/hochets.jpg" id="myImg" style ="width: 500px; height: 500px; border-radius: 500px; padding: 5 5; cursor: none; overflow: hidden; 
    box-shadow:  5px 5px 8px rgba(0,0,0,1);"> 
    <p class="texte"> Des hochets, personnalises <br> avec prenom <br> </p>

    <div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
 

</div>



<div class="Autres">

    
    <p class="texte" href=""> ... Ainsi que bien d'autres! &nbsp;</p> 
    <img src="images/hochets_autres.jpg" class ="rond" alt="" style ="width: 500px; height:500px; padding: 5 5; overflow: hidden; 
    box-shadow:  -5px 5px 8px rgba(0,0,0,1); "> 

</div>


<div class="Hochets" id="imgzoom">

    <img src="images/pull.jpg" class ="rond" style ="width: 500px; height:500px; border-radius: 500px; padding: 5 5; overflow: hidden; 
    box-shadow:  5px 5px 8px rgba(0,0,0,1);">
    <a href="vetements.php" style= "text-decoration: none;"> <p class="texte"> Des pulls, confectionnes <br> au crochets. <br> </p> </a>


</div>


<div class="Autres">
    
<a href="vetements.php" style= "text-decoration: none;"> <p class="texte"> Des ensembles selon votre choix !</p> </a>
    <img src="images/vetements/ensemble.jpg"  alt="" style ="width: 500px; height: 500px; border-radius: 500px; margin-bottom: 120px; padding: 5 5; overflow: hidden; 
    box-shadow:  -5px 5px 8px rgba(0,0,0,1);">

</div>





<footer style =" background: linear-gradient(100deg, beige 94%, pink 94%);">

 

    <div class="conditions">

   
        
    <ul>
        
    <li> Conditions </li>
    <li> A propos </li>
    <li> Newsletter </li>
    <a href="index.php" class ="retour"> <i class="fa-solid fa-right-from-bracket"> </i> </a>
    
    </ul>
    
    
    
    
        </div>
    
    
    
    
    </footer>



</body>

<script>


// Get the modal
let modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
let img = document.getElementById("myImg");
let modalImg = document.getElementById("img01");
let captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
















</script>



</html>