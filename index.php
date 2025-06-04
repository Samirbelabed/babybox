<?php 

$host = 'localhost';    
$dbname = 'boxforbabys';
$username = 'samir';
$password = 'sb89!';

try {
    
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

   
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="site_babys.js"></script>
    <link href="css/site_babys.css" rel="stylesheet">
    
    
</head>


<body>

<div class="marque">

   <a href="index.php"> <img src="images/baby_logo.png" alt="" class="logo" style ="width: 380px; height:380px; padding: 10 10;"> </a> 

</div>
    

<div class="entete">



<ul>

<li>  <a href="vetements.php" class="link">Vetements</a> 

<div class="smenu">
<ul class="smenu2"> 

<li><a href="">Bandeau bebe</a></li>
<hr style="width: 200px; border-color: brown;">
<li> <a href="">Ensemble</a></li>
<hr style="width: 200px; border-color: brown;">
<li> <a href="">Cardigan</a></li>
</ul>

</div>

</li>


<li> <a href="" class="link">Accesoires-Jouets</a>
<div class="smenu">
<ul class="smenu2"> 
<li><a href="">Hochets</a></li>
<hr style="width: 200px; border-color: brown;">
<li> <a href="">Attaches tetine</a></li>
<hr style="width: 200px; border-color: brown;">
<li> <a href="">Attaches doudou</a></li>
</ul>

</div>
</li>

<li>  <a href="" class="link">Paniers de rangement</a> </li>
<li>  <a href="" class="link">Contact</a></li>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<li> <a href=""> <i class="fa-regular fa-heart icone"></i> </a> </li>
<li> <a href="formulaire.php"> <i class="fa-regular fa-user icone"></i> </a> <p class="login">Login</p> </li>


</ul>









</div>






<div class ="image" id ="image">

<a href="page_presentation.html"> <img src="images/Robe_blanche.jpg" alt="" class="img" id ="img"> </a>

<div class = "bienv" id ="bienv"> Bienvenue sur Le site  </div>

<div id ="bouton"> En savoir plus ? ... Cliquez </div>




</div>




<script>

const bienvenue = document.getElementById('bienv');
const image = document.getElementById('img');
const bouton = document.getElementById('bouton');

bouton.classList.add('detail');




image.addEventListener('mouseover', function(){

bienvenue.style.opacity =  0;




});


image.addEventListener('mouseout', function(){

bienvenue.style.opacity =  1;

});



image.addEventListener('mouseover', function(){

bouton.style.opacity =  1;


});


image.addEventListener('mouseout', function(){

bouton.style.opacity =  0;

});







</script>




<footer>

 

<div class="conditions">
    
<ul>
    
<li> Conditions </li>
<li> A propos </li>
<li> Newsletter </li>


</ul>




    </div>




</footer>


</body>




</html>