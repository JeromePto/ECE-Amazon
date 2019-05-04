<?php
session_start();

if (!isset($_SESSION['id'])) {
  header("location: shop-landing.php");
}
$vendeur=$_SESSION['id'];
try {
        // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM item');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Groupe13">
  <title>Accueil Administrateur</title>
  <!-- Icone onglet -->
  <link rel="icon" href="images/boutique.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
  <link rel="stylesheet" href="bootstrap/assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">

</head>

<body>
  <!------------------- En-tete -------------------->
  <header class="header bg-dark" id="header-main">
    <div id="navbar-top-main" class="navbar-top navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <!-- logo cliquable -->
            <a class="navbar-brand mr-lg-5" href="<?php echo $_SESSION['home'];?>"
              <img src="images/white.png" id="navbar-logo" style="height: 50px;">
            </a>
            <!-- bouton gauche de l'en-tete (vendre, vendeurs, articles et ajouter vendeur) --> 
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="form_vente.php" role="button">Vendre</a>
            </li> 
            <li class="nav-item dropdown dropdown-animate" style="margin-left: 10px;" data-toggle="hover">
              <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="liste_vendeurs.php" role="button">Vendeurs</a>
            </li>
            <li class="nav-item dropdown dropdown-animate" style="margin-left: 10px;" data-toggle="hover">
              <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="Admin.php" role="button">Articles</a>
            </li>            
            <li class="nav-item dropdown dropdown-animate" style="margin-left: 10px;" data-toggle="hover">
              <a class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" href="ajout_vendeur.php" role="button">Ajouter Vendeur</a>
            </li>                         
          </div>
          <div class="ml-auto">
            <ul class="nav">
            <!-- message de bienvenue perso -->      
              <a class="nav-link">Bienvenue <?php echo $_SESSION['prenom'] ?> !</a>
              <!-- Acces page profil --> 
              <a class="nav-link" href="Compte.php"><i class="fas fa-user-circle"></i>Mon compte</a>
              <!-- bouton de deconnexion -->
              <a class="nav-link" href="Deconnexion.php"><i class="fas fa-sign-out-alt"></i>Se deconnecter</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!----------------- Corpus de la page ------------------>
  <div class="main-content">
    <section class="slice slice-lg delimiter-top" id="sct-products">
      <!-- on centre la page -->
      <div class="container">
        <!-- titre --> 
        <div class="mb-5">
          <h4 class="h4">Tous les articles<i class="fas fa-angle-down text-xs ml-3"></i></h4>
        </div>
   <div class="row">
    <?php
    while ($donnees = $reponse->fetch())
    { 
      ?>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <!-- Article -->
            <div class="card card-product">
              <!-- image de l'article -->
              <div class="card-image">
                <a>
                  <img alt="Image placeholder" src=<?php echo("images/".$donnees['PHOTO'])?> class="img-center img-fluid">
                </a>
              </div>
              <!-- infos produit centrées : nom, prix, description et ID -->
              <div class="card-body text-center pt-0">
                <h6><a><?php echo $donnees['NOM']; ?></a></h6>
                <p class="text-sm">
                  <?php echo $donnees['DESCRIPTION']; ?> 
                </p>
                <span class="card-price"><?php echo $donnees['PRIX']; ?>€</span>
              </div>
              <div class="mt-4 pt-4 delimiter-top">
                <a href=<?php echo("form_modif.php?id=".$donnees['ID'])?> class="btn btn-sm btn-light btn-icon-only">
                  <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                </a>
                <a href=<?php echo("cible9.php?id=".$donnees['ID'])?> class="btn btn-sm btn-danger btn-icon-only">
                  <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                </a>
              </div>
            </div>
          </div>                
          <?php
        }
      $reponse->closeCursor();
      ?>              
    </div>
  </section>
  <!------------------ pied de page -------------------->
  <footer id="footer-main">
      <div class="footer footer-dark bg-dark">
        <div class="container">
          <div class="row pt-md">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <!-- logo cliquable et texte associé --> 
              <a href="Admin.php">
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
                <li><a href="shop-landing.php">Accueil</a></li>
                <li><a href="shop-landing.php#contact">Contact</a></li>
                <li><a href="shop-landing.php#avis">Avis</a></li>
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