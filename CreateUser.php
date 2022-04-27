<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "ellenvandewate", "raoThah7","ellenvandewate");
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$query = "SELECT LibraryCardNum FROM Members";
	$result = $mysqli->query($query);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "Library Card Number: " . $row["LibraryCardNum"]. "<br>";
		}
	} 
	else {
		echo "0 results";
	}
	$mysqli->close();

?>