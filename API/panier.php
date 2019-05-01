<?php 

function ajouterPanier($item, $acheteur, $quantite) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
		$resultat = $req->execute(array(
			"acheteur" => "a",
			"item" => $item,
			"quantite" => ($quantite + $donnees['QUANTITE'])));
		echo $resultat;
	}
}

ajouterPanier(24, 4, 1);

?>