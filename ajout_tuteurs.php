<?php
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des Tuteurs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
        <?php
                require_once 'menu.php';     
        ?>
                <div class="text-center">
                    <h2>AJOUTER DES TUTEURS</h2>
                </div>

                <?php 
                                        
                ?>
   <!-- FORMULAIRE CHANCELLA-->

   <div class="m-5 bg-danger"  >
   <form action="" method="post">
        <div class="row mt-3">
                 <div class="col-5 m-3">
                            <input type="text" class="form-control m-2" placeholder="Nom" name="nom">
                </div>
        <div class="col-5 m-3">
                <input type="text" class="form-control m-2" placeholder="Prenom" name="prenom">
        </div>
         </div>

                <div class="row mt-3">
                          <div class="col-5 m-3">
                                    <input type="date" class="form-control m-2" placeholder="Date de naissance" name="date_naiss">
                          </div>
                        <div class="col-5 m-3">
                         </div>
                          </div>
                              <div class="row mt-3">
                                            <div class="col-5 m-3">
                                              <input type="text" class="form-control m-2" placeholder=" Ville" name="ville">
                                            </div>
                                            <div class="col-5 m-3">
                                              <input type="number" class="form-control m-2" placeholder="Contact" name="contact">
                                            </div>
                            </div>
                                    
                                          <div class="row">
                                                <div class="row m-2">
                                                        <div class="buttonap ">
                                                            <input id="sendTuteurs" type="submit" value="Ajouter" name="ajouter" class="btn btn-light sbouton2 col-2">
                                                            <input id="annuler" type="" value="Annuler" name="valider" class="btn btn-light sbouton2 col-2">
                                                        </div>
                                                       
                                                         
                                                </div>
                              </form>              
    </div>
       
   
        

   
  

    <script type="text/javascript" src="js/navigateur.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/details.js"></script>
    <script type="text/javascript">
        afficher('formulaire');
    </script>
</body>

</html>