<?php
header("Content-Type: application/json");
if (isset($_POST["userid"])) {
    $usr = "root";
    $password = "";
    $database = "dynamic_web_project";
    $conn = new mysqli("localhost", $usr, $password, $database);
    if ($conn->connect_error) {
        echo "db error <br>";
    }
    $query = "delete from seller where id_seller=".$_POST["userid"];
    $res = mysqli_query($conn, $query);
    $query = "delete from product where id_seller=".$_POST["userid"];
    $res = mysqli_query($conn, $query);
    mysqli_close($conn);
    echo json_encode("success");
}
?>