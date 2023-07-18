<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Cars.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/linkedToCart.js"></script>
    </head>
    <body>
      <nav>
  <img src="Style/img/GEC (2).png" class="style/img/logo" width="550" height="50">
  <!--<h1>LOGO</h1>-->
  <ul class="main-menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="products.php">Estates</a>
      <ul class="sub-menu">
        <li><a href="#Castles" target="blank">Castles</a></li>
        <li><a href="#Mansions" target="blank">Mansions</a></li>
        <li><a href="#Villas" target="blank">Villas</a></li>
        <li><a href="#Apartments" target="blank">Apartments</a></li>
        <li><a href="#Islands" target="blank">Islands</a></li>
        <li><a href="#Penthouses" target="blank">Penthouses</a></li>
        <li><a href="#Chalets" target="blank">Chalets</a></li>
        <li><a href="#Bungalows" target="blank">Bungalows</a></li>
      </ul>
    </li>
    <li><a href="Cars.php">Cars</a>
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
    <li><a href="myaccount.php"><i class='fas fa-user-circle'></i></a></li>
    <li><a href="about.php">About Us</a></li>
  </ul>
</nav>
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
                while ($row=mysqli_fetch_array($res)) {
                    // Display each product in the cart with remove button
                    echo "<img src='".$row["img_src"]."'> ".$row["type_prod"]." <b>".$row["descrip"]."</b> £".$row["price"]." <button onclick='removeFromCart(".$row["id_prod"].")'>Remove</button><br>";
                }
                ?>
            </div>
        </div>
    </body>
</html>
