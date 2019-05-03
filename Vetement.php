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

$reponse = $bdd->query('SELECT * FROM item WHERE CATEGORIE=2 ');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Groupe13">
	<title>Vêtements en vente</title>
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
												<!-- Nom -->
												<div class="media-body ml-3">
													<h6 class="mb-1">Livres</h6>
													<p class="mb-0">Collection de livres et BD</p>
												</div>
											</div>
										</a>
									</li>
									<li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
										<a href="Musique.php" class="list-group-item list-group-item-action dropdown-toggle">
											<div class="media d-flex align-items-center">
												<!-- Icone -->
												<figure style="width: 50px;">
													<img alt="Image placeholder" src="bootstrap/assets/img/icons/categories/musique.png" class="svg-inject img-fluid" style="height: 50px;">
												</figure>
												<!-- nom -->
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
												<!-- Nom -->
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
												<!-- Nom -->
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
			<!-- Arriere plan de l'en-tete (couleur mauve degradée) -->
			<section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
				<div class="section-inner bg-dark"></div>
				<style type="text/css">
				.section-inner{ 
					height:100% !important;  
				}
			</style> <!-- On modifie la taille de cet en-tete coloré afin d'eviter des probleme d'affichage--> 
			<div class="main-content">
				<section class="slice slice-lg delimiter-top" id="sct-products">
					<div class="container">
						<!-- Titre -->
						<div class="mb-5 text-center">
							<h3 class="h6">Notre sélection de vêtements<i class="fas fa-angle-down text-xs ml-3"></i></h3>
						</div>
						<!-- Produit -->
						<div class="row">
							<?php
							$id=0;
							while ($donnees = $reponse->fetch())
							{ 
								$id=$donnees['ID'];
									?>
									<div class="col-xl-3 col-lg-4 col-sm-6">
										<div class="card card-product">
											<div class="card-image">
												<a href=<?php echo("produit.php?id=".$id)?>>
													<img alt="Image placeholder" src=<?php echo($donnees['PHOTO'])?> class="img-center img-fluid">
												</a>
											</div>
											<div class="card-body text-center pt-0">
												<h6><a href=<?php echo("produit.php?id=".$id)?>><?php echo $donnees['NOM']; ?></a></h6>
												<p class="text-sm">
													<?php echo $donnees['DESCRIPTION']; ?> 
												</p>
												<span class="card-price"><?php echo $donnees['PRIX']; ?>€</span>
											</div>
										</div>
									</div>
									<?php
							}
							$reponse->closeCursor();
							?>		
						</div>
					</section>
				</div>
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
									<li><a href="form_inscription.html">Mon Profil</a></li>
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

