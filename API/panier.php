<?php 

function ajouterPanier($item, $acheteur, $quantite) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if ($quantite <= 0) {
		echo "Erreur : quatite nulle ou negative<br>";
		exit(1);
	}

	// check si produit existe
	$req = $bdd->prepare("SELECT * FROM `item` WHERE ID = ?");
	$req->execute(array($item));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : Le produit n'existe pas<br>";
		exit(1);
	}
	$quantiteMax = $donnees['STOCK'];
	//echo $donnees['STOCK'];
	
	//check si acheteur existe
	$req = $bdd->prepare("SELECT * FROM acheteur WHERE ID = ?");
	$req->execute(array($acheteur));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : L'acheteur n'existe pas<br>";
		exit(1);
	}
	//echo $donnees['PRENOM'];

	// check si item deja dans le panier
	$req = $bdd->prepare("SELECT * FROM panier WHERE ACHETEUR = ? and ITEM = ?");
	$req->execute(array($acheteur, $item));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		// le produit n'est pas dans le panier de l'acheteur
		if ($quantite > $quantiteMax) {
			echo "Erreur : Qauntite du stock insufisante<br>";
			exit(1);
		}
		$req = $bdd->prepare("INSERT INTO `panier` (`ACHETEUR`, `ITEM`, `QUANTITE`) VALUES (:acheteur, :item, :quantite)");
		$resultat = $req->execute(array(
			"acheteur" => $acheteur,
			"item" => $item,
			"quantite" => $quantite));
		if ($resultat == NULL) {
			echo "erreur d'ajout";
			exit(1);
		}
	} else {
		if ($quantite + $donnees['QUANTITE'] > $quantiteMax) {
			echo "Erreur : Qauntite du stock insufisante<br>";
			exit(1);
		}
		$req = $bdd->prepare("UPDATE `panier` SET `QUANTITE` = :quantite WHERE `panier`.`ACHETEUR` = :acheteur AND `panier`.`ITEM` = :item");
		$req->execute(array(
			"acheteur" => $acheteur,
			"item" => $item,
			"quantite" => ($quantite + $donnees['QUANTITE'])));
	}
}

function changeQuantiteItemPanier($acheteur, $item, $quantite) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if ($quantite < 0) {
		echo "Erreur quantite negative";
		exit(1);
	}

	$req = $bdd->prepare("SELECT * FROM item WHERE ID = ?");
	$req->execute(array($item));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : Item inconnu";
		exit(1);
	}
	$quantiteMax = $donnees['STOCK'];

	$req = $bdd->prepare("SELECT * FROM acheteur WHERE ID = ?");
	$req->execute(array($acheteur));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : Acheteur inconnu";
		exit(1);
	}

	$req = $bdd->prepare("SELECT * FROM panier WHERE ACHETEUR = ? and ITEM = ?");
	$req->execute(array($acheteur, $item));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur : Item pas dans le panier";²
		exit(1);
	}
	if ($quantite > $quantiteMax) {
		echo "Erreur : quantite trop importante";
		exit(1);
	} else if ($quantite == 0) {
		$req = $bdd->prepare('DELETE FROM panier WHERE ACHETEUR = ? and ITEM = ?');
		$req->execute(array($acheteur, $item));
	} else {
		$req = $bdd->prepare("UPDATE panier SET QUANTITE = ? WHERE ACHETEUR = ? and ITEM = ?");
		$req->execute(array($quantite, $acheteur, $item));
	}
}

function deletePanier($acheteur) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT * FROM acheteur WHERE ID = ?");
	$req->execute(array($acheteur));
	$donnees = $req->fetch();
	$req->closeCursor();
	if(!$donnees) {
		echo "Erreur : acheteur inconnu";
		exit(1);
	}

	$req = $bdd->prepare('DELETE FROM panier WHERE ACHETEUR = ?');
	$req->execute(array($acheteur));
}

function getItemInfoPanier($acheteur, $item) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT * FROM panier WHERE ACHETEUR = ? and ITEM = ?");
	$req->execute(array($acheteur, $item));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur item ou acheteur inconnu<br>";
		exit(1);
	}
	return $donnees;
}

function getIdByPos($acheteur, $pos) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	$req = $bdd->prepare("SELECT * FROM panier WHERE ACHETEUR = ?");
	$req->execute(array($acheteur));
	$i = 0;
	while($donnees = $req->fetch()) {
		if($i == $pos) {
			return $donnees['ITEM'];
		}
		$i++;
	}
	echo ("Erreur : out of array");
	exit(1);
}

function getItemNumberInPanier($acheteur) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT COUNT(*) FROM panier WHERE ACHETEUR = ?");
	$req->execute(array($acheteur));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur item ou acheteur inconnu<br>";
		exit(1);
	}
	return $donnees[0];
}

function getTotalPrix($acheteur) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT SUM(prixTot.prixLigne) as total FROM ( SELECT panier.ACHETEUR, panier.ITEM, panier.QUANTITE, item.ID, item.PRIX, panier.QUANTITE*item.PRIX as prixLigne FROM `panier` INNER JOIN item ON item.ID = panier.ITEM WHERE `ACHETEUR` = ?) AS prixTot");
	$req->execute(array($acheteur));
	$donnees = $req->fetch();
	$req->closeCursor();
	if (!$donnees) {
		echo "Erreur<br>";
		exit(1);
	}

	return floor($donnees[0]*100)/100;
}
?>