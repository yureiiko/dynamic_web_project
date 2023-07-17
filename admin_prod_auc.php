<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin product buy it now</title>
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
        <h4>Product auction</h4>
		<?php
        // Establish database connection
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308; // Assuming a specific port is used
        $conn = new mysqli("localhost", $usr, $password, $database, $port);
        
        // Check if the connection was successful
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        
        // Query to fetch auction product records with relevant information
        $query = "select p.id_prod, p.img_src, a.deadline, p.descrip, a.max_price, s.username from product p, auction a, seller s where p.id_prod=a.id_prod and p.id_seller=s.id_seller and p.id_prod not in(select id_prod from sales) and p.id_seller in (select id_seller from seller)";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        // Iterate over each auction product record and display the information
        while ($row = mysqli_fetch_array($res)) {
            echo "<div id='".$row["id_prod"]."'><img src='".$row["img_src"]."'> <b>".$row["descrip"]."</b> deadline : ".$row["deadline"]." £".$row["max_price"]." sell by : ".$row["username"]." <button onclick='checkDel(".$row["id_prod"].",2)'>Delete</button><div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>
