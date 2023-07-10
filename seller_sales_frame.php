<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin seller frame</title>
	</head>
	<body>
        <h4>Sales</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select p.img_src, p.descrip, b.username from product p, buyer b, sales s where p.id_product=s.id_product and p.id_seller='".$_COOKIE["seller"]."' and p.id_prod=s.id_prod";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        while ($row = mysqli_fetch_array($res)) {
            echo "<div>".$row["id_seller"]." <img src='".$row["img_src"]."'> ".$row["descrip"]." Sold to ".$row["username"]."<div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>