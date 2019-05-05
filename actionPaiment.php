<?php
session_start();
include("API/panier.php");
include("API/item.php");

if (!isset($_SESSION['id'])) {
	header("location: shop-landing.html");
}

if (isset($_POST['numero']) && isset($_POST['type']) && isset($_POST['nom']) && isset($_POST['date']) && isset($_POST['code'])) {
	try
	{
				// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
				// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}
	$req = $bdd->prepare("SELECT * FROM banque WHERE NUMERO = :numero and CARTE = :carte and NOM = :nom and DATE = :date and CODE = :code");
	$req->execute(array(
		'numero' =>$_POST['numero'],
		'carte' =>$_POST['type'],
		'nom' =>$_POST['nom'],
		'date' =>$_POST['date'],
		'code' =>$_POST['code']));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		$erreur = 5;
		header("location: checkout-payment.php?erreur={$erreur}");
		exit(1);
	}

	for($i = 0 ; $i < getItemNumberInPanier($_SESSION['id']) ; $i++) {
		removeItem(getIdByPos($_SESSION['id'], $i), getItemInfoPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $i))['QUANTITE']);
	}
	deletePanier($_SESSION['id']);


	header("location: cible3.php?mail=".$_SESSION['mail']);

} else {
	echo "Erruer : données<br>";
}

?>