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
$reponse2 = $bdd->query('SELECT * FROM item');

while ($donnees = $reponse->fetch())
{
  if ($donnees['ID']==$_GET['id']) 
  {
    $id=$donnees['ID'];
    $nom=$donnees['NOM'];
    $vendeur=$donnees['VENDEUR'];
    $stock=$donnees['STOCK'];
    $categorie=$donnees['CATEGORIE'];
    $description=$donnees['DESCRIPTION'];
    $prix=$donnees['PRIX'];
    $photo=$donnees['PHOTO'];
    $variation=$donnees['VARIATION'];
  }
}

$reponse->closeCursor();

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
  <header class="header bg-dark" id="header-main">
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
                <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart"></i>Panier</a>          
                <a class="nav-link" href="Compte.php">
                  <i class="fas fa-user-circle"></i>Mon compte
                </a>
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
      <!-- Presentation complete du produit -->
      <section class="py-2 delimiter-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h6 class="mb-0"></h6>
            </div>
          </div>
        </div>
      </section>
      <section class="slice">
        <div class="container">
          <div class="row row-grid">
            <div class="col-lg-6">
              <div data-toggle="sticky" data-sticky-offset="30">
                <a href="<?php echo('images/'.$photo)?>" data-fancybox>
                  <img alt="Image placeholder" src="<?php echo('images/'.$photo)?>" class="img-fluid">
                </a>
                <div class="mt-4" style="margin-left: 120px;">
                  <a href="<?php echo('images/'.$photo)?>" data-fancybox>Voir les images</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="pl-lg-5">
                <!-- Nom du produit -->
                <h5 class="h4"><?php echo $nom; ?></h5>
                <h6 class="text-sm">En stock</h6>
                <div class="row align-items-center">
                  <div class="col-6">
                    <!-- affichage de l'id de l'item et du stock restant-->
                    </div>
                    <div class="col-6 text-right">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <span class="badge badge-pill badge-soft-info"><?php echo "ID:".$id.""; ?></span>
                        </li>
                        <li class="list-inline-item">
                          <span class="badge badge-pill badge-soft-success"><?php echo "".$stock. " ".$nom." en réserve"; ?>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Description -->
                <div class="py-4 my-4 border-top border-bottom">
                  <h6 class="text-sm">Description :</h6>
                  <p class="text-sm mb-0">
                    <?php echo $description; ?>.
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
                    <!--<h6 class="mt-5">Pointure</h6>
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
                    </div>-->
                    <!-- Choix multiple pour variation -->
                    <!--<h6 class="mt-5">Couleur</h6>
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
                    </div>-->
                    <div class="row align-items-center">
                      <div class="col-sm-6 mb-4 mb-sm-0">
                        <span class="d-block h3 mb-0"><?php echo "".$prix." €"; ?></span> <!--prix-->
                      </div>
                      <div class="col-sm-6 text-sm-right">
                        <!-- Add to cart -->
                        <a class="btn btn-dark" href=<?php echo "actionPanier.php?action=2&param1=".$id;?> role="button">Ajouter au panier</a>                      
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

              <?php
              while ($donnees2 = $reponse2->fetch())
              { 
                if (($donnees2['CATEGORIE']==$categorie) && ($donnees2['ID']!=$id) ) 
                {

                  ?>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card card-product">
                      <div class="card-image">
                        <a href=<?php echo("produit.php?id=".$donnees2['ID'])?>>
                          <img alt="Image placeholder" src=<?php echo('images/'.$donnees2['PHOTO'])?> class="img-center img-fluid">
                        </a>
                      </div>
                      <div class="card-body text-center pt-0">
                        <h6><a href=<?php echo("produit.php?id=".$id)?>><?php echo $donnees2['NOM']; ?></a></h6>
                        <p class="text-sm">
                          <?php echo $donnees2['DESCRIPTION']; ?> 
                        </p>
                        <span class="card-price"><?php echo $donnees2['PRIX']; ?>€</span>
                      </div>
                    </div>
                  </div>

                  <?php
                }
              }
              $reponse2->closeCursor();
              ?>
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
                  <li><a href="Compte.php">Mon profil</a></li>
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