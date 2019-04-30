<?php


	echo "mail: ";
	echo $_POST['mail'];
 
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "mat.qn92@gmail.com";
 
    $to =$_POST['mail'];
 
    $subject = "Vérification PHP mail";
 
    $message = "PHP mail marche";
 
    $headers = "From:" . $from;
 
    //mail($to,$subject,$message, $headers);
 
    echo "L'email a été envoyé.";
?>