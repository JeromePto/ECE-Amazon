<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['mail'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Votre nom est '.$_SESSION['nom'].' et votre prenom est '.$_SESSION['prenom']. '.';
    echo '<br />';
}
else {
    echo 'Les variables ne sont pas déclarées.';
}
?>