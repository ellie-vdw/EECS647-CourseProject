<?php
    error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "ellenvandewate", "raoThah7","ellenvandewate");
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
    $name = $_POST["name"];
    $query = "SELECT Members.MemberName, Members.LibraryCardNum, Members.PhoneNum, Members.MemberEmail FROM Members INNER JOIN Libraries ON Members.BuildingNum = Libraries.BuildingNum WHERE Libraries.Name = '$name'";
    $result = $mysqli->query($query);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo "Member Name: " . $row["MemberName"]. "<br> Member Card Number: " . $row["LibraryCardNum"]. "<br> Phone Number: " . $row["PhoneNum"]. "<br> Email: " . $row["MemberEmail"]. "<br><br>";
        }
    } 
    else {
        echo "0 results";
    }
    $mysqli->close();


?>