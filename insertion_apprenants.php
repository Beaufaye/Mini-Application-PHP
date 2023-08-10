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
    $tuteur = $_POST["tuteur"];
    $ville = $_POST["ville"];
    $contact = $_POST["contact"];
   

    $inserer_apprenants = $dbco->prepare("INSERT INTO apprenant(nom, prenom, date_de_naissance, tuteur, ville, contact)
                                        VALUES(:nom, :prenom, :date_naiss, :tuteur, :ville, :contact)");

    $inserer_apprenants->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naiss' => $date_naiss,
        'tuteur' => $tuteur,
        'ville' => $ville,
        'contact' => $contact
    ));
}

?>


