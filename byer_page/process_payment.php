<?php
if (!isset($_COOKIE["buyer"])) {
	header("Location: ../login.php");
}
if (!isset($_POST["ids"]) || !isset($_POST["full_name"]) || !isset($_POST["email"]) || !isset($_POST["phone"]) || !isset($_POST["address"]) || !isset($_POST["city"]) || !isset($_POST["country"]) || !isset($_POST["payment_type"])) {
	header("Location: buyer_cart.php");
}
$usr = "root";
$password = "";
$database = "dynamic_web_project";
$conn = new mysqli("localhost", $usr, $password, $database);
$allIds = $_POST["ids"];
foreach ($allIds as $id) {
	$query = "insert into sales(sale_date, id_prod, id_buyer) values('".date("Y")."-".date("m")."-".date("d")."',".$id.",".$_COOKIE["buyer"].")";
	$res = mysqli_query($conn, $query);
}
mysqli_close($conn);
header("Location: products.php");
?>