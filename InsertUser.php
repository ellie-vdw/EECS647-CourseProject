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
    // check for existing account
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo "Existing account!";
			echo "Library Card Number: " . $row["LibraryCardNum"]. "<br>";
		}
	} 
    //create account
	else{
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT user_id FROM Users where user_id='".$username."";

        if($_POST["username"] != '' && $num_rows < 1){
            $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";

            if ($mysqli->query($query) == TRUE){
                printf("Username saved.");
            } 
        } 
        else{
            printf("Usernames cannot be empty.");
        }
	}
	$mysqli->close();
?>