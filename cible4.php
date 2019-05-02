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

echo $_SESSION['id'];

if ($_POST['stock'] > 0 ) {

	if ($_POST['prix'] >= 0) {
		newitem($_POST['nom'], $_SESSION['id'], $_POST['stock'], $_POST['categorie'], $_POST['prix'], $_POST['description']);
	}

	else{
			$erreur=10;
			header("location: form_vente.php?erreur={$erreur}");		
	}
}
else{
		$erreur=5;
		header("location: form_vente.php?erreur={$erreur}");	
}

		$reponse = $bdd->query('SELECT * FROM item');

		$verif=1;

		while ($donnees = $reponse->fetch())
		{
			if ($donnees['NOM']==$_POST['nom']) 
			{
				$verif=2;
				break;
			}
		}


		$reponse->closeCursor();

		if ($verif==1) 
		{
			$req = $bdd->prepare('INSERT INTO item(NOM, VENDEUR, STOCK, CATEGORIE, DESCRIPTION, PRIX, PHOTO, VARIATION) 
				VALUES(:nom, :vendeur, :stock, :categorie, :description, :prix, :photo, :variation)');
			$req->execute(array(
				'nom' => $_POST['nom'], 				
				'vendeur' => $_POST['vendeur'], 
				'stock' => $_POST['stock'],
				'photo' => $_POST['photo'],
				'categorie' => $_POST['categorie'],
				'description' => $_POST['description'],
				'prix' => $_POST['prix'],
				'variation' => $_POST['variation'],
			));

			header ('location: Vendeur.php');
		}
		else
		{
			$erreur=10;
			header("location: form_vente.php?erreur={$erreur}");
		}
?>