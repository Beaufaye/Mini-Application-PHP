<?php
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tuteurs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid m-5 bg-danger" style="height: 95px;">
                                <img src="images/logo simplon.png" alt
                                        style="width: 90px; height: 60px;">
                                <div class="collapse navbar-collapse"
                                        id="navbarTogglerDemo03">
                                        <ul
                                                class="navbar-nav me-auto mb-2 mb-lg-0">

                                                <div>
                                                        <li class="nav-item">
                                                                <a
                                                                        class="nav-link active text-light"
                                                                        aria-current="page"
                                                                        style="font-size: 40px;"
                                                                        href="index.php">Acceuil</a>
                                                        </li>
                                                </div>
                                                <li class="nav-item">
                                                        <a
                                                                class="nav-link text-light"
                                                                href="apprenants.php"
                                                                style="font-size: 40px;">Apprenants</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a
                                                                class="nav-link text-light"
                                                                style="font-size: 40px;"
                                                                href="tuteurs.php">Tuteurs</a>
                                                </li>
                                        </ul>
                                        <img src="images/hcr.png" alt
                                                style="width: 100px; height: 60px;">
                                </div>
                        </div>
                </nav>

   <!-- FORMULAIRE CHANCELLA-->

   
   



    
   
   <div class="m-5 text-center text-light bg-danger" height: 55px;>
        <h2>COPYRIGHT SIMPLON 2023</h2>
    </div>
  

    <script type="text/javascript" src="js/navigateur.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/details.js"></script>
    <script type="text/javascript">
        afficher('formulaire');
    </script>
</body>

</html>