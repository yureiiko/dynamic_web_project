<?php
if (isset($_COOKIE["buyer"])) {
    if (isset($_POST["id_prod"])) {
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        $query = "insert into cart(id_prod, id_buyer) values(".$_POST["id_prod"].",".$_COOKIE["buyer"].")";
        if (mysqli_query($conn, $query)) {
            mysqli_close($conn);
            header("Location: buyer_cart.php");
        } else {
            mysqli_close($conn);
            echo "Database problem";
        }
    } else {
        header("Location: products.php")
    }
} else {
    header("Location: login.php");
}
?>