<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin seller frame</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
            function checkDel(id) {
                document.getElementById("del").innerHTML = "Do you really want to delete the user "+id+"<br><button onclick='noDel();'>No</button><button onclick='yesDel("+id+");'>Yes</button>";
            }
            function noDel() {
                document.getElementById("del").innerHTML = "";
            }
            function yesDel(id) {
                jQuery.ajax({
                    type: "POST",
                    url: "deleteSeller.php",
                    dataType: "json",
                    data: {userid: id},
                    complete:function(obj, textstatus) {
                        if ("success" in obj) {
                            document.getElementById("del").innerHTML = "";
                            document.getElementById(id).innerHTML = "";
                        }
                    }
                })
            }
        </script>
	</head>
	<body>
        <h4>Seller Frame</h4>
		<?php
        $usr = "root";
        $password = "";
        $database = "dynamic_web_project";
        $port = 3308;
        $conn = new mysqli("localhost", $usr, $password, $database);
        if ($conn->connect_error) {
            echo "db error <br>";
        }
        $query = "select * from seller";
		$res = mysqli_query($conn, $query);
		mysqli_close($conn);

        while ($row = mysqli_fetch_array($res)) {
            echo "<div id='".$row["id_seller"]."'>".$row["id_seller"]." <b>".$row["username"]."</b> ".$row["iban"]." <button onclick='checkDel(".$row["id_seller"].");'>Delete</button><div>";
        }
        ?>
        <span id="del"></span>
	</body>
</html>