
<html>
<!DOCTYPE html>
<html>
<head>
  <title>Cars</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../Style/Cars.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/Cars.js"></script>
  <script src="../js/linkedToCart.js"></script>
</head>
<body>
<?php
include("../Include/NavigationP.php");
?>
<br><br><br><br><br><br>
<?php
if (!isset($_COOKIE["buyer"])) {
  header("Location: ../login.php");
}
$usr = "root";
$password = "";
$database = "dynamic_web_project";
$conn = new mysqli("localhost", $usr, $password, $database);
?>
  <center><h2><a name="SUV">SUV</h2></center><br>
  <?php
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='suv'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>SUV</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
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
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='sportcar'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Sport Car</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
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
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='convertible'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Convertible</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
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
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='coupe'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Coupe</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
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
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='grandtourer'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>Crand Tourer</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
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
  $query = "select p.id_prod, p.img_src, p.descrip, b.price from product p, BIN b where p.id_prod=b.id_prod and p.id_prod not in (select id_prod from sales) and p.id_prod not in (select id_prod from cart where id_buyer=".$_COOKIE["buyer"].") and p.type_prod='americancar'";
  $res = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($res)) {
    echo "<div class='cars-card'>
    <img src='".$row["img_src"]."'>
    <div class='description'>
      <h4>American Car</h4>
      <p>".$row["descrip"]."</p>
      <p>£".$row["price"]."</p>
      <button onclick='addToCart(".$row["id_prod"].")'>Add</button><br>
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
  <?php include('../include/Footer.php'); ?>
</body>
</html>

