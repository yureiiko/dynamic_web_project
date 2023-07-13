<?php
if (isset($_COOKIE["seller"])) {
    if (isset($_POST["prod_type"]) && isset($_POST["prod_img"]) && isset($_POST["descrip"]) && isset($_POST["sale"]) && isset($_POST["price"])) {
        $uploadfile = "Style/img/prod_img/".$_POST["prod_type"].getMaxProdId();
        //echo "<br>".$uploadfile."<br>";
    } else {
        header("Location: seller_addProd_frame.php");
    }
} else {
    header("Location: login.php");
}

function getMaxProdId() {
    $usr = "root";
    $password = "";
    $database = "dynamic_web_project";
    $conn = new mysqli("localhost", $usr, $password, $database);
    if ($conn->connect_error) {
        echo "db error <br>";
    }
    $query = "select max(id_prod) from product";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    return $row["max(id_prod)"];
}
?>