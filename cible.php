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

if (isset($_POST['mail']) && isset($_POST['mdp'])&& isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['adresse']))
{
	$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


	if($_POST['choix']==1)
	{
		$reponse = $bdd->query('SELECT * FROM acheteur');

		$verif=1;

		while ($donnees = $reponse->fetch())
		{
			if ($donnees['MAIL']==$_POST['mail']) 
			{
				$verif=2;
			}
		}

		$reponse->closeCursor();

		if ($verif==1) 
		{
			$req = $bdd->prepare('INSERT INTO acheteur(NOM, PRENOM, MAIL, MDP, ADRESSE) VALUES(:nom, :prenom, :mail, :mdp, :adresse)');
			$req->execute(array(
				'nom' => $_POST['nom'], 
				'prenom' => $_POST['prenom'],
				'mail' => $_POST['mail'],
				'mdp' => $pass_hache,
				'adresse' => $_POST['adresse'],
			));

			session_start ();

			$_SESSION['id'] = $bdd->query("SELECT * FROM acheteur ORDER BY ID DESC")->fetch()["ID"];
			$_SESSION['mail'] = $_POST['mail'];
			$_SESSION['nom'] = $_POST['nom'];
			$_SESSION['prenom'] = $_POST['prenom'];
			$_SESSION['adresse'] = $_POST['adresse'];

			header ('location: Acheteur.php');
		}
		else
		{
			$erreur=10;
			header("location: form_inscription.php?erreur={$erreur}");
		}
	}
	if($_POST['choix']==2)
	{
		$reponse2 = $bdd->query('SELECT * FROM vendeur');

		$verif2=1;

		while ($donnees2 = $reponse2->fetch())
		{
			if ($donnees2['MAIL']==$_POST['mail']) 
			{
				$verif2=2;
			}
		}
		$reponse2->closeCursor();
		if ($verif2==1) 
		{
			$req2 = $bdd->prepare('INSERT INTO vendeur(NOM, PRENOM, MAIL, MDP, ADRESSE) VALUES(:nom, :prenom, :mail, :mdp, :adresse)');
			$req2->execute(array(
				'nom' => $_POST['nom'], 
				'prenom' => $_POST['prenom'],
				'mail' => $_POST['mail'],
				'mdp' => $pass_hache,
				'adresse' => $_POST['adresse']
			));

			session_start ();

			$_SESSION['id'] = $bdd->query("SELECT * FROM vendeur ORDER BY ID DESC")->fetch()["ID"];
			$_SESSION['mail'] = $_POST['mail'];
			$_SESSION['nom'] = $_POST['nom'];
			$_SESSION['prenom'] = $_POST['prenom'];
			$_SESSION['adresse'] = $_POST['adresse'];
			header ('location: Vendeur.php');
		}
		else
		{
			$erreur=10;
			header("location: form_inscription.php?erreur={$erreur}");
		}
	}
}	

?>