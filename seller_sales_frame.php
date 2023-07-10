<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin seller frame</title>
	</head>
	<body>
        <?php
		if (!isset($_COOKIE["seller"])) {
			header("Location: login.php");
		}
        echo("<br>".$_COOKIE["seller"]."<br>");
		?>
        <h4>Sales</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            die
        }
        $query = "select * from sales";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);
        //echo "<br>".$res."<br>";
        if (!$res===false) {
            while ($row = mysqli_fetch_array($res)) {
                echo "<div>".$row["id_seller"]." <img src='".$row["img_src"]."'> ".$row["descrip"]." Sold to ".$row["username"]."<div>";
            }
        } else {
            echo "TEST error"
        }
        ?>
        <span id="del"></span>
	</body>
</html>