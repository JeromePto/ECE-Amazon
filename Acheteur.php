<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Webpixels">
  <title>ECE Shop</title>
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
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <span class="navbar-text mr-3"><strong>ECE Shop</strong></span>
          </div>
          <div class="ml-auto">
            <ul class="nav">
          <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acheter</a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
              <ul class="list-group list-group-flush">
                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                  <a href="bootstrap/pages/utility/support.html" class="list-group-item list-group-item-action" role="button">
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
                  <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item">
                <a class="nav-link" href="bootstrap/pages/utility/support.html">A propos</a>
              </li>
              </ul>    
            </div>
          </li>             
              <li class="nav-item">
                <a class="nav-link" href="bootstrap/pages/shop/checkout-cart.html"><i class="fas fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <h6 class="dropdown-header">Mon profil: <?php echo $_SESSION['prenom']; ?></h6>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user"></i>Mon compte
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cog"></i>Parametres
                  </a>
                  <div class="dropdown-divider" role="presentation"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-sign-out-alt"></i>Se deconnecter
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center">
          <!-- bootstrap/pages menu -->
        </ul>
      </div>
    </div>
  </header>
  <div class="main-content">
    <!-- Header (v1) -->
    <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
      <div class="section-inner bg-gradient-primary"></div>
      <!-- Features (v1) -->
      <section id="sct-page-examples" class="slice bg-section-secondary">
        <h4 class="vente" class="blink"><strong>Vente Flash :</strong></h4></li>
        <style type="text/css">
          h3.vente{
             margin: 30px;
          }
        </style>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                <div class="px-4 py-5">
                  <img alt="Image placeholder" src="bootstrap/assets/img/Produits/iphone.png" class="svg-inject" style="height: 180px;">
                </div>
                <div class="px-4 pb-5">
                  <h5>Iphone X</h5>
                  <p class="text-muted">999€ </p>
                    <div class="mt-5">
                      <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                        <span class="btn-inner--text">Consulter l'article</span>
                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                      </a> 
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                <div class="px-4 py-5">
                  <img alt="Image placeholder" src="bootstrap/assets/img/Produits/macbook.jpg" class="svg-inject" style="height: 180px;">
                </div>
                <div class="px-4 pb-5">
                  <h5>Macbook Air</h5>
                  <p class="text-muted">2000€</p>
                    <div class="mt-5">
                      <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                        <span class="btn-inner--text">Consulter l'article</span>
                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                      </a> 
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                <div class="px-4 py-5">
                  <img alt="Image placeholder" src="bootstrap/assets/img/Produits/ipad.png" class="svg-inject" style="height: 180px;">
                </div>
                <div class="px-4 pb-5">
                  <h5>Ipad</h5>
                  <p class="text-muted">599€</p>
                    <div class="mt-5">
                      <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                        <span class="btn-inner--text">Consulter l'article</span>
                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                      </a> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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