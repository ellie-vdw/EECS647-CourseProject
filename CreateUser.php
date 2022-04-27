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
	$passQ = "SELECT Password FROM Members WHERE Password = '$password' AND LibraryCardNum = '$username'";
	$presults = $mysqli->query($passQ);
	if($presults->num_rows > 0){
		$query = "SELECT LibraryCardNum,  MemberName, PhoneNum, Address, MemberEmail, CreditCardInfo, BuildingNum FROM Members WHERE LibraryCardNum = '$username'";
		$result = $mysqli->query($query);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "Library Card Number: " . $row["LibraryCardNum"]. " Name: " .$row["MemberName"]. " Phone Number: " .$row["PhoneNum"]. "Address: " .$row["Address"]. "Email: " .$row["MemberEmail"]. " Library Number: " .$row["BuildingNum"]. "<br>";
			}
		} 
		else {
			echo "0 results";
		}
	}
	else{
		echo "No results found, please try again";
	}
	$mysqli->close();

?>