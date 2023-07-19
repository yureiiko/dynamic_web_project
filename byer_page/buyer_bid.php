<!DOCTYPE html>
<html>
    <head>
        <title>GEC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../Style/product.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <?php
        if (!isset($_COOKIE["buyer"])) {
            header("Location: ../login.php");
        }
        include("../Include/NavigationP.php");
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        ?>
        <br><br><br><br><br><br><br>
        <div>
            <h3>All current products in auction</h3>
            <?php
            $query = "select p.id_prod, p.img_src, p.type_prod, p.descrip, a.id_auc, a.deadline, a.max_price, a.id_buyer from product p, auction a where a.id_prod=p.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart)";
            $res = mysqli_query($conn, $query);
            while ($row=mysqli_fetch_array($res)) {
                echo "
                <div>
                <img src='".$row["img_src"]."'>
                <p>".$row["type_prod"]." <b>".$row["descrip"]."</b></p>
                <p>Deadline : ".$row["deadline"]." ; Actual price : £".$row["max_price"]."</p>
                <form method='POST' action='overbid.php'>
                    <input type='hidden' name='idProd' value=".$row["id_auc"].">
                    <input type='hidden' name='maxPrice' value=".$row["max_price"].">
                    <input type='submit' value='Overbid with £10'>
                </form>
                </div>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <?php
        include("../Include/Footer.php");
        ?>
    </body>
</html>