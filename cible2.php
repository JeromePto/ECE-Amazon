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

	//echo "string";
	echo $_POST['mail'];

	if (isset($_POST['mail']) && isset($_POST['mdp'])) {


		$req = $bdd->prepare('SELECT NOM, PRENOM, MAIL, ADRESSE, MDP FROM  acheteur WHERE MAIL = ?');
		$req->execute(array($_POST['mail']));
		$donnees = $req->fetch();

		if(!$donnees)
		{
			echo 'Mauvais identifiant ou mot de passe !';
		}

		else
		{
			$isPasswordCorrect = password_verify($_POST['mdp'], $donnees['MDP']);
		if($isPasswordCorrect)// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
		{
			session_start ();
			// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
			$_SESSION['mail'] = $donnees['MAIL'];
			$_SESSION['nom'] = $donnees['NOM'];
			$_SESSION['prenom'] = $donnees['PRENOM'];
			$_SESSION['adresse'] = $donnees['ADRESSE'];

			// on redirige notre visiteur vers une page de notre section membre
			//header ('location: espace.php');

		}
		else
		{
			echo 'Mauvais identifiant ou mot de passe !';
		}
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>