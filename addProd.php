<?php
if (isset($_COOKIE["seller"])) {
    if (isset($_POST["prod_type"]) && isset($_FILES["prod_img"]) && isset($_POST["descrip"]) && isset($_POST["sale"]) && isset($_POST["price"])) {
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query1 = "insert into product(descrip, type_prod, id_seller) values('".$_POST["descrip"]."','".$_POST["prod_type"]."','".$_COOKIE["seller"]."')";
        if (!mysqli_query($conn, $query1)) {
            echo "database problem";
        }
        $maxid = getNewProdId();
        $uploadfile = "Style/img/prod_img/".$_POST["prod_type"].$maxid;
        $tmpFile = $_FILES["prod_img"]["tmp_name"];
        move_uploaded_file($tmpFile, $uploadfile);
        $query_file = "update product set img_src='".$uploadfile."' where id_prod=".$maxid;
        mysqli_query($conn, $query_file);
        switch ($_POST["sale"]) {
            case 'BIN':
                $query2 = "insert into BIN(price, id_prod) values(".$_POST["price"].",".$maxid.")";
                break;
            case 'best_offer':
                $query2 = "insert into best_offer(seller_price, id_prod) values(".$_POST["price"].",".$maxid.")";
                break;
            case 'auction':
                $query2 = "insert into auction(deadline, id_prod) values('".date("Y")."-".(date("m")+1)."-".date("d")."',".$maxid.")";
                break;
            default:
                $query2 = "";
                break;
        }
        if (mysqli_query($conn, $query2)) {
            header("Location: seller_addProd_frame.php");
        } else {
            echo "database problem";
        }
    } else {
        header("Location: seller_addProd_frame.php");
    }
} else {
    header("Location: login.php");
}

//Return the max id of product in the database
function getNewProdId() {
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