<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" type="x-icon" href="Style/img/GEC.png">
		<title>GEC</title>
		<link rel="stylesheet" type="text/css" href="Style/style3.css">
	</head>
	<body>
		<section>
			<?php
			if ($_SERVER['REQUEST_METHOD']=="POST") {
				if (isset($_POST['usrtype']) && isset($_POST['usrname']) && isset($_POST['passwd']) && $_POST['usrtype']!="" && $_POST['usrname']!="" && $_POST['passwd']!="") {
					echo "All field filled<br>";
					$usr = "root";
					$password = "";
					$database = "dynamic_web_project";
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
								header("Location: admin_p/admin_main.php");
								break;
							case 'seller':
								setcookie("seller", $row['id_seller']);
								header("Location: seller_p/seller_main.php");
								break;
							case 'buyer':
								setcookie("buyer", $row['id_buyer']);
								header("Location: byer_page/products.php");
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
			<div class="navbar">
				<a href="index.php">
				<img src="Style/img/GEC.png" class="logo" width="150" height="150" ></a>
			</div>
			<div class="login-box">
				<div class="banner">
					<div class="content">
						<h1>Grandeur Estates & Cars</h1><br>
						<h2>Log In</h2>
						<form action="login.php" method="POST">
							<br><label>Identify you're self </label><br>
							<label>Admin</label><input type="radio" name="usrtype" value="admin">
							<label>Buyer</label><input type="radio" name="usrtype" value="buyer">
							<label>Seller</label><input type="radio" name="usrtype" value="seller">
							<br>
							<label>Username :</label>
							<input type="text" placeholder="" style="margin-left: 46px;" name="usrname"><br>
							<label>Password</label>
							<input type="password" placeholder="" style="margin-left: 60px;" name="passwd"><br>
							<button type="submit"><span></span>Log In</button><br>
						</form>
						<div>
							<p>Don't have an account? <a href="createuser.html">Sign Up here</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>	
	</body>
</html>
