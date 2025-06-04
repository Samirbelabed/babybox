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
};



if (isset($_POST['ok'])){

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$request = $db->prepare("INSERT INTO formulaire VALUES (0, :nom, :prenom, :pseudo, :email, :password)");
$request->execute(

array(

"nom" => $nom,
"prenom" => $prenom,
"pseudo" => $pseudo,
"email" => $email,
"password" => $password

)

);

header("Location: inscription.php");



};


?>