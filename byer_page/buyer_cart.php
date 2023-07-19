<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style/Cars.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/linkedToCart.js"></script>
    </head>
    <body>
      <?php include("Include/Navigation.php"); ?>
        <br><br><br><br><br><br>
        
        <?php
        // Check if buyer cookie is set, if not redirect to login page
        if (!isset($_COOKIE["buyer"])) {
            header("Location: login.php");
        }
        
        // Connect to the database
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        ?>
        <div class="inCart">
            <div class="bin">
                <h4>Buy it now</h4>
                <?php
                // Query to retrieve products in the cart for buy it now
                $query = "select p.id_prod, p.img_src, p.descrip, p.type_prod, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].")";
                $res = mysqli_query($conn, $query);
                $total = 0;
                $prod_ids=array();
                while ($row=mysqli_fetch_array($res)) {
                    // Display each product in the cart with remove button
                    $prod_ids[]=$row["id_prod"];
                    echo "<img src='".$row["img_src"]."'> ".$row["type_prod"]." <b>".$row["descrip"]."</b> £<span id='price'>".$row["price"]."</span> <button onclick='removeFromCart(".$row["id_prod"].")'>Remove</button><br>";
                    $total = $total+$row["price"];
                }
                ?>
            </div>
            <div class="auc">
                <h4>Auction</h4>
                <?php
                // Query to retrieve products in the cart for buy it now
                $query = "select p.id_prod, p.img_src, p.descrip, p.type_prod, a.price from product p, auction a where p.id_prod=a.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].")";
                $res = mysqli_query($conn, $query);
                $total = 0;
                $prod_ids=array();
                while ($row=mysqli_fetch_array($res)) {
                    // Display each product in the cart with remove button
                    $prod_ids[]=$row["id_prod"];
                    echo "<img src='".$row["img_src"]."'> ".$row["type_prod"]." <b>".$row["descrip"]."</b> £<span id='price'>".$row["price"]."</span> <button onclick='removeFromCart(".$row["id_prod"].")'>Remove</button><br>";
                    $total = $total+$row["price"];
                }
                ?>
            </div>
        </div>
        <form action="payement.php" method="POST">
            <?php
            for ($i=0 ; $i < sizeof($prod_ids) ; $i++ ) { 
                echo "<input type='hidden' id='ids[".$i."]' name='ids[]' value=".$prod_ids[$i].">";
            }
            ?>
            <input type="hidden" name="totalPrice" id="totalPrice" value="<?php echo $total;?>">
            <input type="submit" value="Pay">
        </form>
    </body>
</html>
