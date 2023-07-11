<?php
header("Content-Type: application/json");
if (isset($_POST["userid"]) && isset($_POST["user"])) {
    $usr = "root";
    $password = "";
    $database = "dynamic_web_project";
    $conn = new mysqli("localhost", $usr, $password, $database);
    if ($conn->connect_error) {
        echo "db error <br>";
    }
    switch ($_POST["user"]) {
        case 1:
            $query = "delete from buyer where id_buyer=".$_POST["userid"];
            break;
        case 2:
            $query = "delete from seller where id_seller=".$_POST["userid"];
            $res = mysqli_query($conn, $query);
            $query = "delete from product where id_seller=".$_POST["userid"];
            break;
        default:
            # code...
            break;
    }
    $res = mysqli_query($conn, $query);
    mysqli_close($conn);
    echo json_encode("success");
}
?>