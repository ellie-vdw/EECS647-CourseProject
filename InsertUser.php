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
    $buildingNum = $_POST["buildingNum"];


	$result = $mysqli->query($query); //empty query????

	//create account
    $sql = "INSERT INTO Members (LibraryCardNum, MemberName, Address, MemberEmail, CreditCardInfo, BuildingNum, Password) VALUES($username, $name, $phone, $address, $email, $cardInfo, $buildingNum, $password)";
	
	if($mysqli->query($sql)){
		echo "Account created successfully.";
	}
	else{
		echo "Account could not be created.";
	}

	$mysqli->close();
?>