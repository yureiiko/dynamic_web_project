<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin product best offer</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/prodDelete_check.js"></script>
	</head>
	<body>
        <?php
		// Check if admin cookie is set, if not redirect to login page
		if (!isset($_COOKIE["admin"])) {
			header("Location: login.php");
		}
		?>
        <h4>Product best offer</h4>
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
        
        // Query to fetch best offer product records with relevant information
        $query = "SELECT p.id_prod, p.img_src, p.descrip, b.seller_price, s.username FROM product p, best_offer b, seller s WHERE p.id_prod=b.id_prod AND p.id_seller=s.id_seller AND p.id_prod NOT IN (SELECT id_prod FROM sales) AND p.id_seller IN (SELECT id_seller FROM seller)";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        // Iterate over each best offer product record and display the information
        while ($row = mysqli_fetch_array($res)) {
            echo "<div id=".$row["id_prod"]."><img src='".$row["img_src"]."'> <b>".$row["descrip"]."</b> £".$row["seller_price"]." sell by : ".$row["username"]." <button onclick='checkDel(".$row["id_prod"].",3)'>Delete</button></div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>
