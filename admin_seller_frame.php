<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin seller frame</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/userDelete_check.js"></script>
	</head>
	<body>
        <?php
		// Check if admin cookie is set, if not redirect to login page
		if (!isset($_COOKIE["admin"])) {
			header("Location: login.php");
		}
		?>
        <h4>Seller Frame</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select * from seller";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        while ($row = mysqli_fetch_array($res)) {
            echo "<div id='".$row["id_seller"]."'>".$row["id_seller"]." <b>".$row["username"]."</b> ".$row["iban"]." <button onclick='checkDel(".$row["id_seller"].",2)'>Delete</button><div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>
