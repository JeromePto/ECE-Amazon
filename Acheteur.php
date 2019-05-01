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
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
  <link rel="stylesheet" href="bootstrap/assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
  <div class="page-wrap">
    <header class="header header-transparent" id="header-main">
      <!-- Topbar -->
      <div id="navbar-top-main" class="navbar-top navbar-dark bg-dark border-bottom">
        <div class="container px-0">
          <div class="navbar-nav align-items-center">
            <div class="d-none d-lg-inline-block">
              <a class="navbar-brand mr-lg-5" href="Acheteur.html">
                <img src="images/white.png" height="50" width="110">
              </a>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acheter</a>
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
                  </ul>
                </li>
              </div>

              <div class="ml-auto">
                <ul class="nav">             
                  <a class="nav-link" href="bootstrap/pages/shop/checkout-cart.html"><i class="fas fa-shopping-cart"></i>Panier</a>              
                  <a class="nav-link" href="#">
                    <i class="fas fa-user-circle"></i>Mon compte
                  </a>
                  <a class="nav-link" href="#">
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
          <div class="section-inner bg-gradient-primary"></div>
          <style type="text/css">
          .section-inner{
            top:0;
            left:0;
            width:100%; 
            height:60% !important;  
            z-index:-2
          }
        </style>
        <!-- Features (v1) -->
        <section id="sct-page-examples" class="slice bg-section-secondary">
          <h4 class="vente" class="blink"><strong>Ventes Flash :</strong></h4></li>
          <style type="text/css">
          h4.vente{
           padding-left:30px; 
           margin-left:10% auto;
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
    </div>
    <footer>
      <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
        <div class="col-md-6">
          <div class="copyright text-sm font-weight-bold text-center text-md-left">
            &copy; 2019 <a href="https://ece.fr" class="font-weight-bold" target="_blank">ECE Paris</a>. Tous droits reservés.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/JeromePto/ECE-Amazon/" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/ECE.Paris/" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
          </ul>
        </div>
      </footer>
      <style type="text/css">
      * {
        margin: 0;
      }
      html, body {
        height: 100%;
      }
      .page-wrap {
        min-height: 100%;
        /* equal to footer height */
        margin-bottom: -142px;  
      }
      .page-wrap:after {
        content: "";
        display: block;
      }
      .site-footer, .page-wrap:after {
        /* .push must be the same height as footer */
        height: 142px; 
      }
    </style>
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