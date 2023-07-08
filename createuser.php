<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	if (isset($_POST['usrtype']) && isset($_POST['usrname']) && isset($_POST['iban']) && isset($_POST['passwd'])) {
		
		$usr = "root";
		$password = "";
		$database = "dynamic_web_project";
		$port = 3308;
		$mysql = mysqli_connect("localhost", $usr, $password, $database);
		if ($mysql->connect_error) {
    		echo "Problem with the database, try again later";
		}

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