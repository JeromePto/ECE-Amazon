<?php

session_start();
include "API/panier.php";

$action = $_GET['action'];
$param1 = isset($_GET["param1"])? $_GET["param1"] : "";
$param2 = isset($_GET["param2"])? $_GET["param2"] : "";


if ($action == 1) {
	changeQuantiteItemPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $param1), 0);
}

if ($action == 2) {
	ajouterPanier($param1 , $_SESSION['id'], 1);
}
if ($action == 3) {
	changeQuantiteItemPanier($_SESSION['id'], getIdByPos($_SESSION['id'], $param1), $param2);
}

header('location: panier.php');

?>