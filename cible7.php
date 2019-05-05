<?php
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

$req = $bdd->prepare('DELETE FROM item WHERE ID=?');
$req->execute(array($_GET['id']));

$req2 = $bdd->prepare('INSERT INTO `item` (`ID`, `NOM`, `VENDEUR`, `STOCK`, `CATEGORIE`, `DESCRIPTION`, `PRIX`, `PHOTO`) VALUES (NULL, :nom, :vendeur, :stock, :categorie, :description, :prix, :photo)');
$req2->execute(array(
	'nom' => $_POST['nom'],
	'vendeur' => $_GET['vendeur'],	
	'stock' => $_POST['stock'],
	'categorie' => $_POST['categorie'],
	'description' => $_POST['description'],
	'prix' => $_POST['prix'],
	'photo' => $_POST['photo']
));

if ($_GET['admin']==0) {
header ('location: Vendeur.php');
}
else
{
header ('location: Admin.php');	
}

?>