
<?php 
session_start();
//$_SESSION['id'] = $_GET['id']; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>ECE Amazon</title>
  <!-- icone onglet -->
  <link rel="icon" href="images/boutique.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
  <?php 
  if (isset($_GET['erreur']))
  {
    if ($_GET['erreur']==10) {
      ?>
      <div class="alert alert-danger" role="alert">
        <strong>Attention !</strong> <a href="#" class="alert-link">Le prix ne peut être négatif !</a>.
      </div>
      <?php
    }
    if ($_GET['erreur']==5) {
      ?>
      <div class="alert alert-danger" role="alert">
        <strong>Attention !</strong> <a href="#" class="alert-link">Le stock ne peut être négatif !</a>.
      </div>
      <?php
    }
  }
  ?>
  <div class="main-content">
    <div class="container min-vh-100 d-flex align-items-center">
      <div class="col py-5">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div>
              <div class="mb-5 text-center">
                <h6 class="h3">Vendre un item</h6>
                <p class="text-muted mb-0">Fait à l'ECE !</p>
              </div>
              <span class="clearfix"></span>                    <!-- identification, son nom, sa/ses photo/s, ses descriptions, sa vidéo (si disponible), sa catégorie et son prix à l’unité -->
              <form role="form" action="cible4.php" method="post" enctype="multipart/form-data">
                <label class="form-control-label">Nom</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="nom" placeholder="Segado" required="">
                </div>
                <label class="form-control-label">Nombre de produits</label>
                <div class="input-group input-group-merge">
                  <input type="number" class="form-control" name="stock" placeholder="3"required="" min="1">
                </div>                
                <label class="form-control-label">Photo</label>
                  <table>
                    <tr>
                      <td>Sélectionnez le fichier à télécharger:</td>
                      <td><input type="file" name="fileToUpload"></td>
                    </tr>
                   </table>              
                 <label class="form-control-label">Description</label>
                 <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="description" placeholder="C'est un super produit !" required="">
                </div>
                <label class="form-control-label">Prix</label>
                <div class="input-group input-group-merge">
                  <input type="number" class="form-control" name="prix" placeholder="100" required="" min="0">
                </div>                                             
                Catégorie: 
                <div>
                  <input type="radio"  name="categorie" value="1" required="" >
                  <label >Livre</label>
                </div>
                <div>
                  <input type="radio"  name="categorie" value="2" required="" >
                  <label >Musique</label>
                </div>
                <div>
                  <input type="radio"  name="categorie" value="3" required="" >
                  <label >Vêtement</label>
                </div>
                <div>
                  <input type="radio"  name="categorie" value="4" required="" >
                  <label >Sport et loisir</label>
                </div>
                <div class="mt-4">
                  <button type="submit" class="btn btn-block btn-primary">Vendre mon item</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="bootstrap/assets/js/purpose.core.js"></script>
    <!-- Purpose JS -->
    <script src="bootstrap/assets/js/purpose.js"></script>
    <!-- Demo JS - remove it when starting your project -->
    <script src="bootstrap/assets/js/demo.js"></script>
  </body>

  </html>