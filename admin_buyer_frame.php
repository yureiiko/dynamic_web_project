<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin buyer frame</title>
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
        <h4>Buyer Frame</h4>
		<?php
        // Establish database connection
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        
        // Check if the connection was successful
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        
        // Query to fetch buyer records
        $query = "select * from buyer";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        // Iterate over each buyer record and display the information
        while ($row = mysqli_fetch_array($res)) {
            echo "<div id='".$row["id_buyer"]."'>".$row["id_buyer"]." <b>".$row["username"]."</b> ".$row["iban"]." <button onclick='checkDel(".$row["id_buyer"].",1)'>Delete</button><div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>
