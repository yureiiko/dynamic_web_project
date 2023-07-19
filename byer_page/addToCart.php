<?php
header("Content-Type: application/json");

// Check if buyer cookie is set
if (isset($_COOKIE["buyer"])) {
    if (isset($_POST["id_prod"])) {
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        
        // Prepare and execute the SQL query
        $query = "insert into cart(id_prod, id_buyer) values(" . $_POST["id_prod"] . "," . $_COOKIE["buyer"] . ")";
        $res = mysqli_query($conn, $query);
        
        // Check if the query was successful
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
