<?php
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire des Apprennants</title>
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
                                                                href=""
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

    <div class="text-center">
        <h2>LISTE DES APPRENANTS</h2>
    </div>

    <div class="m-5">
        <table class="table">
            <thead class="bg-danger">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Tuteur</th>
                    <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                try
                {
              
                $sql = bd()->query('SELECT * FROM apprenant ORDER BY nom ASC');
                $i=0;
                  
                while ($donnees = $sql->fetch())
                {
                    $i++;
                    echo "<tr>";
                    echo "<td> $i </td>";
                    echo "<td> $donnees[nom] </td>";
                    echo "<td> $donnees[prenom] </td>";
                    echo "<td> $donnees[date] </td>";
                    echo "<td> $donnees[genre] </td>";
                    echo "<td> $donnees[ville] </td>";
                    echo "<td> $donnees[tuteur] </td>";
                    echo "<td> $donnees[contact] </td>";
                    echo "</tr>";
                }
                $sql->closeCursor();
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }
              ?>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div>

    </div>

    <div class="text-center">
        <a class="btn btn-danger" href="ajout.php" role="button">Ajouter apprenants</a>
    </div>



    <!-- FOOTER CHANCELLA & BERYSE-->
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