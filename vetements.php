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
<a href=""> <i class="fa-regular fa-heart icone"></i> </a>
<a href="formulaire.php"> <i class="fa-regular fa-user icone"></i> </a> 


</ul>




</div>



<div class= "articles">

<?php



$sql = "SELECT * FROM vetements";
$stmt = $db->query($sql);

while ($row = $stmt->fetch()){


    echo '
            
    <ul style="list-style-type: none;">
    
    <li id ="chaussure" style =" border-radius: 10px; color: black;  background: linear-gradient(0deg, beige 85%, pink 15% );  
    padding-top: 10px; padding-bottom: 10px; box-shadow: 5px 5px 5px black; width: 400px; height:500px; font-size:21px;">
    <strong style="font-style: italic; margin-left: 10px;"> '. $row['produit'] .' </strong> </br> &nbsp; '. $row['prix'] .' 
    <i> eur </i>
    <br>
    <img src ="/images/vetements/'. $row['image'] .'" style= "width: 400px; height: 280px; margin-top: 18px;"/>
    </br>
   
    <input type="submit" class="input" style ="width:20%; margin-top: 50px; margin-left: 10px;" value="Acheter" name="">

    </li> 
     
    </ul> ';



}
   


?>






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
</html>