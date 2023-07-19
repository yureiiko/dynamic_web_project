<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin product frame</title>
		<link rel="stylesheet" href="../Style/styleProdFrame.css">
		<script type="text/javascript" src="../js/frameRev.js"></script>
	</head>
	<body>
		<?php
		if (!isset($_COOKIE["seller"])) {
			header("Location: login.php");
		}
		?>
        <h4><center><b>Product Frame</b></center></h4>
		<div class="der"><span id="bin" onclick="revSubFrame(10);"><h4>Buy It Now</h4></span><span id="bo" onclick="revSubFrame(11);"><h4>Best Offer</h4></span><span id="auc" onclick="revSubFrame(12);"><h4>Auction</h4></span></div>
        <div id="10" class="prodtype"><iframe src="seller_prod_bin.php" frameborder="0"></iframe></div>
		<div id="11" class="prodtype"><iframe src="seller_prod_bo.php" frameborder="0"></iframe></div>
		<div id="12" class="prodtype"><iframe src="seller_prod_auc.php" frameborder="0"></iframe></div>
	</body>
</html>