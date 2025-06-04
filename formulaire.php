





<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="site_babys.js"></script>
    <link href="css/site_babys.css" rel="stylesheet">
</head>


<body style ="background-color: beige;">


<div style ="text-align: center; font-family: 'bebe'; font-size: 60px; padding: 20px 0; 
text-shadow: 1px 1px 1px rgba(0,0,0,1); color: pink;"> Formulaire d'inscription </div>

<form method="POST" action="traitement.php"> 



<div class="form">



    <label for="nom" class="label">Votre nom* </label>
    <input type="text" class="input" id="nom" name="nom" placeholder="Entrez votre nom..." required> 

    <label for="prenom"  class="label">Votre prénom* </label>
        <input type="text" class="input" id="prenom" name="prenom" placeholder="Entrez votre prénom..." required> 


        <label for="pseudo"  class="label">Votre pseudo* </label>
        <input type="text" class="input" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo..." required> 

        <label for="email"  class="label">Votre email* </label>
        <input type="text" class="input" id="email" name="email" placeholder="Entrez votre email..." required> 

        <label for="password"  class="label">Votre mot de passe* </label>
        <input type="text" class="input" id="password" name="password" placeholder="Entrez votre mot de passe..." required>
        
        <br>

        <input type="submit" class="input" style ="width:50%;" value="M'inscrire" name="ok">


</div>


 
   








</form>


<footer style =" background: linear-gradient(100deg, beige 94%, pink 94%);">

 

    <div class="conditions">

   
        
    <ul>
        
  
    <a href="index.php" class ="retour"> <i class="fa-solid fa-right-from-bracket"> </i> </a>
    
    </ul>
    
    
    
    
        </div>
    
    
    
    
    </footer>
    
</body>



</html>