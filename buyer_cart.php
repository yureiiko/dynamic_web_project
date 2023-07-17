<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Cars.css">
    </head>
    <body>
        <nav>
            <img src="Style/img/GEC (2).png" class="logo" width="550" height="50">
            <!--<h1>LOGO</h1>-->
            <ul class="main-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Estates</a>
                <ul class="sub-menu">
                    <li><a href="products.php#Castles">Castles</a></li>
                    <li><a href="products.php#Mansions">Mansions</a></li>
                    <li><a href="products.php#Villas">Villas</a></li>
                    <li><a href="products.php#Apartments">Apartments</a></li>
                    <li><a href="products.php#Islands">Islands</a></li>
                    <li><a href="products.php#Pentouses">Penthouses</a></li>
                    <li><a href="products.php#Chalets">Chalets</a></li>
                    <li><a href="products.php#Bungalows">Bungalows</a></li>
                </ul>
                </li>
                <li><a href="">Cars</a>
                <ul class="sub-menu">
                    <li><a href="Cars.php#SUV">SUV</a></li>
                    <li><a href="Cars.php#Sports car">Sports cars</a></li>
                    <li><a href="Cars.php#Convertible">Convertible</a></li>
                    <li><a href="Cars.php#Coupe">Coupe</a></li>
                    <li><a href="Cars.php#Grand Tourer">Grand Tourer</a></li>
                    <li><a href="Cars.php#American Cars">American cars</a></li>
                </ul>
                </li>
                <li><a href="">Special Offers</a> 
                <ul class="sub-menu">
                    <li><a href="">Best Offers</a></li>
                    <li><a href="">Bids</a></li>
                </ul>
                </li>
                <li><a href="buyer_cart.php">Cart</a></li>
                <li><a href="">My Account</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>
        <br><br><br><br><br><br>
        <?php
        if (!isset($_COOKIE["buyer"])) {
        header("Location: login.php");
        }
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        ?>
        <div class="inCart">
            <div class="bin">
                <h4>Buy it now</h4>
                <?php
                $query = "select p.id_prod, p.img_src, p.descrip, p.type_prod, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].")";
                $res = mysqli_query($conn, $query);
                while ($row=mysqli_fetch_array($res)) {
                    echo "<img src='".$row["img_src"]."'> ".$row["type_prod"]." <b>".$row["descrip"]."</b> £".$row["price"]." <button onclick='extFromCart(".$row["id_prod"].")' value='Remove'><br>";
                }
                ?>
            </div>
        </div>
    </body>
</html>