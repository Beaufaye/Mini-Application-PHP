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

}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

if(isset($_POST['ajouter']))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naiss = $_POST["date_naiss"];
   
    $ville = $_POST["ville"];
    $contact = $_POST["contact"];
   

    $inserer_apprenants = $dbco->prepare("INSERT INTO tuteur(nom, prenom, date_de_naissance, ville, contact)
                                        VALUES(:nom, :prenom, :date_naiss, :ville, :contact)");

    $inserer_apprenants->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naiss' => $date_naiss,
        'ville' => $ville,
        'contact' => $contact
    ));
}

?>


