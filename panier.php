<?php
session_start();
include("API/panier.php");
include("API/item.php");

if (!isset($_SESSION['id'])) {
  header("location: shop-landing.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>Purpose Website UI Kit - Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</title>
  <!-- Favicon -->
  <link rel="icon" href="bootstrap/assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
  <script type="text/javascript" src="panier.js"></script>
</head>

<body>
  <header class="header header-transparent" id="header-main">
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
                <a class="nav-link" href="bootstrap/pages/shop/checkout-cart.html"><i class="fas fa-shopping-cart"></i>Panier</a>              
                <a class="nav-link" href="Compte.php">
                  <i class="fas fa-user-circle"></i>Mon compte
                </a>
                <a class="nav-link" href="shop-landing.html">
                  <i class="fas fa-sign-out-alt"></i>Se deconnecter
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="main-content">
      <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
        <div class="section-inner bg-dark"></div>
        <style type="text/css">
        .section-inner{ 
          height:100% !important;  
        }
      </style>
    <!-- Header (account) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="mb-5">
              <h3 class="h3">Mon panier<i class="fas fa-angle-down text-xs ml-3"></i></h3>
            </div>
        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table table-cards align-items-center">
            <thead>
              <tr>
                <th scope="col" class="sort" data-sort="product">Produit</th>
                <th scope="col" class="sort" data-sort="price">Prix</th>
                <th scope="col" class="sort" data-sort="variation">Specifications</th>
                <th scope="col">Quantité</th>
                <th scope="col" class="sort" data-sort="total">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">

            <?php
            for($i = 0 ; $i < getItemNumberInPanier($_SESSION['id']) ; $i++) {?>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <img alt="Image placeholder" src="<?php echo 'images/'.getItemInfo(getIdByPos($_SESSION['id'], $i))['PHOTO'];?>" class="" style="width: 80px;">
                    <div class="media-body pl-3">
                      <div class="lh-100">
                        <span class="text-dark font-weight-bold mb-0"><?php echo getItemInfo(getIdByPos($_SESSION['id'], $i))['NOM'];?></span>
                      </div>
                    </div>
                  </div>
                </th>
                <td class="price">
                  <?php echo getItemInfo(getIdByPos($_SESSION['id'], $i))['PRIX'];?> €
                </td>
                <td>
                  <div class="lh-100">
                    <span class="text-dark font-weight-bold mb-0">Taille: 42</span>
                  </div>
                  <span class="text-dark font-weight-bold mb-0">Couleur: bleu</span>
                </td>
                <td>
                  <input type="text" id="<?php echo 'panierElem'.$i;?>" class="form-control form-control-sm text-center" style="width: 80px;" value="<?php echo getItemInfoPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $i))['QUANTITE'];?>" onchange="<?php echo('change('.$i.','.getItemInfo(getIdByPos($_SESSION['id'], $i))['STOCK'].')');?>">
                </td>
                <td class="total">
                  <?php echo (getItemInfo(getIdByPos($_SESSION['id'], $i))['PRIX'] * getItemInfoPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $i))['QUANTITE']);?> €
                </td>
                <td class="text-right">
                  <!-- Actions -->
                  <div class="actions ml-3">
                    <a href="<?php echo 'Produit.php?id='.getIdByPos($_SESSION['id'], $i);?>" class="action-item mr-2" data-toggle="tooltip" title="Voir l'article">
                      <i class="fas fa-external-link-alt"></i>
                    </a>
                    <a href="<?php echo 'actionPanier.php?action=1&param1='.$i;?>" class="action-item mr-2" data-toggle="tooltip" title="Supprimer du panier">
                      <i class="fas fa-times"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="table-divider"></tr>

            <?php }?>

            </tbody>
          </table>
        </div>
        <!-- Cart information -->
        <div class="card mt-5 bg-secondary">
          <div class="card-body">
            <div class="row justify-content-between align-items-center">
              <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <div class="d-flex align-items-center justify-content-md-end">
                  <span class="h6 text-muted d-inline-block mr-3 mb-0">Prix total : </span>
                  <span class="h4 mb-0"><?php echo getTotalPrix($_SESSION['id']).' €';?></span>
                </div>
              </div>
              <div class="col-md-6 order-md-1">
                <button type="button" class="btn btn-animated btn-primary btn-animated-y" onclick="redirectPaiment()">
                  <span class="btn-inner--visible">Paiement</span>
                  <span class="btn-inner--hidden">
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                </button>
                <a href="shop-landing.html" class="btn btn-link text-sm text-dark font-weight-bold">Retour à la boutique</a>
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
                <a href="bootstrap/index.html">
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
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="bootstrap/assets/js/purpose.core.js"></script>
  <!-- Purpose JS -->
  <script src="bootstrap/assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="bootstrap/assets/js/demo.js"></script>
</body>

</html>