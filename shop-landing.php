<?php
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

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
	<meta name="author" content="Webpixels">
	<title>ECE Shop</title>
	<!-- Favicon -->
	<link rel="icon" href="bootstrap/assets/img/brand/favicon.png" type="image/png">
	<!-- Font Awesome 5 -->
	<link rel="stylesheet" href="bootstrap/assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
	<link rel="stylesheet" href="bootstrap/assets/libs/animate.css/animate.min.css">
	<link rel="stylesheet" href="bootstrap/assets/libs/swiper/dist/css/swiper.min.css">
	<!-- Purpose CSS -->
	<link rel="stylesheet" href="bootstrap/assets/css/purpose.css" id="stylesheet">
</head>

<body>
	<header class="header header-transparent" id="header-main">
		<!-- Main navbar -->
		<nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
			<div class="container px-lg-0">
				<!-- Logo -->
				<a class="navbar-brand mr-lg-5" href="shop-landing.html">
					<img alt="Image placeholder" src="images/white.png" id="navbar-logo" style="height: 50px;">
				</a>
				<!-- Navbar collapse trigger -->
				<button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Navbar nav -->
				<div class="collapse navbar-collapse" id="navbar-main-collapse">
					<ul class="navbar-nav align-items-lg-center">

						<!-- Pages menu -->
						<li class="nav-item dropdown dropdown-animate" data-toggle="hover">
							<a class="nav-link dropdown-toggle" href="form_connexion.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos produits</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
								<ul class="list-group list-group-flush">
									<li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
										<a href="form_inscription.php" class="list-group-item list-group-item-action" role="button">
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
										<a href="form_inscription.php" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
										<a href="form_inscription.php" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
										<a href="form_inscription.php" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
					</li>
				</ul>
				<ul class="navbar-nav align-items-lg-center ml-lg-auto">
					<li class="nav-item d-lg-none d-xl-block">
						<a class="nav-link" href="#avis">Avis</a>
					</li>
					<li class="nav-item d-lg-none d-xl-block">
						<a class="nav-link" href="form_connexion.php">Se connnecter</a>
					</li>
					<li class="nav-item mr-0">
						<a href="form_inscription.php" class="nav-link d-lg-none">S'inscrire</a>
						<a href="form_inscription.php" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Inscrivez-vous dès maintenant !">
							<span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>
							<span class="btn-inner--text">S'inscrire</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<div class="main-content">
	<!-- Header (shop) -->
	<section class="slice slice-xl bg-cover bg-size--cover" data-offset-top="#header-main" style="background-image: url(bootstrap/assets/img/backgrounds/bleu.jpg); background-position: center center;">
		<span class="mask bg-dark opacity-3"></span>
		<div class="container py-5 pt-lg-7 position-relative zindex-100">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left">

					<div class="">
						<h2 class="text-white my-4">
							<span class="display-4 font-weight-light">La vente en ligne</span>
							<span class="d-block">qui vous aide au quotidien.</span>
						</h2>
						<p class="lead text-white">Des produits de qualités à des prix abordables, livrés directement chez vous. Ne vous prenez plus la tête.</p>
						<div class="mt-5">
							<a href="#sct-products" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon d-none d-xl-inline-block scroll-me">
								<span class="btn-inner--icon"><i class="fas fa-shopping-bag"></i></span>
								<span class="btn-inner--text">Quelques produits</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-grid mt-6 d-none d-lg-flex">
				<div class="col-lg-4">
					<div class="card bg-dark border-0 hover-shadow-lg hover-translate-y-n10">
						<div class="card-body py-4">
							<div class="d-flex align-items-start">
								<div class="icon bg-gradient-primary text-white rounded-circle icon-shape">
									<i class="fas fa-shipping-fast"></i>
								</div>
								<div class="icon-text pl-4">
									<h5 class="ma-0  text-white">Livraison rapide</h5>
									<p class="mb-0 text-muted">Nous vous garantissons une livraison sous 7 jours maximum, tous produits confondus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card bg-dark border-0 hover-shadow-lg hover-translate-y-n10">
						<div class="card-body py-4">
							<div class="d-flex align-items-start">
								<div class="icon bg-gradient-primary text-white rounded-circle icon-shape">
									<i class="fas fa-credit-card"></i>
								</div>
								<div class="icon-text pl-4">
									<h5 class="ma-0  text-white">Paiement en ligne</h5>
									<p class="mb-0 text-muted">Vous paierez vous produits via une plateforme de paiement sécurisée. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card bg-dark border-0 hover-shadow-lg hover-translate-y-n10">
						<div class="card-body py-4">
							<div class="d-flex align-items-start">
								<div class="icon bg-gradient-primary text-white rounded-circle icon-shape">
									<i class="fas fa-hand-holding-usd"></i>
								</div>
								<div class="icon-text pl-4">
									<h5 class="ma-0  text-white">Satisfaction assurée</h5>
									<p class="mb-0 text-muted">Nous vous rembourserons l'intégralité du paiement sous 7 jours en cas d'insatisfaction</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape-container" data-shape-position="bottom">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1000 300" style="enable-background:new 0 0 1000 300;" xml:space="preserve" class="ie-shape-wave-1 fill-section-secondary">
				<path d="M 0 246.131 C 0 246.131 31.631 250.035 47.487 249.429 C 65.149 248.755 82.784 245.945 99.944 241.732 C 184.214 221.045 222.601 171.885 309.221 166.413 C 369.892 162.581 514.918 201.709 573.164 201.709 C 714.375 201.709 772.023 48.574 910.547 21.276 C 939.811 15.509 1000 24.025 1000 24.025 L 1000 300.559 L -0.002 300.559 L 0 246.131 Z" />
			</svg>
		</div>
	</section>
	<section class="slice slice-lg delimiter-top" id="sct-products">
		<div class="container">
			<!-- Title -->
			<div class="mb-5 text-center">
				<h3 class="h6">Présentation<i class="fas fa-angle-down text-xs ml-3"></i></h3>
			</div>
			<!-- Products -->
			<div class="row">
    <?php
    while ($donnees = $reponse->fetch())
    { 
      ?>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card card-product">
              <div class="card-image">
                <a href="form_inscription.php" >
                  <img alt="Image placeholder" src=<?php echo("images/".$donnees['PHOTO'])?> class="img-center img-fluid">
                </a>
              </div>
              <div class="card-body text-center pt-0">
                <h6><a href="form_inscription.php" ></a></h6>
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
			<!-- Load more -->
			<div class="mt-4 text-center">
				<a href="form_inscription.html" class="btn btn-sm btn-white rounded-pill shadow hover-translate-y-n3">Voir tous nos produits</a>
			</div>
		</div>
	</section>
	<section class="slice slice-lg bg-section-secondary">
		<div class="container">
			<div class="mb-5 text-center">
				<h3 class=" mt-4" id="avis">Ce que disent nos clients</h3>
				<div class="fluid-paragraph mt-3">
					<p class="lead lh-180">Croire que l'amélioration n'a pas de limite, grâce à vous.</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="swiper-js-container row align-items-center">
						<div class="col-xl-4 d-none d-xl-block">
							<div class="pr-4">
								<h5>Témoignages</h5>
								<p class="lead mt-3">Ne nous écoutez pas, écoutez seulement ce que disent nos clients</p>
							</div>
						</div>
						<div class="col-xl-8">
							<div class="swiper-container swiper-container-horizontal" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" style="cursor: grab;">
								<div class="swiper-wrapper" style="transform: translate3d(-333.5px, 0px, 0px); transition-duration: 0ms;">
									<div class="swiper-slide p-4 swiper-slide-prev" style="width: 333.5px;">
										<!-- Testimonial entry 1 -->
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<img alt="Image placeholder" src="images/defautProfile.png" class="avatar  rounded-circle">
													</div>
													<div class="pl-3">
														<h5 class="h6 mb-0">Jean Pierre</h5>
														<small class="d-block text-muted">Super professeur</small>
													</div>
												</div>
												<p class="mt-4 lh-180">"Franchement, je ne pensais pas qu'un service comme celui-ci serait aussi accessible, je le recommance à tous. JP"</p>
												<span class="static-rating static-rating-sm">
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide p-4 swiper-slide-active" style="width: 333.5px;">
										<!-- Testimonial entry 2 -->
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<img alt="Image placeholder" src="images/defautProfile.png" class="avatar  rounded-circle">
													</div>
													<div class="pl-3">
														<h5 class="h6 mb-0">Hina</h5>
														<small class="d-block text-muted">Chercheur de renom</small>
													</div>
												</div>
												<p class="mt-4 lh-180">"It's been 10 years i'm working on the web, i've never seen that. Try it !"</p><br>
												<span class="static-rating static-rating-sm">
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide p-4 swiper-slide-next" style="width: 333.5px;">
										<!-- Testimonial entry 3 -->
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<img alt="Image placeholder" src="images/defautProfile.png" class="avatar  rounded-circle">
													</div>
													<div class="pl-3">
														<h5 class="h6 mb-0">Jean Pierre</h5>
														<small class="d-block text-muted">Soldat de la Légion d'Honneur</small>
													</div>
												</div>
												<p class="mt-4 lh-180">"Franchement, je ne pensais pas qu'un service comme celui-ci serait aussi accessible, je le recommande à tous. JP"</p>
												<span class="static-rating static-rating-sm">
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
													<i class="star fas fa-star voted"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
								<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
								<!-- Add Pagination -->
								<div class="swiper-pagination w-100 pt-4 d-flex align-items-center justify-content-center swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="1" role="button" aria-label="Go to slide 2"></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="slice bg-cover bg-size--cover" style="background-image: url(bootstrap/assets/img/backgrounds/img-15.jpg); background-position: center center;">
			<span class="mask bg-primary opacity-9"></span>
			<div class="container py-6">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-xl-7 text-center">
						<div class="mb-5">
							<h1 class="text-white">Acheter votre premier produit. </h1>
							<p class="lead text-white mt-1"></p>
						</div>
						<a href="form_inscription.php" class="btn btn-white btn-icon rounded-pill shadow hover-shadow-lg hover-translate-y-n3">
							<span class="btn-inner--text">S'inscrire</span>
							<span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="slice slice-lg" id="sct_contact_form">
			<div class="container">
				<div class="mb-5 text-center">
					<span class="badge badge-soft-info badge-pill badge-lg">
						Contact
					</span>
					<h3 class=" mt-4" id="contact">Envoyez-nous un message !</h3>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Nom</label>
										<input class="form-control" type="text" placeholder="Nom">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Prenom</label>
										<input class="form-control" type="text" placeholder="Prenom">
									</div>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Email</label>
										<input class="form-control" type="email" placeholder="email@test.com">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Téléphone</label>
										<input class="form-control" type="text" placeholder="0645678293">
									</div>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Sujet</label>
										<input class="form-control" type="text" placeholder="Question sur un produit">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Message</label>
										<textarea class="form-control" data-toggle="autosize" placeholder="Expliquez nous votre besoin en quelques mots..." rows="3"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center mt-4">
								<button type="button" class="btn btn-dark rounded-pill">Envoyez votre message</button>
								<span class="d-block mt-4 text-sm">Nous reviendrons vers vous rapidement !</span>
							</div>
						</form>
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
							<li><a href="form_inscription.html">Inscription</a></li>
							<li><a href="form_connexion.php">Connexion</a></li>
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
								<a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
									<i class="fab fa-dribbble"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://github.com/webpixels" target="_blank">
									<i class="fab fa-github"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
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
	<!-- Demo JS - remove it when starting your project -->
	<script src="bootstrap/assets/js/demo.js"></script>
</body>

</html>