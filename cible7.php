<?php
try
{
			// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	echo "string";
	die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
$req->execute(array($_POST['id']));
$donnees = $req->fetch();
$req->closeCursor();
if (!$donnees) {
	echo "Erreur : item inconnu<br>";
	exit(1);
}

$req = $bdd->prepare("UPDATE `item` SET `NOM` = :nom, `STOCK` = :stock, `CATEGORIE` = :categorie, `DESCRIPTION` = :description, `PRIX` = :prix, `PHOTO` = :photo WHERE `item`.`ID` = :id");
$resultat = $req->execute(array(
	"nom" => $_POST['nom'],
	"categorie" => $_POST['categorie'],
	"description" => $_POST['description'],
	"prix" => $_POST['prix'],
	"photo" => $_POST['photo'],
	"stock" => $_POST['stock'],
	"id" => $_POST['id']
));
header ('location: Vendeur.php');
?>