
<!DOCTYPE html>
<html>
<head>
	<title>GEC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../Style/product.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/linkedToCart.js"></script>
</head>
<body>
<?php
 include("../Include/NavigationP.php");
?> 
<br><br>
<br><br>
<br>
<br>
<main>
<center><h2><a name="Castles">Castles</h2></center>
<?php
if (!isset($_COOKIE["buyer"])) {
  header("Location: ../login.php");
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
</div>
<br>
</main>
<?php include('../include/Footer.php'); ?>

</body>
</html>