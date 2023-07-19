<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grandeur Estates & Cars : Seller Add Prod Specifications Page</title>
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

form {
	display: flex;
	flex-direction: column;
}

label {
	color: #eed9c4;
	margin-bottom: 10px;
}

select, input[type="file"], input[type="text"], input[type="number"] {
	padding: 10px;
	border-radius: 5px;
	border: none;
	background-color: #eed9c4;
	color: #785d4d;
	margin-bottom: 10px;
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
	background-color: #eed9c4;
	color: #785d4d;
}
.contentP{
    padding: 20px;
	background-color: #785d4d;
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    color: #eed9c4;
    }
</style>
    </head>
    <body>
        <?php
        // Check if seller cookie is set, if not redirect to login page
        if (!isset($_COOKIE['seller'])) {
            header("Location: ../Login_logout/login.php");
        }
        ?>
        <h1>You will now add Specifications about the product</h1>
        <div class="contentP">
            <form action="addProd.php" method="POST" enctype="multipart/form-data">
                <label for="prod_type">What is the type of your product : </label>
                <select name="prod_type" id="prod_type">
                    <!-- Product type options -->
                    <option value="suv">SUV</option>
                    <option value="sportcar">Sport car</option>
                    <option value="convertible">Convertible</option>
                    <option value="coupe">Coupe</option>
                    <option value="grandtourner">Grand Tourner</option>
                    <option value="americancar">American Car</option>
                    <option value="castle">Castle</option>
                    <option value="mansion">Mansion</option>
                    <option value="villa">Villa</option>
                    <option value="apartment">Apartment</option>
                    <option value="island">Island</option>
                    <option value="penthouse">Penthouse</option>
                    <option value="chalet">Chalet</option>
                    <option value="bungalow">Bungalow</option>
                </select>
                <br><br>
                <label for="prod_img">Upload an image of your product : </label>
                <input type="file" name="prod_img" accept="image/png, image/jpeg">
                <br><br>
                <label for="descrip">Give a description of your product : </label>
                <input type="text" name="descrip">
                <br><br>
                <?php
                // Check if 'saling' is set from a POST request
                if (isset($_POST['saling'])) {
                    switch ($_POST["saling"]) {
                        case 'bin':
                            // If 'saling' is 'bin', display input for fixed price
                            echo "<label for='price'>Give your price (it will not change) : </label><input type='number' name='price'><br><br>";
                            echo "<input type='hidden' name='sale' value='BIN'>";
                            break;
                        case 'bo':
                            // If 'saling' is 'bo', display input for negotiable price
                            echo "<label for='price'>Give your price (you will negotiate it) : </label><input type='number' name='price'><br><br>";
                            echo "<input type='hidden' name='sale' value='best_offer'>";
                            break;
                        case 'auc':
                            // If 'saling' is 'auc', set price to 0 and specify auction sale type
                            echo "<input type='hidden' name='price' value='0'>";
                            echo "<input type='hidden' name='sale' value='auction'>";
                            break;
                        default:
                            break;
                    }
                } else {
                    echo "<br>no sale post<br>";
                    // Redirect to seller_addProd_frame.php if 'saling' is not set
                    // header("Location: seller_addProd_frame.php");
                }
                ?>
                <input type="submit" value="Add Product">
            </form>
        </div>
    </body>
</html>
