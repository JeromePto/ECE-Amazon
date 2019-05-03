<?php

function newItem($nom, $vendeur, $stock, $categorie, $prix, $description, $photo = NULL, $variationId = NULL, $variationParam = NULL) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if ($prix < 0) {
		echo "prix < 0";
		exit(1);
	}

	if ($stock <= 0) {
		echo "stock <= 0";
		exit(1);
	}

	if ($categorie < 0 || $categorie > 3) {
		echo "categorie inconnu";
		exit(1);
	}

	if ($photo == NULL || $photo =="defaut") {
		$photo = "defautItem.png";
	}

	if($variationId != NULL && $variationParam != NULL) {
		$variation = json_encode(array_merge(array("id" => $variationId), $variationParam));
	} else {
		$variation = NULL;
	}


	$req = $bdd->prepare("INSERT INTO `item` (`ID`, `NOM`, `VENDEUR`, `STOCK`, `CATEGORIE`, `DESCRIPTION`, `PRIX`, `PHOTO`, `VARIATION`) VALUES (NULL, :nom, :vendeur, :stock, :categorie, :description, :prix, :photo, :variation)");
	$result = $req->execute(array(
	"nom" => $nom,
	"vendeur" => $vendeur,
	"stock" => $stock,
	"categorie" => $categorie,
	"description" => $description,
	"prix" => $prix,
	"photo" => $photo,
	"variation" => $variation));

	if ($result == NULL) {
		echo "erreur d'ajout";
		exit(1);
	}
	return $bdd->query("SELECT * FROM item ORDER BY ID DESC")->fetch()["ID"];
}

function addItem($id, $quantite) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if ($quantite <= 0) {
		echo "quantite <= 0";
		exit(1);
	}

	$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
	$req->execute(array($id));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : item inconnu<br>";
		exit(1);
	}
	$req = $bdd->prepare("UPDATE `item` SET `STOCK` = ? WHERE `item`.`ID` = ?");
	$req->execute(array($donnees['STOCK'] + $quantite, $id));
}

function deleteItem($id) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
	$req->execute(array($id));
	$donnees = $req->fetch();
	$req->closeCursor();
	if(!$donnees) {
		echo "Erreur : ID inconnu";
		exit(1);
	}

	$req = $bdd->prepare('DELETE FROM item WHERE ID = ?');
	$req->execute(array($id));
}

function removeItem($id, $quantite) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if ($quantite <= 0) {
		echo "quantite <= 0";
		exit(1);
	}

	$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
	$req->execute(array($id));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : item inconnu<br>";
		exit(1);
	}
	if ($donnees['STOCK'] - $quantite < 0) {
		echo "Erreur : nombre d'item a enlever trop important";
		exit(1);
	}
	$req = $bdd->prepare("UPDATE `item` SET `STOCK` = ? WHERE `item`.`ID` = ?");
	$req->execute(array($donnees['STOCK'] - $quantite, $id));
}

function editItem($id, $nom, $categorie, $prix, $description, $photo = NULL, $variationId = NULL, $variationParam = NULL) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if ($prix < 0) {
		echo "prix < 0";
		exit(1);
	}

	if ($categorie < 0 || $categorie > 3) {
		echo "categorie inconnu";
		exit(1);
	}

	if ($photo == NULL || $photo =="defaut") {
		$photo = "defautItem.png";
	}

	if($variationId != NULL && $variationParam != NULL) {
		$variation = json_encode(array_merge(array("id" => $variationId), $variationParam));
	} else {
		$variation = NULL;
	}
	$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
	$req->execute(array($id));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : item inconnu<br>";
		exit(1);
	}

	$req = $bdd->prepare("UPDATE `item` SET `NOM` = :nom, `CATEGORIE` = :categorie, `DESCRIPTION` = :description, `PRIX` = :prix, `PHOTO` = :photo, VARIATION = :variation WHERE `item`.`ID` = :id");
	$resultat = $req->execute(array(
	"nom" => $nom,
	"categorie" => $categorie,
	"description" => $description,
	"prix" => $prix,
	"photo" => $photo,
	"variation" => $variation,
	"id" => $id));
	if ($resultat == NULL) {
		echo "Erreur de modification";
		exit(1);
	}
}

function getItemInfo($id) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
	$req->execute(array($id));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur item inconnu<br>";
		exit(1);
	}
	return $donnees;
}

?>