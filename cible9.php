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
	$req = $bdd->prepare('DELETE FROM item WHERE ID=?');
	$req->execute(array($_GET['id']));
		header ('location: Admin.php');
?>