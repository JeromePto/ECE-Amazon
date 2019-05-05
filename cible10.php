<?php
// On démarre la session
session_start();

// On détruit les variables de notre session
session_unset();

// On détruit notre session
session_destroy();

$page=$_GET['page'];

if ($_GET['page']==0) {
		header ('location: Vendeur.php');	
}

if ($_GET['page']==1) {
		header ('location: shop-landing.php#contact');	
}

if ($_GET['page']==2) {
		header ('location: shop-landing.php#avis');	
}

?>