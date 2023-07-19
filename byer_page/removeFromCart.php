<?php
header("Content-Type: application/json");
if (isset($_COOKIE["buyer"])) {
    if (isset($_POST["id_prod"])) {
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        $query = "delete from cart where id_prod=".$_POST["id_prod"]." and id_buyer=".$_COOKIE["buyer"];
        $res = mysqli_query($conn, $query);
        if ($res) {
            mysqli_close($conn);
            echo json_encode("success");
        } else {
            mysqli_close($conn);
            echo "Database problem";
        }
    } else {
        header("Location: products.php");
    }
} else {
    header("Location: ../login.php");
}
?>