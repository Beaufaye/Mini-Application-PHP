<?php
require_once 'connexion.php';

$serveur = "localhost";
$dbname = "annuaire";
$user = "root";
$pass = "";


try{
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //On insère les données reçues
    
    
    
    
    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:apprenants.php");
}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

if(isset($_POST['envoyer']))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naiss = $_POST["date_naiss"];
    $tuteur = $_POST["tuteur"];
    $ville = $_POST["ville"];
    $contact = $_POST["contact"];
    $genre = $_POST["genre"];

    $sql = ("INSERT INTO 'apprenant' ('nom', 'prenom', 'date_de_naissance', 'tuteur', 'ville', 'contact', 'genre') 
    VALUES(:nom, :prenom, :date_de_naissance, :tuteur, :ville, :contact, :genre");
    $sth = $dbco->prepare($sql);

    $sth->bindParam(':nom',$nom);
    $sth->bindParam(':prenom',$prenom);
    $sth->bindParam(':date_de_naissance',$date_naiss);
    $sth->bindParam(':tuteur',$tuteur);
    $sth->bindParam(':ville',$ville);
    $sth->bindParam(':contact',$contact);
    $sth->bindParam(':genre',$genre);
    $sth->execute();
}

?>