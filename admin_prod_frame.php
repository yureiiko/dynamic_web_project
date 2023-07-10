<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin product frame</title>
		<style type="text/css">
			.prodtype {
				display: none;
			}
			.der {
				display: grid;
				grid-template-columns: auto auto auto;
			}
		</style>
		<script type="text/javascript">
			function revFrame(id) {
				for (var i=10 ; i<13 ; i++) {
					var div = document.getElementById(i);
					if (i==id) {
						div.style.display="block";
					} else {
						div.style.display="none";
					}
				}
			}
		</script>
	</head>
	<body>
		<div class="der"><span id="bin" onclick="revFrame(10);"><h4>Buy It Now</h4></span><span id="bo" onclick="revFrame(11);"><h4>Best Offer</h4></span><span id="auc" onclick="revFrame(12);"><h4>Auction</h4></span></div>
        <div id="10" class="prodtype"><iframe src="admin_prod_bin.php" frameborder="0"></iframe></div>
		<div id="11" class="prodtype"><iframe src="admin_prod_bo.php" frameborder="0"></iframe></div>
		<div id="12" class="prodtype"><iframe src="admin_prod_auc.php" frameborder="0"></iframe></div>
	</body>
</html>