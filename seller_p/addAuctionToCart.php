<?php
if (!isset($_COOKIE["seller"])) {
    header("Location: login.php");
}
if (!isset($_POST["idProd"]) || !isset($_POST["idBuyer"]) || !isset($_POST["maxPrice"])) {
    header("Location: seller_prod_auc.php");
}
$usr = "root";
$password = "";
$database = "dynamic_web_project";
$conn = new mysqli("localhost", $usr, $password, $database);
$query = "update auction set price=".$_POST["maxPrice"]." where id_prod=".$_POST["idProd"];
$res = mysqli_query($conn, $query);
$query = "insert into cart(id_prod, id_buyer) values(".$_POST["idProd"].",".$_POST["idBuyer"].")";
$res = mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: seller_prod_auc.php");
?>