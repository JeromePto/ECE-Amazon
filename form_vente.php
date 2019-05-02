
<!--

<?php 
//session_start();
//$_SESSION['id'] = $_GET['id']; 
?>

Cette ligne de code sert à communiquer les informations de sessions à la page php de traitement de données. 

-->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>ECE Amazon</title>
  <!-- Favicon -->
  <link rel="icon" href="bootstrap/assets/img/brand/favicon.png" type="image/png">
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
      <strong>Attention !</strong> <a href="#" class="alert-link">L'item est déjà présent dans la collection</a>.
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
              <form role="form" action="cible4.php" method="post">
                <label class="form-control-label">Nom</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="nom" placeholder="Segado" required="">
                </div>
                <div class="input-group input-group-merge">
                  <input type="hidden" class="form-control" name="vendeur" value="" placeholder="Jean Pierre" required="">
                </div>
                <label class="form-control-label">Nombre de produits</label>
                <div class="input-group input-group-merge">
                  <input type="number" class="form-control" name="stock" placeholder="C'est un super produit !"required="">
                </div>                
                <label class="form-control-label">Photo</label>
                <div class="input-group input-group-merge">
                  <input type="file" class="form-control" name="photo">
                </div>                  
                <label class="form-control-label">Description</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="description" placeholder="C'est un super produit !" required="">
                </div>
                <label class="form-control-label">Prix</label>
                <div class="input-group input-group-merge">
                  <input type="number" class="form-control" name="prix" placeholder="C'est un super produit !" required="">
                </div>
                <label class="form-control-label">Variation</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="variation" placeholder="C'est un super produit !" required="">
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
                  <button type="submit" class="btn btn-block btn-primary">Vendre mon item</button></div>
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