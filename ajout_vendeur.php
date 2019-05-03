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
      <strong>Attention !</strong> <a href="#" class="alert-link">Cette adresse mail est déjà utilisée</a>, recommencer avec un autre mail.
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
                <h6 class="h3">Créer un compte</h6>
                <p class="text-muted mb-0">Fait à l'ECE !</p>
              </div>
              <span class="clearfix"></span>
              <form role="form" action="cible.php" method="post">
                <label class="form-control-label">Nom</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="nom" placeholder="Segado" required="">
                </div>
                <label class="form-control-label">Prénom</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="prenom" placeholder="Jean Pierre" required="">
                </div>
                <label class="form-control-label">Adresse</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="adresse" placeholder="ECE Paris pour la vie" required="">
                </div>                  
                <label class="form-control-label">Adresse mail</label>
                <div class="input-group input-group-merge">
                  <input type="email" class="form-control" name="mail" placeholder="JP@segadolemeilleur.com">
                </div>
                <div class="form-group mb-4">
                  <label class="form-control-label">Mot de passe</label>
                  <div class="input-group input-group-merge">
                    <input type="password" class="form-control" name="mdp" placeholder="********" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-eye"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="choix" value="2"/>                
                <div class="mt-4">
                  <button type="submit" class="btn btn-block btn-primary">Créer mon compte !</button></div>
                </form>
                <div class="mt-4 text-center"><small>Vous avez déjà un compte ?</small>
                  <a href="form_connexion.html" class="small font-weight-bold">Connectez-vous !</a></div>
                </div>
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