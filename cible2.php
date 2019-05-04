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


if (isset($_POST['mail']) && isset($_POST['mdp'])) 
{
	$admin=0;
	if ($_POST['mail']=="admin1@admin.fr" || $_POST['mail']=="admin2@admin.fr" || $_POST['mail']=="admin3@admin.fr") {
		$admin=1;		
	}
	if($_POST['choix']==1)
	{
		$req = $bdd->prepare('SELECT ID, NOM, PRENOM, MAIL, ADRESSE, MDP FROM  acheteur WHERE MAIL = ?');
		$req->execute(array($_POST['mail']));
		$donnees = $req->fetch();
		$req->closeCursor(); 
		
		if(!$donnees)
		{
			$erreur=5;
			header("location: form_connexion.php?erreur={$erreur}");
		}
		else
		{
			$isPasswordCorrect = password_verify($_POST['mdp'], $donnees['MDP']);

			if($isPasswordCorrect)
			// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
			{
				session_start ();
				// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
				$_SESSION['id'] = $donnees['ID'];
				$_SESSION['mail'] = $donnees['MAIL'];
				$_SESSION['nom'] = $donnees['NOM'];
				$_SESSION['prenom'] = $donnees['PRENOM'];
				$_SESSION['adresse'] = $donnees['ADRESSE'];
				$_SESSION['home'] = "Acheteur.php";

				// on redirige notre visiteur vers une page de notre section membre
				header ('location: Acheteur.php');

			}
			else
			{
				$erreur=10;
				header("location: form_connexion.php?erreur={$erreur}");			
			}
		}

	}

	if ($_POST['choix']==2 || $_POST['choix']==3 ) 
	{
		$req = $bdd->prepare('SELECT ID, NOM, PRENOM, MAIL, ADRESSE, MDP FROM vendeur WHERE MAIL = ?');
		$req->execute(array($_POST['mail']));
		$donnees = $req->fetch();
		$req->closeCursor();

		if(!$donnees)
		{
			$erreur=6;
			header("location: form_connexion.php?erreur={$erreur}");
		}

		else
		{
			$isPasswordCorrect = password_verify($_POST['mdp'], $donnees['MDP']);
			if($isPasswordCorrect)
			// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
			{
				session_start ();
				// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
				$_SESSION['id'] = $donnees['ID'];
				$_SESSION['mail'] = $donnees['MAIL'];
				$_SESSION['nom'] = $donnees['NOM'];
				$_SESSION['prenom'] = $donnees['PRENOM'];
				$_SESSION['adresse'] = $donnees['ADRESSE'];	
				// on redirige notre visiteur vers une page de notre section membre
				if ($admin==1) {
					$_SESSION['home'] = "Admin.php";
				header ('location: Admin.php');
				}
				elseif ($admin==0) {
					$_SESSION['home'] = "Vendeur.php";
				header ('location: Vendeur.php');
				}


			}
			else
			{
				$erreur=10;
				header("location: form_connexion.php?erreur={$erreur}");			
			}
		}

	}	
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>