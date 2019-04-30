<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Webpixels">
  <title>Page Acheteur</title>
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
            <a class="navbar-brand mr-lg-5" href="Acheteur.html">
              <img src="images/white.png" height="50" width="110">
            </a>
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendre</a>
            </li> 
          </div>
          <div class="ml-auto">
            <ul class="nav">                          
            <a class="nav-link" href="#">
              <i class="fas fa-user-circle"></i>Mon compte: <?php $_SESSION['prenom'] ?>
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
    <!-- Features (v1) -->
    <section id="sct-page-examples" class="slice bg-section-secondary">
      <h4 class="vente" class="blink"><strong>Vos ventes en cours :</strong></h4></li>
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