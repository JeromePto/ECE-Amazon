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

//echo "inscris !";
if (isset($_POST['mail']) && isset($_POST['mdp'])&& isset($_POST['prenom'])&& isset($_POST['nom'])&& isset($_POST['adresse']))
{
	$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

	$req = $bdd->prepare('INSERT INTO acheteur(ID, NOM, PRENOM, MAIL, MDP, ADRESSE) VALUES(NULL, :nom, :prenom, :mail, :mdp, :adresse)');
	$req->execute(array(
		'nom' => $_POST['nom'], 
		'prenom' => $_POST['prenom'],
		'mail' => $_POST['mail'],
		'mdp' => $pass_hache,
		'adresse' => $_POST['adresse'],
	));


	session_start ();
			// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
	$_SESSION['id'] = $bdd->query("SELECT * FROM acheteur ORDER BY ID DESC")->fetch()["ID"];
	$_SESSION['mail'] = $_POST['mail'];
	$_SESSION['nom'] = $_POST['nom'];
	$_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['adresse'] = $_POST['adresse'];

			// on redirige notre visiteur vers une page de notre section membre
	header ('location: Acheteur.php');

}
?>
