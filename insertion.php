<?php
require_once 'connexion.php';

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date_naiss'];
$genre=$_POST['genre'];
$ville=$_POST['ville'];
$tuteur=$_POST['tuteur'];
$contact=$_POST['contact'];

$requette2 = bd()->prepare('SELECT * FROM apprenant WHERE contact=?');
$requette2->execute (array($contact));
$donnees_exist = $requette2->fetchAll();
if(count ($donnees_exist) == 1) {

   echo "<script>
   alert('Le contact exist deja!')
   </script>";
}
else {
   $requette=bd()->prepare ('INSERT INTO apprenant(nom, prenom, date_naiss, genre, ville, tuteur, contact) value(?,?,?,?,?,?,?)');
   $requette->execute (array($nom,$prenom,$date,$genre,$ville,$tuteur,$contact));
   header('location:apprenants.php');
}

?>