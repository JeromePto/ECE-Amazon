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
    <!-- En-tete principal -->
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
                        <!-- Icone -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/livre.jpg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Titre et description pour chaque categorie -->
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
                        <!-- Icone -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/musique.png" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Titre et description pour chaque categorie -->
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
                        <!-- Icone -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/vetement.png" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Titre et description pour chaque categorie -->
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
                        <!-- Icone -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/sport.png" class=svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Titre et description pour chaque categorie -->
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
                <a class="nav-link" href="Compte.php">
                  <i class="fas fa-user-circle"></i>Mon compte
                </a>
                <a class="nav-link" href="shop-landing.html">
                  <i class="fas fa-sign-out-alt"></i>Se deconnecter
                  <?php session_destroy();?>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="main-content">
      <!-- en tete coloré -->
      <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
        <div class="section-inner bg-gradient-primary"></div>
        <style type="text/css">
        .section-inner{ 
          height:100% !important;  
        }
      </style>
      <!-- Presentation complete du produit -->
      <section class="py-2 delimiter-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h6 class="mb-0">Nom du produit</h6>
            </div>
          </div>
        </div>
      </section>
      <section class="slice">
        <div class="container">
          <div class="row row-grid">
            <div class="col-lg-6">
              <div data-toggle="sticky" data-sticky-offset="30">
                <a href="bootstrap/assets/img/theme/light/shop-product-lg-2.jpg" data-fancybox>
                  <img alt="Image placeholder" src="bootstrap/assets/img/theme/light/shop-product-lg-2.jpg" class="img-fluid">
                </a>
                <div class="mt-4 text-center">
                  <a href="bootstrap/assets/img/theme/light/shop-product-lg-2.jpg" data-fancybox>Voir les images</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="pl-lg-5">
                <!-- Nom du produit -->
                <h5 class="h4">Nom du produit</h5>
                <h6 class="text-sm">Description breve des composants</h6>
                <!-- Note du produit -->
                <div class="row align-items-center">
                  <div class="col-6">
                    <span class="static-rating static-rating-sm d-block"><i class="star fas fa-star voted"></i>
                      <i class="star fas fa-star voted"></i>
                      <i class="star fas fa-star voted"></i>
                      <i class="star fas fa-star voted"></i>
                      <i class="star fas fa-star"></i></span>
                    </div>
                    <div class="col-6 text-right">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <span class="badge badge-pill badge-soft-info">ID: #548970</span>
                        </li>
                        <li class="list-inline-item">
                          <span class="badge badge-pill badge-soft-success">En stock</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Description -->
                  <div class="py-4 my-4 border-top border-bottom">
                    <h6 class="text-sm">Description :</h6>
                    <p class="text-sm mb-0">
                      Description du produit.
                    </p>
                  </div>
                  <!-- information supplementaires sur le produit ex: taille, couleur... -->
                  <dl class="row">
                    <dt class="col-sm-3"><span class="h6 text-sm mb-0">Taille</span></dt>
                    <dd class="col-sm-9"><span class="text-sm">34x35 cm</span></dd>
                    <dt class="col-sm-3"><span class="h6 text-sm mb-0">Hauteur</span></dt>
                    <dd class="col-sm-9"><span class="text-sm">15 cm</span></dd>
                  </dl>
                  <!-- Taille -->
                  <div class=" py-4 my-4 border-top border-bottom">
                    <!-- Choix multiple pour variation : pointure pour des chaussures, couleurs... -->
                    <h6 class="mt-5">Pointure</h6>
                    <a href="#" class="text-sm">Quelle est vote pointure ?</a>
                    <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                      <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm">
                        <input type="radio" name="radio-memory" value="1" checked="">
                        38
                      </label>
                      <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm active">
                        <input type="radio" name="radio-memory" value="2">
                        40
                      </label>
                    </div>
                    <!-- Choix multiple pour variation -->
                    <h6 class="mt-5">Couleur</h6>
                    <a href="#" class="text-sm">Quelle couleur souhaitez-vous ?</a>
                    <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                      <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm active">
                        <input type="radio" name="radio-storage" value="1" checked="">
                        Rouge
                      </label>
                      <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm">
                        <input type="radio" name="radio-storage" value="2">
                        Bleu
                      </label>
                      <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                        <input type="radio" name="radio-storage" value="3">
                        Vert
                      </label>
                      <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                        <input type="radio" name="radio-storage" value="4">
                        Jaune
                      </label>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-6 mb-4 mb-sm-0">
                        <span class="d-block h3 mb-0">200€</span> <!--prix-->
                        <a href="#" class="text-sm">Choisissez un moyen de paiment</a>
                      </div>
                      <div class="col-sm-6 text-sm-right">
                        <!-- Add to cart -->
                        <button type="button" class="btn btn-primary btn-icon">
                          <span class="btn-inner--icon"><i class="fas fa-shopping-bag"></i></span>
                          <span class="btn-inner--text">Ajouter au panier</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="slice slice-lg delimiter-top" id="sct-suggested-products">
          <div class="container">
            <div class="mb-5 text-center">
              <h3 class="h6">Produits similaires<i class="fas fa-angle-down text-xs ml-3"></i></h3>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="card card-product">
                  <div class="card-image">
                    <a href="#">
                      <img alt="Image placeholder" src="bootstrap/assets/img/theme/light/product-1.png" class="img-center img-fluid">
                    </a>
                  </div>
                  <div class="card-body text-center pt-0">
                    <h6><a href="#">Nom produit</a></h6>
                    <p class="text-sm">
                      Description produit.
                    </p>
                    <span class="card-price">20€</span>
                  </div>
                  <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                    <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                      <i class="fas fa-shopping-bag"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-product">
                  <div class="card-image">
                    <a href="#">
                      <img alt="Image placeholder" src="bootstrap/assets/img/theme/light/product-2.png" class="img-center img-fluid">
                    </a>
                  </div>
                  <div class="card-body text-center pt-0">
                    <h6><a href="#">Nom produit</a></h6>
                    <p class="text-sm">
                      Description Produit.
                    </p>
                    <span class="card-price">20€</span>
                  </div>
                  <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                    <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                      <i class="fas fa-shopping-bag"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-product">
                  <div class="card-image">
                    <a href="#">
                      <img alt="Image placeholder" src="bootstrap/assets/img/theme/light/product-3.png" class="img-center img-fluid">
                    </a>
                  </div>
                  <div class="card-body text-center pt-0">
                    <h6><a href="#">Nom produit</a></h6>
                    <p class="text-sm">
                      Description produit.
                    </p>
                    <span class="card-price">20€</span>
                  </div>
                  <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                    <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                      <i class="fas fa-shopping-bag"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-product">
                  <div class="card-image">
                    <a href="#">
                      <img alt="Image placeholder" src="bootstrap/assets/img/theme/light/product-4.png" class="img-center img-fluid">
                    </a>
                  </div>
                  <div class="card-body text-center pt-0">
                    <h6><a href="#">Nom produit</a></h6>
                    <p class="text-sm">
                      Description produit.
                    </p>
                    <span class="card-price">20€</span>
                  </div>
                  <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                    <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                      <i class="fas fa-shopping-bag"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
                  <li><a href="form_inscription.html">Mon profil</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                <h6 class="heading mb-3">A propos</h6>
                <ul class="list-unstyled text-small">
                  <li><a href="shop-landing.html">Accueil</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="#avis">Avis</a></li>
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