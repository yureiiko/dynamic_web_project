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
		if (!isset($_COOKIE["seller"])) {
			header("Location: login.php");
		}
		?>
        <h4>Product Auction</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select p.id_prod, p.img_src, p.descrip, a.deadline, a.price from product p, auction a where p.id_prod=a.id_prod and p.id_prod not in(select id_prod from sales) and p.id_seller in (select id_seller from seller) and p.id_seller=".$_COOKIE["seller"];
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);
        while ($row = mysqli_fetch_array($res)) {
            $price = $row["price"];
            if ($price=="") {
                $price="(No proposition)";
            }
            echo "<div id='".$row["id_prod"]."'><img src='".$row["img_src"]."'> ".$row["id_prod"]." <b>".$row["descrip"]."</b> deadline : ".$row["deadline"]." £".$price." <button onclick='checkDel(".$row["id_prod"].",2)'>Delete</button><div>";
        }
        ?>

        <span id="del"></span>
	</body>
</html>