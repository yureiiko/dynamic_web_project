<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	if (isset($_POST['usrtype']) && isset($_POST['usrname']) && isset($_POST['iban']) && isset($_POST['passwd'])) {
		
		$usr = "root";
		$password = "";
		$database = "dynamic_web_project";
		$port = 3308;
		$mysql = new mysqli("localhost", $usr, $password, $database, $port);
		if ($mysql->connect_error) {
    		echo "Problem with the database, try again later";
		}

		/*
		switch ($_POST['usrtype']) {
			case 'buyer':
				$id = mysqli_query($mysql,"select max(id_buyer)+1 from buyer");
				break;
			case 'seller':
				$id = mysqli_query($mysql,"select max(id_seller)+1 from seller");
				break;
			default:
				$id = 1;
				break;
		}*/

		$query = "insert into ".$_POST['usrtype']."(username,passwd,iban) values('".$_POST['usrname']."','".$_POST['passwd']."','".$_POST['iban']."')";
		if (mysqli_query($mysql, $query)) {
			echo "done";
		}
		else {
			echo "error";
		}
		mysqli_close($mysql);

	}
} else {
	header("Location: createUser.html");
}
?>