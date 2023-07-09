<?php
header("Content-Type: application/json");
if (isset($_POST["prodid"]) && (isset($_POST["auc"]) || isset($_POST["bin"]))) {
    $usr = "root";
    $password = "";
    $database = "dynamic_web_project";
    $conn = new mysqli("localhost", $usr, $password, $database);
    if ($conn->connect_error) {
        echo "db error <br>";
    }
    $query = "delete from product where id_prod=".$_POST["prodid"];
    $res = mysqli_query($conn, $query);
    if ($_POST["bin"]) {
        $query = "delete from BIN where id_prod=".$_POST["prodid"];
        $res = mysqli_query($conn, $query);
    } elseif ($_POST["auc"]) {
        $query = "delete from auction where id_prod=".$_POST["prodid"];
        $res = mysqli_query($conn, $query);
    }
    echo json_encode("success");
}
?>