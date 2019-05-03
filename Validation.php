<?php
session_start();

try
{
        // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM item');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Groupe13">
  <title>Validation</title>
  <!-- Favicon -->
  <link rel="icon" href="bootstrap/assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
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
            <a class="navbar-brand mr-lg-5" href="Acheteur.php">
              <img src="images/white.png" id="navbar-logo" style="height: 50px;">
            </a>
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acheter</a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="Livre.php" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/livre.jpg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Livres</h6>
                          <p class="mb-0">Collection de livres et BD</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="Musique.php" class="list-group-item list-group-item-action dropdown-toggle" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/musique.png" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Musique</h6>
                          <p class="mb-0">La musique de votre choix</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="Vetement.php" class="list-group-item list-group-item-action dropdown-toggle" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/vetement.png" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Vetements</h6>
                          <p class="mb-0">Notre collection de vetements</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="Sport.php" class="list-group-item list-group-item-action dropdown-toggle" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/sport.png" class=svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Sports et Loisirs</h6>
                          <p class="mb-0">Notre collection d'equipements sportifs</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </div>

            <div class="ml-auto">
              <ul class="nav">       
                <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart"></i>Panier</a>              
                <a class="nav-link" href="Compte.php"><i class="fas fa-user-circle"></i>Mon compte</a>
                <a class="nav-link" href="shop-landing.php"><i class="fas fa-sign-out-alt"></i>Se deconnecter</a>
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

      <section class="slice slice-lg vh-100 bg-light overflow-hidden" data-offset-top="#header-main">
        <div class="bg-absolute-cover vh-100 overflow-hidden">
        </div>
        <div class="container h-100 d-flex align-items-center position-relative zindex-100">
          <div class="col">
            <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                <h6 class="h1 mb-5 font-weight-400 text-dark">Votre achat a bien été confirmé !</h6>
                <a href="shop-landing.php" class="btn btn-white btn-icon rounded-pill hover-translate-y-n3">
                  <span class="btn-inner--icon"><i class="fas fa-home"></i></span>
                  <span class="btn-inner--text">Accueil</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="position-absolute bottom-0 right-4 overflow-hidden">
          <figure class="w-50">
            <img alt="Image placeholder" src="../../assets/img/svg/illustrations/design-thinking.svg" class="svg-inject opacity-2">
          </figure>
        </div>
      </section>
    </div>
    <footer id="footer-main">
      <div class="footer footer-dark bg-dark">
        <div class="container">
          <div class="row pt-md">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <a href="bootstrap/index.html">
                <img src="images/white.png" alt="Footer logo" style="height: 70px;">
              </a>
              <p style="color:white;">ECE Shop est la première plateforme de vente en ligne simple, rapide, et proche de ses clients. Nous ne vendons que ce que nous connaissons.</p>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
              <h6 class="heading mb-3" style="color:white;">Compte</h6>
              <ul class="list-unstyled">
                <li><a href="form_inscription.html" style="color:white;">Mon profil</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
              <h6 class="heading mb-3" style="color:white;">A propos</h6>
              <ul class="list-unstyled text-small">
                <li><a href="shop-landing.php" style="color:white;">Accueil</a></li>
                <li><a href="#contact" style="color:white;">Contact</a></li>
                <li><a href="#avis" style="color:white;">Avis</a></li>
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