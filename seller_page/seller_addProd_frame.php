<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Seller Add Prod Page</title>
		<link rel="stylesheet" href="../Style/styleUserMain.css">
		<script type="text/javascript" src="../js/frameRev.js"></script>
        <style>
            body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background-color: #eed9c4;
}

h1 {
	text-align: center;
	margin: 20px 0;
	color: #785d4d;
}

p {
	text-align: center;
	margin-bottom: 20px;
    color: #785d4d;
}

form {
	display: flex;
	flex-direction: column;
	align-items: center;
}

select {
	padding: 10px;
	border-radius: 5px;
	border: none;
	background-color: #785d4d;
	color: #eed9c4;
}

input[type="submit"] {
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	background-color: #785d4d;
	color: #eed9c4;
	cursor: pointer;
	transition: background-color 0.3s, color 0.3s;
}

input[type="submit"]:hover {
	background-color: #785d4d;
	color: #eed9c4;
}
</style>
	</head>
	<body>
        <?php
        if (!isset($_COOKIE['seller'])) {
            header("Location: ../Login_logout/login.php");
        }
        ?>
        <h1>Product Add Frame</h1>
        <p>How do you want to sell the product ?</p>
        <form action="../create/add_sale_prod.php" method="POST">
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