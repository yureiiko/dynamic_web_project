<?php
header("Content-Type: application/json");
if (isset($_POST["prodid"]) && isset($_POST["table"])) {
    $usr = "root";
    $password = "";
    $database = "dynamic_web_project";
    $conn = new mysqli("localhost", $usr, $password, $database);
    if ($conn->connect_error) {
        echo "db error <br>";
    }
    $query = "delete from product where id_prod=".$_POST["prodid"];
    $res = mysqli_query($conn, $query);
    switch ($_POST["table"]) {
        case 1:
            $query = "delete from BIN where id_prod=".$_POST["prodid"];
            break;
        case 2:
            $query = "delete from auction where id_prod=".$_POST["prodid"];
            break;
        case 3:
            $query = "delete from best_offer where id_prod=".$_POST["prodid"];
            break;
        default:
            break;
    }
    $res = mysqli_query($conn, $query);
    mysqli_close($conn);
    echo json_encode("success");
}
?>