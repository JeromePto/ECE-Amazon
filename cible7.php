<?php
try
{
			// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
			// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}

			$req = $bdd->prepare('INSERT INTO acheteur(NOM, PRENOM, MAIL, MDP, ADRESSE) VALUES(:nom, :prenom, :mail, :mdp, :adresse)');
			$req->execute(array(
				'nom' => $_POST['nom'], 
				'prenom' => $_POST['prenom'],
				'mail' => $_POST['mail'],
				'mdp' => $pass_hache,
				'adresse' => $_POST['adresse'],
			));
		$req = $bdd->prepare('UPDATE item SET (NOM,STOCK,PHOTO,DESCRIPTION,PRIX,VARIATION,CATEGORIE) 
			VALUES(:nom, :stock, :photo, :description, :prix, :variation, :categorie) WHERE ID=?');
		$req->execute(array(
			'nom'=> $_POST['nom'],
			'stock'=> $_POST['stock'],
			'photo'=> $_POST['photo'],
			'prix'=> $_POST['prix'],
			'variation'=> $_POST['variation'],
			'categorie'=> $_POST['categorie'],
			$_GET['id'],
		));
WHERE id=21;
?>