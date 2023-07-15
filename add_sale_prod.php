<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Seller Add Prod Specifications Page</title>
		<link rel="stylesheet" href="Style/styleUserMain.css">
		<script type="text/javascript" src="js/frameRev.js"></script>
	</head>
	<body>
        <?php
        if (!isset($_COOKIE['seller'])) {
            header("Location: login.php");
        }
        ?>
        <h1>You will now add Specifications about the product</h1>
        <form action="addProd.php" method="POST" enctype="multipart/form-data">
            <label for="prod_type">What is the type of your product : </label>
            <select name="prod_type" id="prod_type">
                <option value="car">Car</option>
                <option value="castle">Castle</option>
                <option value="mansion">Mansion</option>
                <option value="villa">Villa</option>
            </select>
            <br><br>
            <label for="prod_img">Upload an image of you product : </label><input type="file" name="prod_img" accept="image/png, image/jpeg">
            <br><br>
            <label for="descrip">Give a description of your product : </label><input type="text" name="descrip">
            <br><br>
            <?php
            if (isset($_POST['saling'])) {
                switch ($_POST["saling"]) {
                    case 'bin':
                        echo "<label for='price'>Give your price (it will not change) : </label><input type='number' name='price'><br><br>";
                        echo "<input type='hidden' name='sale' value='BIN'>";
                        break;
                    case 'bo':
                        echo "<label for='price'>Give your price (you will negociate it) : </label><input type='number' name='price'><br><br>";
                        echo "<input type='hidden' name='sale' value='best_offer'>";
                        break;
                    case 'auc':
                        echo "<input type='hidden' name='price' value=0>";
                        echo "<input type='hidden' name='sale' value='auction'>";
                        break;
                    default:
                        break;
                }
            } else {
                echo "<br>no sale post<br>";
                //header("Location: seller_addProd_frame.php");
            }
            ?>
            <input type="submit" value="Add Product">
        </form>
	</body>
</html>