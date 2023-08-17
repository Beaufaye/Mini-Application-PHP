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
  
        
            <form action="insertion_apprenants.php" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label text-light">Nom</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Entrer le nom" name="nom" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label text-light">Prénom</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Entrer le prénom" name="prenom" required>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label text-light">Date de naissance</label>
                    <input type="date" class="form-control" id="inputAddress" name="date_naiss" required>
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label text-light">Sexe</label>
                    <select id="inputState" class="form-select" name="sexe" required>
                        <option selected>Choisissez..</option>
                        <option>Masculin</option>
                        <option>Feminin</option>
                    </select>
                </div>
                
                <div class="col-md-6">
                    <label for="inputState" class="form-label text-light">Ville</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Entrer la ville" name="ville" required>
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label text-light" >Contact</label>
                    <input type="number" class="form-control" id="inputZip" placeholder="Entrer le contact" name="contact" required>
                </div>
                <div class="col-12">
                  
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="sendapprenants" type="submit" value="Ajouter" name="ajouter" onclick='return confirmation()'>Enregistrer</button>
                    <button type="submit" class="btn btn-light" id="annuler" type="" value="Annuler" name="annuler">Annuler</button>
                </div>
        </form>        
    </div>

    <script>
      function confirmation()
      {
        return confirm('Voulez-vous enregistrer ce tuteur?');
      }
    </script>
   
        

   
  

    <script type="text/javascript" src="js/navigateur.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/details.js"></script>
    <script type="text/javascript">
        
    </script>
</body>

</html>