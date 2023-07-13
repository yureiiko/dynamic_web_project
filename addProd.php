<?php
if (isset($_COOKIE["seller"])) {
    if (isset($_POST["prod_type"]) && isset($_FILES["prod_img"]) && isset($_POST["descrip"]) && isset($_POST["sale"]) && isset($_POST["price"])) {
        $maxid = getMaxProdId()+1;
        $uploadfile = "Style/img/prod_img/".$_POST["prod_type"].$maxid;
        $tmpFile = $_FILES["prod_img"]["tmp_name"];
        move_uploaded_file($tmpFile, $uploadfile);
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query1 = "insert into product(img_src, descrip, type_prod, id_seller) values('".$uploadfile."','".$_POST["descrip"]."','".$_POST["prod_type"]."','".$_COOKIE["seller"]."')";
        switch ($_POST["sale"]) {
            case 'BIN':
                $query2 = "insert into BIN(price, id_prod) values(".$_POST["price"].",".$maxid.")";
                break;
            case 'best_offer':
                $query2 = "insert into best_offer(seller_price, id_prod) values(".$_POST["price"].",".$maxid.")";
                break;
            case 'auction':
                $query2 = "insert into auction(deadline, id_prod) values("..",".$maxid.")";
                break;
            default:
                break;
        }
        if (mysqli_query($conn, $query)) {
            echo "You add the product";
            sleep(2);
            header("Location: seller_addProd_frame.php");
        }
    } else {
        header("Location: seller_addProd_frame.php");
    }
} else {
    header("Location: login.php");
}

//Return the max id of product in the database
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