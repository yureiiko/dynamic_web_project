<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Login</title>
	</head>
	<body>
		<div>
			<?php
			if ($_SERVER['REQUEST_METHOD']=="POST") {
				if (isset($_POST['usrtype']) && isset($_POST['usrname']) && isset($_POST['passwd']) && $_POST['usrtype']!="" && $_POST['usrname']!="" && $_POST['passwd']!="") {
					echo "All field filled<br>";
					$usr = "root";
					$password = "";
					$database = "dynamic_web_project";
					$port = 3308;
					$conn = new mysqli("localhost", $usr, $password, $database);
					if ($conn->connect_error) {
					    echo "db error <br>";
					}
					$query = "select id_".$_POST['usrtype']." from ".$_POST['usrtype']." where username='".$_POST['usrname']."' and passwd='".$_POST['passwd']."'";
					$res = mysqli_query($conn, $query);
					mysqli_close($conn);
					if ($res->num_rows==1) {
						echo "Connected<br>";
						$row = mysqli_fetch_array($res);
						switch ($_POST['usrtype']) {
							case 'admin':
								setcookie("admin", $row['id_admin']);
								header("Location: admin_main.php");
								break;
							case 'seller':
								setcookie("seller", $row['id_seller']);
								header("Location: seller_main.php");
								break;
							case 'buyer':
								setcookie("buyer", $row['id_buyer']);
								header("Location: products.php");
								break;
							default:
								break;
						}
					} else {
						echo "Error in login or password<br>";
					}
				} else {
					echo "You must fill each part of the form<br>";
				}
			}
			?>
			<form action="" method="POST">
				<h4>Log in your account</h4>
				<p>log as :</p>
				<label>Admin</label><input type="radio" name="usrtype" value="admin">
				<label>Buyer</label><input type="radio" name="usrtype" value="buyer">
				<label>Seller</label><input type="radio" name="usrtype" value="seller">
				<br>
				<label>Username : </label><input type="text" name="usrname">
				<br>
				<label>Password : </label><input type="password" name="passwd">
				<br>
				<input type="submit" value="Log In">
			</form>
		</div>
	</body>
</html>