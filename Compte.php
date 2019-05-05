<?php
session_start(); 
?>
 
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Groupe13">
  <title>Page compte</title>
  <!-- Favicon -->
  <link rel="icon" href="image/boutique.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="bootstrap/assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
  <header class="header bg-dark" id="header-main">
    <div id="navbar-top-main" class="navbar-top navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <!-- logo cliquable -->
            <a class="navbar-brand mr-lg-5" href="<?php echo $_SESSION['home'];?>">
              <img src="images/white.png" id="navbar-logo" style="height: 50px;">
            </a>
            <!-- menu deroulant "acheter" -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acheter</a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="Livre.php" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- Icone et titre pour categorie -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/livre.jpg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>                        
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
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/musique.png" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
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
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/vetement.png" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
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
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/sport.png" class=svg-inject img-fluid" style="height: 50px;">
                        </figure>
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
            <!-- partie droite de l'en-tete -->
            <div class="ml-auto">
              <ul class="nav"> 
                <!-- message de bienvenue personnalisé --> 
                <a class="nav-link">Bienvenue <?php echo $_SESSION['prenom'] ?> !</a>   
                <!-- bouton d'accès au panier -->   
                <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart"></i>Panier</a>    
                <!-- bouton d'acces au profil courant -->           
                <a class="nav-link" href="Compte.php"><i class="fas fa-user-circle"></i>Mon compte</a>
                <!-- bouton de déconnexion  --> 
                <a class="nav-link" href="Deconnexion.php"><i class="fas fa-sign-out-alt"></i>Se deconnecter</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </header>
  <div class="main-content">
    <div class="container"><br>
      <h3 class="info text-dark"><strong>Votre Profil :</strong></h4><br> 
        <div class="card-image">
          <img alt="Image placeholder"  style="float:left;padding-right: 1.8em " src="images/profil.png" style="max-width: 10%" img-fluid">
          <br>
          <h5 class="info text-dark"><strong>Prenom : </strong><?php echo $_SESSION['prenom'] ?></h5>
          <h5 class="info text-dark"><strong>Nom : </strong><?php echo $_SESSION['nom'] ?></h5>
          <h5 class="info text-dark"><strong>Adresse e-mail : </strong><?php echo $_SESSION['mail'] ?></h5>
          <h5 class="info text-dark"><strong>Adresse postale : </strong><?php echo $_SESSION['adresse'] ?></h5>
          <br><br><br><br>    
        </div>
      </style>
    </div>
    <footer id="footer-main">
      <div class="footer footer-dark bg-dark">
        <div class="container">
          <div class="row pt-md">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <!-- logo cliquable et texte associé --> 
              <a href="Acheteur.php">
                <img src="images/white.png" alt="Footer logo" style="height: 70px;">
              </a>
              <p>ECE Shop est la première plateforme de vente en ligne simple, rapide, et proche de ses clients. Nous ne vendons que ce que nous connaissons.</p>
            </div>
            <!-- redirige vers page profil --> 
            <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
              <h6 class="heading mb-3">Compte</h6>
              <ul class="list-unstyled">
                <li><a href="Compte.php">Mon profil</a></li>
              </ul>
            </div>
            <!-- section a propos -->
            <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
              <h6 class="heading mb-3">A propos</h6>
              <ul class="list-unstyled text-small">
              <li><a href="cible10.php?page=0" style="color:white;">Accueil</a></li>
              <li><a href="cible10.php?page=1" style="color:white;">Contact</a></li>
              <li><a href="cible10.php?page=2" style="color:white;">Avis</a></li>
              </ul>
            </div>
          </div>
          <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
            <div class="col-md-6">
              <div class="copyright text-sm font-weight-bold text-center text-md-left">
                &copy; 2018-2019 ECE Shop. Tous droits réservés.
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
</body>

</html>