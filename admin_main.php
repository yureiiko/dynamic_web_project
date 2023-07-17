<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin Main Page</title>
		<link rel="stylesheet" href="Style/styleUserMain.css">
		<script type="text/javascript" src="js/frameRev.js"></script>
	</head>
	<body>
		<?php
		// Check if admin cookie is set, if not redirect to login page
		if (!isset($_COOKIE["admin"])) {
			header("Location: login.php");
		}
		?>
		<form action="logout.php" method="POST">
			<input type="hidden" name="usrtype" value="admin">
			<input type="submit" value="Log out">
		</form>
		<h1>Welcome Admin</h1>
		<div class="der">
			<span id="p" onclick="revFrame(0)"><h4>Products</h4></span>
			<span id="b" onclick="revFrame(1)"><h4>Buyers</h4></span>
			<span id="s" onclick="revFrame(2)"><h4>Sellers</h4></span>
		</div>
		<div class="frame" id="0"><iframe src="admin_prod_frame.php" frameborder="0"></iframe></div>
		<div class="frame" id="1"><iframe src="admin_buyer_frame.php" frameborder="0"></iframe></div>
		<div class="frame" id="2"><iframe src="admin_seller_frame.php" frameborder="0"></iframe></div>
	</body>
</html>
