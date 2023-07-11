<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin product frame</title>
		<style type="text/css" src="Style/styleProdFrame.css"></style>
		<script type="text/javascript" src="frameRev.js"></script>
	</head>
	<body>
		<?php
		if (!isset($_COOKIE["seller"])) {
			header("Location: login.php");
		}
		?>
		<div class="der"><span id="bin" onclick="revFrame(10);"><h4>Buy It Now</h4></span><span id="bo" onclick="revFrame(11);"><h4>Best Offer</h4></span><span id="auc" onclick="revFrame(12);"><h4>Auction</h4></span></div>
        <div id="10" class="prodtype"><iframe src="seller_prod_bin.php" frameborder="0"></iframe></div>
		<div id="11" class="prodtype"><iframe src="seller_prod_bo.php" frameborder="0"></iframe></div>
		<div id="12" class="prodtype"><iframe src="seller_prod_auc.php" frameborder="0"></iframe></div>
	</body>
</html>