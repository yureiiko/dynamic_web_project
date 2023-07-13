<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Seller Add Prod Page</title>
		<link rel="stylesheet" href="Style/styleUserMain.css">
		<script type="text/javascript" src="js/frameRev.js"></script>
	</head>
	<body>
        <?php
        if (!isset($_COOKIE['seller'])) {
            header("Location: login.php");
        }
        ?>
        <h1>Product Add Frame</h1>
        <p>How do you want to sell the product ?</p>
        <form action="add_sale_prod.php" method="POST">
            <select name="saling" id="saling">
                <option value="bin">Buy it now (you put the price and it not change)</option>
                <option value="bo">Best Offer (you can negotiate the price with the customer)</option>
                <option value="auc">Auction (auction take place between customers for 1 month)</option>
            </select>
            <br><br>
            <input type="submit" value="Add product specifications">
        </form>
	</body>
</html>