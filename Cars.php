<!DOCTYPE html>
<html>
<head>
  <title>Cars</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Cars.css">
  <script src="Cars.js" ></script>
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
        <li><a href="">Mansions</a></li>
        <li><a href="">Villas</a></li>
        <li><a href="">Apartments</a></li>
        <li><a href="">Islands</a></li>
        <li><a href="">Penthouses</a></li>
        <li><a href="">Chalets</a></li>
        <li><a href="">Bungalows</a></li>
      </ul>
    </li>
    <li><a href="">Cars</a>
      <ul class="sub-menu">
        <li><a href="#SUV">SUV</a></li>
        <li><a href="#Sports car">Sports cars</a></li>
        <li><a href="#Convertible">Convertible</a></li>
        <li><a href="#Coupe">Coupe</a></li>
        <li><a href="#Grand Tourer">Grand Tourer</a></li>
        <li><a href="#American Cars">American cars</a></li>
      </ul>
    </li>
    <li><a href="">Special Offers</a> 
      <ul class="sub-menu">
        <li><a href="">Best Offers</a></li>
        <li><a href="">Bids</a></li>
      </ul>
    </li>
    <li><a href="">Cart</a></li>
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
  <center><h2><a name="SUV">SUV</h2></center><br>
  <?php
  $query = "select p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.type_prod='suv'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>SUV</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button>Add</button><br>
    </div>
    </div>
    <br>
    ";
  }
  ?>
  <!---<div class="cars-card">
    <img id="SUVCarsImage" src="style/img/SUV1.jpg" alt="SUV1">
    <div class="description">
      <h4 id="SUVTitle">SUV1</h4>
      <p id="SUVDescription">Description SUV1</p>
      <p class="price">£10,000</p>
      <button>Buy now</button><br>
      <button>Add</button><br>
      <button>Negotiate</button>
    </div>
  </div>
  <br>
  <center><button onclick="changeCar('SUV')">Next</button></center>--->

  <center><h2><a name="Sports car">Sport cars</h2></center>
  <?php
  $query = "select p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.type_prod='sportcar'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Sport Car</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button>Add</button><br>
    </div>
    </div>
    <br>
    ";
  }
  ?>
  <!---<div class="cars-card">
    <img id="SportCarsImage" src="style/img/Sport1.jpg" alt="Sport1">
    <div class="description">
      <h4 id="SportTitle">Sport1</h4>
      <p id="SportDescription">Description Sport1</p>
      <p class="price">£20,000</p>
      <button>Buy now</button><br>
      <button>Add</button><br>
      <button>Negotiate</button>
    </div>
  </div>
  <br>
  <center><button onclick="changeCar('Sport')">Next</button></center>--->

  <center><h2><a name="Convertible">Convertible</h2></center>
  <?php
  $query = "select p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.type_prod='convertible'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Convertible</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button>Add</button><br>
    </div>
    </div>
    <br>
    ";
  }
  ?>
  <!---<div class="cars-card">
    <img id="ConvertibleCarsImage" src="style/img/Convertible1.jpg" alt="Convertible1">
    <div class="description">
      <h4 id="ConvertibleTitle">Convertible1</h4>
      <p id="ConvertibleDescription">Description Convertible1</p>
      <p class="price">£30,000</p>
      <button>Buy now</button><br>
      <button>Add</button><br>
      <button>Negotiate</button>
    </div>
  </div>
  <br>
  <center><button onclick="changeCar('Convertible')">Next</button></center>--->

  <center><h2><a name="Coupe">Coupe</h2></center>
  <?php
  $query = "select p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.type_prod='coupe'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Coupe</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button>Add</button><br>
    </div>
    </div>
    <br>
    ";
  }
  ?>
  <!---<div class="cars-card">
    <img id="CoupeCarsImage" src="style/img/Coupe1.jpg" alt="Coupe1">
    <div class="description">
      <h4 id="CoupeTitle">Coupe1</h4>
      <p id="CoupeDescription">Description Coupe1</p>
      <p class="price">£40,000</p>
      <button>Buy now</button><br>
      <button>Add</button><br>
      <button>Negotiate</button>
    </div>
  </div>
  <br>
  <center><button onclick="changeCar('Coupe')">Next</button></center>--->

  <center><h2><a name="Grand Tourer">Grand Tourer</h2></center>
  <?php
  $query = "select p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.type_prod='grandtourer'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Crand Tourer</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button>Add</button><br>
    </div>
    </div>
    <br>
    ";
  }
  ?>
  <!---<div class="cars-card">
    <img id="GrandTourerCarsImage" src="style/img/GT1.jpg" alt="GT1">
    <div class="description">
      <h4 id="GrandTourerTitle">Grand Tourer1</h4>
      <p id="GrandTourerDescription">Description Grand Tourer1</p>
      <p class="price">£60,000</p>
      <button>Buy now</button><br>
      <button>Add</button><br>
      <button>Negotiate</button>
    </div>
  </div>
  <br>
  <center><button onclick="changeCar('Grand Tourer')">Next</button></center>--->

  <center><h2><a name="American Cars">American Cars</h2></center>
  <?php
  $query = "select p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.type_prod='americancar'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>American Car</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button>Add</button><br>
    </div>
    </div>
    <br>
    ";
  }
  ?>
  <!---<div class="cars-card">
    <img id="AmericanCarsImage" src="style/img/American1.jpg" alt="American1">
    <div class="description">
      <h4 id="AmericanTitle">American1</h4>
      <p id="AmericanDescription">Description American1</p>
      <p class="price">£50,000</p>
      <button>Buy now</button><br>
      <button>Add</button><br>
      <button>Negotiate</button>
    </div>
  </div>
  <br>
  <center><button onclick="changeCar('American')">Next</button></center>--->
  <footer>
  <br>
  <br>
  <hr>
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
