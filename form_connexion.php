<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Groupe13">
  <title>Connexion</title>
  <!-- Icone onglet -->
  <link rel="icon" href="images/boutique.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
  <?php 
  if (isset($_GET['erreur']))
  {
  if ($_GET['erreur']==10) 
  {
    ?>
    <div class="alert alert-danger" role="alert">
      <strong>Attention !</strong> <a href="#" class="alert-link">Mot de passe incorrect</a>, recommencer avec un autre mail.
    </div>
    <?php
  }
  elseif ($_GET['erreur']==5) 
  {
  ?>
    <div class="alert alert-danger" role="alert">
    <strong>Attention !</strong> <a href="#" class="alert-link">Vous n'êtes pas reconnus en tant qu'acheteur</a>.
    </div>
  <?php
  }
  elseif ($_GET['erreur']==6) 
  { ?>
    <div class="alert alert-danger" role="alert">
    <strong>Attention !</strong> <a href="#" class="alert-link">Vous n'êtes pas reconnus en tant que vendeur</a>.
    </div>
  <?php

  }
  elseif ($_GET['erreur']==15) 
  { ?>
    <div class="alert alert-danger" role="alert">
    <strong>Attention !</strong> <a href="#" class="alert-link">Vous n'êtes pas reconnus en tant qu'admin</a>.
    </div>
  <?php

  }  
}
  ?>
  <div class="main-content">
    <div class="container h-100vh d-flex align-items-center">
      <div class="col">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5 col-xl-4">
            <div>
              <div class="mb-5 text-center">
                <h6 class="h3">Connexion</h6>
                <p class="text-muted mb-0">Connectez-vous pour arriver au paradis !</p>
              </div>
              <span class="clearfix"></span>
              <form role="form" action="cible2.php" method="post">
                <div class="form-group">
                  <label class="form-control-label">Adresse mail</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" name="mail" class="form-control" id="input-email" placeholder="name@example.com" required="">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <label class="form-control-label">Mot de passe</label>
                    </div>
                    <div class="mb-2">
                      <a href="form_mdpoublie.html" class="small text-muted text-underline--dashed border-primary">Mot de passe oublié ?</a>
                    </div>
                  </div>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="mdp" class="form-control" id="input-password" placeholder="Password" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-eye"></i>
                      </span>
                    </div>
                  </div>
                </div>
                    Vous êtes un: 
                <div>
                  <input type="radio"  name="choix" value="1" required="" >
                  <label for="huey">Acheteur</label>
                </div>
                <div>
                  <input type="radio"  name="choix" value="2" >
                  <label for="dewey">Vendeur/Administrateur</label>
                </div>
                <div class="mt-4">
                  <button href="Acheteur.html" type="submit" class="btn btn-block btn-primary">Connexion</button></div>
              </form>
              <div class="mt-4 text-center"><small>Pas encore inscrit ?</small>
                <a href="form_inscription.php" class="small font-weight-bold">Créer un compte</a></div>
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