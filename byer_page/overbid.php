<?php
if (!isset($_COOKIE["buyer"])) {
    header("Location: ../login.php");
}
if (!isset($_POST["idProd"]) || !isset($_POST["maxPrice"])) {
    header("Location: buyer_bid.php");
}
$usr = "root";
$password = "";
$database = "dynamic_web_project";
$conn = new mysqli("localhost", $usr, $password, $database);
$query = "update auction set max_price=".(intval($_POST["maxPrice"])+10).", id_buyer=".$_COOKIE["buyer"]." where id_auc=".$_POST["idProd"];
//echo $query;
$res = mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: buyer_bid.php");
?>