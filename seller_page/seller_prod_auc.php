<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin product buy it now</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="../js/prodDelete_check.js"></script>
        <style>
        body {
	background-color: #785d4d;
	color: #eed9c4;
}
        .product-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-radius: 5px;
            background-color: #eed9c4;
            color: #785d4d;
            margin-bottom: 10px;
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
		if (!isset($_COOKIE["seller"])) {
			header("Location: ../Login_logout/login.php");
		}
		?>
        <h4>Product Auction</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
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
            echo "<div class='product-item' id='".$row["id_prod"]."'><img src='".$row["img_src"]."'> ".$row["id_prod"]." <b>".$row["descrip"]."</b> deadline : ".$row["deadline"]." £".$price." <button onclick='checkDel(".$row["id_prod"].",2)'>Delete</button><div>";
        }
        ?>

        <span id="del"></span>
	</body>
</html>