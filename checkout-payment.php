<?php
session_start();
include("API/panier.php");
include("API/item.php");

if (!isset($_SESSION['id'])) {
  header("location: shop-landing.php");

  $req = $bdd->prepare('SELECT * FROM acheteur WHERE ID=?');
  $req->execute(array($_SESSION['id']));
  $donnees = $req->fetch();
  $mail=$donnees['MAIL'];

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Groupe13">
  <title>Paiement</title>
  <!-- Icone onglet -->
  <link rel="icon" href="images/boutique.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
  <link rel="stylesheet" href="bootstrap/assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
  <!------------------- En-tete ------------------->
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
      <?php 
      if (isset($_GET['erreur']))
      {
        if ($_GET['erreur']==5) 
        {
          ?>
          <div class="alert alert-danger" role="alert">
            <strong>Attention !</strong> <a href="#" class="alert-link">Information banquaire incorrect</a>
          </div>
          <?php
        }
      }
      ?>  
      <section class="slice">
        <div class="container">
          <div class="row row-grid">
            <div class="col-lg-8">
              <form role="form" action="actionPaiment.php" method="post">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-12">
                        <label class="h6 mb-0 lh-180">Information de paiement</label>
                        <p class="text-muted mt-2 mb-0">Saisissez vos information de paiment parmis Visa, MasterCard et AmericanExpress</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row mt-3">
                      <div class="col-md-8">
                        <div class="form-group">
                          <div class="input-group input-group-merge">
                            <input type="text" class="form-control" data-mask="0000 0000 0000 0000" placeholder="4789 5697 0541 7546" name="numero" required="">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control" data-toggle="select" title="Type de carte" name="type" required="">
                            <option selected disabled>Type de carte</option>
                            <option value="Visa">Visa</option>
                            <option value="MasterCard">MasterCard</option>
                            <option value="American Express">American Express<option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Name on card</label>
                            <input type="text" class="form-control" placeholder="John Doe" name="nom" required="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label">Expiry date</label>
                            <input type="text" class="form-control" data-mask="00/00" placeholder="MM/YY" name="date" required="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label">code CVC</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" data-mask="000" placeholder="746" name="code" required="">
                              <div class="input-group-append" data-toggle="popover" data-container="body" data-placement="top" data-content="It is a three digit code that can be found only on the back of your card. Be carefull so no one sees it." data-title="What is a CVV code?">
                                <span class="input-group-text"><i class="fas fa-question-circle"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 text-right">
                    <a href="Acheteur.php" class="btn btn-link text-sm text-dark font-weight-bold">Retour à l'accueil</a>
                    <button type="submit" class="btn btn-sm btn-success">Acheter</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-4">
                <div data-toggle="sticky" data-sticky-offset="30">
                  <div class="card" id="card-summary">
                    <div class="card-header py-3">
                      <div class="row align-items-center">
                        <div class="col-6">
                          <span class="h6">Résumé</span>
                        </div>
                        <div class="col-6 text-right">
                          <span class="badge badge-pill badge-soft-success"><?php echo getItemNumberInPanier($_SESSION['id']).' aticles';?></span>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <?php for($i = 0 ; $i < getItemNumberInPanier($_SESSION['id']) ; $i++) {?>
                        <div class="<?php echo($i==0 ? 'row' : 'row mt-3 pt-3 delimiter-top');?>">
                          <div class="col-8">
                            <div class="media align-items-center">
                              <img alt="Image placeholder" class="mr-2" src="<?php echo 'images/'.getItemInfo(getIdByPos($_SESSION['id'], $i))['PHOTO'];?>" style="width: 42px;">
                              <div class="media-body">
                                <div class="text-limit lh-100">
                                  <small class="font-weight-bold mb-0"><?php echo getItemInfo(getIdByPos($_SESSION['id'], $i))['NOM'];?></small>
                                </div>
                                <small class="text-muted"><?php echo getItemInfoPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $i))['QUANTITE'].' x '.getItemInfo(getIdByPos($_SESSION['id'], $i))['PRIX'];?> €</small>
                              </div>
                            </div>
                          </div>
                          <div class="col-4 text-right lh-100">
                            <small class="text-dark"><?php echo (getItemInfo(getIdByPos($_SESSION['id'], $i))['PRIX'] * getItemInfoPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $i))['QUANTITE']);?> €</small>
                          </div>
                        </div>
                      <?php }?>
                      <!-- total -->
                      <div class="row mt-3 pt-3 border-top">
                        <div class="col-8 text-right">
                          <small class="text-uppercase font-weight-bold">Total:</small>
                        </div>
                        <div class="col-4 text-right">
                          <span class="text-sm font-weight-bold"><?php echo getTotalPrix($_SESSION['id']).' €';?></span>
                        </div>
                      </div>
                    </div>
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
                &copy; 2018-2019ECE Shop. Tous droits réservés.
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