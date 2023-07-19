<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grandeur Estates & Cars : Admin product buy it now</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="../js/prodDelete_check.js"></script>
        <style>
    .container {
  display: flex;
  flex-wrap: wrap;
}

body {
	background-color: #785d4d;
	color: #eed9c4;
}

.product-item {
  flex: 0 0 calc(33.33% - 20px); /* Ajustez la largeur des éléments selon vos préférences */
  margin: 10px;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  border-radius: 5px;
  background-color: #eed9c4;
  color: #785d4d;
}


        .product-item img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 50%;
        }

        .product-item button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            background-color: #785d4d;
            color: #eed9c4;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .product-item button:hover {
            background-color: #eed9c4;
            color: #785d4d;
        }
        </style>
 
	</head>
	<body>
        <?php
        // Check if admin cookie is set, if not redirect to login page
        if (!isset($_COOKIE["admin"])) {
            header("Location: ../Login_logout/login.php");
        }
        ?>
        <h4>Product buy it now</h4>
        <?php
        // Database connection parameters
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
        
        // Establish database connection
        $conn = new mysqli("localhost", $usr, $password, $database);
        
        // Check if the connection was successful
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select p.id_prod, p.img_src, p.descrip, b.price, s.username from product p, bin b, seller s where p.id_prod=b.id_prod and p.id_seller=s.id_seller and p.id_prod not in(select id_prod from sales) and p.id_seller in (select id_seller from seller)";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);
        echo "<div class='container' >";
        while ($row = mysqli_fetch_array($res)) {
            $table = "BIN";
            echo "<div class='product-item' id='".$row["id_prod"]."'>
                <img src='".$row["img_src"]."'> 
                <b>".$row["descrip"]."</b> £".$row["price"]." sell by : ".$row["username"]." <button onclick='checkDel(".$row["id_prod"].",1)'>Delete</button><div>";
        }
        echo "</div>";          
        ?>

        <span id="del"></span>
    </body>
</html>
