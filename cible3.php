<?php

$mail =$_GET['mail']; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour, merci d'avoir commandé sur ECE Shop !";
 
//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"ECE Shop\"<mat.qn92@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"ECE Shop\" <mat.qn92@gmail.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//========== 
//=====Envoi de l'e-mail.
$reponse=mail($mail,$sujet,$message_txt,$header);
var_dump($reponse);
header ('location: validation.php');
//==========
?>
