<?php
session_start();
include"API/item.php";

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

if ($_POST['stock'] > 0 ) {

	if ($_POST['prix'] >= 0) {
		newitem($_POST['nom'], $_SESSION['id'], $_POST['stock'], $_POST['categorie']-1, $_POST['prix'], $_POST['description']);
	}

	else{
		$erreur=10;
		header("location: form_vente.php?erreur={$erreur}");
		return 1;	
	}
}
else{
	$erreur=5;
	header("location: form_vente.php?erreur={$erreur}");
	return 1;
}

if ($donnees['MAIL']!="admin1@admin.fr" && $donnees['MAIL']!="admin2@admin.fr" && $donnees['MAIL']!="admin3@admin.fr")
{
	header("location: Vendeur.php");	
}
else
{
	header("location: Admin.php");
}
?>