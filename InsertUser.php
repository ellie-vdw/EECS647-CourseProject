<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "ellenvandewate", "raoThah7","ellenvandewate");
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
	$phone = $_POST["phone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $cardInfo = $_POST["cardInfo"];
    $buildingNum = $_POST["buildngNum"];


	$result = $mysqli->query($query);
    // check for existing account
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo "Here are the existing accounts:";
			echo "Library Card Number: " . $row["LibraryCardNum"]. "<br>";
		}
	} 

    //create account
	else{
		$sql = "INSERT INTO Members ($username, $name, $phone, $address, $email, $cardInfo, $buildingNum)";
		echo "Account created successfully.";
	}
	$mysqli->close();
?>