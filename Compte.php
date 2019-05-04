<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Groupe13">
  <title>Accueil Acheteur</title>
  <!-- Favicon -->
  <link rel="icon" href="bootstrap/assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="bootstrap/assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <a class="navbar-brand mr-lg-5" href="<?php echo $_SESSION['home'];?>">
              <img src="images/white.png" id="navbar-logo" style="height: 50px;">
            </a>
            
          </div>

          <div class="ml-auto">
            <ul class="nav">             
              <a class="nav-link" href="shop-landing.php">
                <i class="fas fa-sign-out-alt"></i>Se deconnecter
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="main-content">
    <!-- Header (v1) -->
    <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
      <div class="section-inner bg-dark"></div>
      <style type="text/css">
      .section-inner{ 
        height:100% !important;  
      }
    </style>
    <!-- Features (v1) -->
    <div class="container"><br>
      <h3 class="info"><strong>Votre Profil :</strong></h4><br> 
        <div class="card-image">
          <img alt="Image placeholder" src="images/defautProfil.png" style="max-width: 20%" img-fluid">
        </div><br><br>

        <h5 class="info">Prenom : <?php echo $_SESSION['prenom'] ?></h5>
        <h5 class="info">Nom : <?php echo $_SESSION['nom'] ?></h5>
        <h5 class="info">Adresse e-mail : <?php echo $_SESSION['mail'] ?></h5>
        <h5 class="info">Adresse postale : <?php echo $_SESSION['adresse'] ?></h5>    
      </div>
      <style type="text/css">
      h3.info{
        color:white; 
      }
      h5.info{
        color: white; 
      }
    </style>
  </div>
  <footer id="footer-main">
    <div class="footer footer-dark bg-dark">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="Acheteur.php">
              <img src="images/white.png" alt="Footer logo" style="height: 70px;">
            </a>
            <p>ECE Shop est la première plateforme de vente en ligne simple, rapide, et proche de ses clients. Nous ne vendons que ce que nous connaissons.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Compte</h6>
            <ul class="list-unstyled">
              <li><a href="compte.php">Mon profil</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">A propos</h6>
            <ul class="list-unstyled text-small">
              <li><a href="shop-landing.php" style="color:white;">Accueil</a></li>
              <li><a href="shop-landing.php#contact" style="color:white;">Contact</a></li>
              <li><a href="shop-landing.php#avis" style="color:white;">Avis</a></li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              &copy; 2018-2019 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">ECE Shop</a>. Tous droits réservés.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/JeromePto/ECE-Amazon" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/ECE-Paris" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="bootstrap/assets/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="bootstrap/assets/libs/swiper/dist/js/swiper.min.js"></script>
<!-- Purpose JS -->
<script src="bootstrap/assets/js/purpose.js"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="bootstrap/assets/js/demo.js"></script>
</body>

</html>