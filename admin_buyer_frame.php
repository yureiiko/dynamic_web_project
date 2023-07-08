<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin buyer frame</title>
	</head>
	<body>
        <h4>Buyer Frame</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select * from buyer";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        while ($row = mysqli_fetch_array($res)) {
            echo "<div>".$row["id_buyer"]." <b>".$row["username"]."</b> ".$row["iban"]." <div>";
        }
        ?>
	</body>
</html>