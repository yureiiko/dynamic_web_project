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
		if (!isset($_COOKIE["admin"])) {
			header("Location: login.php");
		}
		?>
        <h4>Product auction</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select p.id_prod, p.img_src, p.descrip, a.max_price, s.username from product p, auction a, seller s where p.id_prod=a.id_prod and p.id_seller=s.id_seller and p.id_prod not in(select id_prod from sales) and p.id_seller in (select id_seller from seller)";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        while ($row = mysqli_fetch_array($res)) {
            echo "<div id='".$row["id_prod"]."'><img src='".$row["img_src"]."'> <b>".$row["descrip"]."</b> £".$row["max_price"]." sell by : ".$row["username"]." <button onclick='checkDel(".$row["id_prod"].", 2)'>Delete</button><div>";
        }
        ?>
	</body>
</html>