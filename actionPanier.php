<?php

session_start();
include "API/panier.php";

$action = $_GET['action'];
$param1 = $_GET['param1'];


if ($action == 1) {
	changeQuantiteItemPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $param1), 0);
}

if ($action == 2) {
	ajouterPanier($param1 , $_SESSION['id'], 1);
}

header('location: panier.php');

?>