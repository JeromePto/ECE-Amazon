<?php

function ajouterItem($nom, $stock, $categorie, $prix, $description, $photo = NULL, $variationId = NULL, $variationParam = NULL) {
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

	if ($stock <= 0) {
		echo "stock <= 0";
		exit(1);
	}

	if ($categorie < 0 || $categorie > 3) {
		echo "categorie inconnu";
		exit(1);
	}

	if ($photo == NULL || $photo =="defaut") {
		$photo = "images\defautItem.png";
	}

	if($variationId != NULL && $variationParam != NULL) {
		$variation = json_encode(array_merge(array("id" => $variationId), $variationParam));
	} else {
		$variation = NULL;
	}


	$req = $bdd->prepare("INSERT INTO `item` (`ID`, `NOM`, `STOCK`, `CATEGORIE`, `DESCRIPTION`, `PRIX`, `PHOTO`, `VARIATION`) VALUES (NULL, :nom, :stock, :categorie, :description, :prix, :photo, :variation)");
	$result = $req->execute(array(
	"nom" => $nom,
	"stock" => $stock,
	"categorie" => $categorie,
	"description" => $description,
	"prix" => $prix,
	"photo" => $photo,
	"variation" => $variation
	));

	if ($result == NULL) {
		echo "erreur d'ajout";
		exit(1);
	}
	
}

?>