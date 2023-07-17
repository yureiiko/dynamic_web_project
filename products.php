
<!DOCTYPE html>
<html>
<head>
	<title>GEC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Style/product.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/linkedToCart.js"></script>
</head>
<body>
<nav>
  <img src="Style/img/GEC (2).png" class="style/img/logo" width="550" height="50">
  <!--<h1>LOGO</h1>-->
  <ul class="main-menu">
    <li><a href="">Home</a></li>
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
    <li><a href="">My Account</a></li>
    <li><a href="">Contact Us</a></li>
  </ul>
</nav>
<br><br>
<br><br>
<br>
<br>
<center><h2><a name="Castles">Castles</h2></center>
<?php
if (!isset($_COOKIE["buyer"])) {
  header("Location: login.php");
}
$usr = "root";
$password = "";
$database = "dynamic_web_project";
$conn = new mysqli("localhost", $usr, $password, $database);
?>
<div class="Castle-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='castle'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/castle1.jpg" alt=""><br>
      <center><div class="description">
        <b>Castle1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/catle2.jpg" alt=""><br>
      <center><div class="description">
      <b>Castle2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/castle3.jpg" alt=""><br>
      <center><div class="description">
      <b>Castle3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
      <br>
</div>
</div>--->
</div>
<br>
<center><h2><a name="Mansions">Mansions</h2></center>


<div class="Mansion-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='mansion'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Mansion1.jpg" alt=""><br>
      <center><div class="description">
        <b>Mansion1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Mansion2.jpg" alt=""><br>
      <center><div class="description">
      <b>Mansion1</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Mansion3.jpg" alt=""><br>
      <center><div class="description">
      <b>Mansion1</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>

<center><h2><a name="Villas">Villas</a></h2></center>
<div class="Villa-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='villa'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Villas1.jpg" alt=""><br>
      <center><div class="description">
        <b>Villa1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Villa2.jpg" alt=""><br>
      <center><div class="description">
      <b>Villa2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Villa3.jpg" alt=""><br>
      <center><div class="description">
      <b>Villa3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>


<center><h2><a name="Apartments">Apartments</a></h2></center>
<div class="Apartment-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='apartment'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Apartment1.jpg" alt=""><br>
      <center><div class="description">
        <b>Apartment1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Apartment2.jpg" alt=""><br>
      <center><div class="description">
      <b>Apartment2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Apartment3.jpg" alt=""><br>
      <center><div class="description">
      <b>Apartment3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <<button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>

<center><h2><a name="Islands">Islands</a></h2></center>
<div class="Islands-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='island'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Island1.jpg" alt=""><br>
      <center><div class="description">
        <b>Island1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Island2.jpg" alt=""><br>
      <center><div class="description">
      <b>Island2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Island3.jpg" alt=""><br>
      <center><div class="description">
      <b>Island3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>

<center><h2><a name="Penthouses">Penthouses</a></h2></center>
<div class="Penthouses-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='penthouse'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Penthouse1.jpg" alt=""><br>
      <center><div class="description">
        <b>Penthouse1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Penthouse2.jpg" alt=""><br>
      <center><div class="description">
      <b>Penthouse2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Penthouse3.jpg" alt=""><br>
      <center><div class="description">
      <b>Penthouse3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>

<center><h2><a name="Chalets">Chalets</a></h2></center>
<div class="Chalets-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='chalet'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Chalet1.jpg" alt=""><br>
      <center><div class="description">
        <b>Chalet1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Chalet2.jpg" alt=""><br>
      <center><div class="description">
      <b>Chalet2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Penthouse3.jpg" alt=""><br>
      <center><div class="description">
      <b>Chalet3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>

<center><h2><a name="Bungalows">Bungalows</a></h2></center>
<div class="Bungalows-containers">
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='bungalow'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "
    <div class='conteneur'>
      <div class='card'>
        <img src='".$row["img_src"]."' alt=''><br>
          <center>
            <div class='description'>
              <b>".$row["descrip"]."</b><br>
              <p id='total-amount'> Price: £".$row["price"]."</p>
              <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
            </div>
          </center>
      </div>
    </div>";
  }
  ?>
  <!---<div class="conteneur">
    <div class="card">
      <img src="style/img/Bungalow1.jpg" alt=""><br>
      <center><div class="description">
        <b>Bungalow1</b><br>
        <p id="total-amount"> Price: £240.005.600</p>
        <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Bungalow2.jpg" alt=""><br>
      <center><div class="description">
      <b>Bungalow2</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center>
    </div>
  </div>
  <div class="conteneur">
    <div class="card">
      <img src="style/img/Bungalow3.jpg" alt=""><br>
      <center><div class="description">
      <b>Bungalow3</b><br>
      <p id="total-amount"> Price: £240.005.600</p>
      <button type="button">Buy now</button>
        <button type="button">Add</button>
        <button type="button">Negociate</button>
      </div></center><br>
</div>
</div>--->
</div>
<br>

<footer>
  <br>
  <br>
  <table id="mytable">
    <tr>
      <th><a href="Buy.html">Buy</a></th>
      <th><a href="Seller.html">Sell</a></th>
      <th><a href="Community.html">Community</a></th>
      <th><a href="aboutus.html">About us</a></th>
    </tr>
    <tr>
      <td><a href="fff">Buy it now</a></td>
      <td><a href="fff">Seller protection</a></td>
      <td><a href="fff">Groups</a></td>
      <td><a href="fff">Legal Imprint</a></td>
    </tr>
    <tr>
      <td><a href="fihfi"> Bid</a></td>
      <td><a href="fff">Sell cars</a></td>
      <td><a href="fff">News</a></td>
      <td><a href="fff">Legal Notices</a></td>
    </tr>
    <tr>
      <td><a href="fff">Black fridays offers</td>
      <td><a href="fff">Sell estates</a></td>
    </tr>
    
    
  </table><br>
  <hr>

<center><div id="footer">Copyright &copy; Grandeur Estates & Cars<br>       <a href="Grandeur.estates&cars@gmail.com">Grandeur.estates&cars@gmail.com</a>   </div></center> 
</footer>

</body>
</html>