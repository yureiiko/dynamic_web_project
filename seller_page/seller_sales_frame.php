<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin seller frame</title>
        <style>
            body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background-color: #eed9c4;
}

h4 {
	text-align: center;
	margin: 20px 0;
	color: #785d4d;
}

div {
	padding: 10px;
	border-radius: 5px;
	background-color: #eed9c4;
	color: #785d4d;
	margin-bottom: 10px;
}

div img {
	width: 50px;
	height: 50px;
	object-fit: cover;
	margin-right: 10px;
	border-radius: 50%;
}

#del {
	display: flex;
	justify-content: center;
	margin-top: 20px;
}
</style>
	</head>
	<body>
        <?php
		if (!isset($_COOKIE["seller"])) {
			header("Location: login.php");
		}
		?>
        <h4>Sales</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select p.img_src, p.descrip, b.username from product p, buyer b, sales s where p.id_prod=s.id_prod and p.id_seller=1 and b.id_buyer=s.id_buyer";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);
        while ($row = mysqli_fetch_array($res)) {
            echo "<div> <img src='".$row["img_src"]."'> ".$row["descrip"]." Sold to ".$row["username"]."<div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>