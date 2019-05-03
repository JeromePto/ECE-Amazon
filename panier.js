function change(idPos, maxQuantite) {
	var elem = document.getElementById("panierElem" + idPos).value;
	if (elem > maxQuantite) {
		alert("Quantite trop importante");
		window.location.href = "panier.php";
		return;
	}
	var str = "actionPanier.php?action=3&param1=" + idPos + "&param2=" + elem;
	window.location.href = str;
}

function redirectPaiment() {
	window.location.href = "checkout-shipping.php";
}