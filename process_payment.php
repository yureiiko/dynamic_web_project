<?php
if (!isset($_COOKIE["buyer"])) {
	header("Location: login.php");
}
if (!isset($_POST["full_name"]) || !isset($_POST["email"]) || !isset($_POST["phone"]) || !isset($_POST["address"]) || !isset($_POST["city"]) || !isset($_POST["country"]) || !isset($_POST["payment_type"])) {
	header("Location: buyer_cart.php");
}
echo "form correctly filled";
?>