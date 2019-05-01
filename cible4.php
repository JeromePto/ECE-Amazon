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

if (isset($_POST['mail']) && isset($_POST['mdp'])&& isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['adresse']))
{

		$reponse = $bdd->query('SELECT * FROM item');

		$verif=1;

		while ($donnees = $reponse->fetch())
		{
			if ($donnees['NOM']==$_POST['nom']) 
			{
				$verif=2;
			}
		}

		$reponse->closeCursor();

		if ($verif==1) 
		{
			$req = $bdd->prepare('INSERT INTO item(NOM, PRENOM, MAIL, MDP, ADRESSE) VALUES(:nom, :prenom, :mail, :mdp, :adresse)');
			$req->execute(array(
				'identification' => $_POST['identification'], 				
				'nom' => $_POST['nom'], 
				'prenom' => $_POST['prenom'],
				'mail' => $_POST['photo'],
				'adresse' => $_POST['description'],
			));

			header ('location: Vendeur.php');
		}
		else
		{
			$erreur=10;
			header("location: form_vente.php?erreur={$erreur}");
		}
}	
?>