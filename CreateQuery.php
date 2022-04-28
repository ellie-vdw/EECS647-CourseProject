<?php
    error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "ellenvandewate", "raoThah7","ellenvandewate");
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
    $username = $_POST["username"];
    $query = "SELECT BooksBorrowed.BorrowID, Books.Title, Books.Author, Books.Genre FROM BooksBorrowed INNER JOIN Books ON BooksBorrowed.BookID = Books.BookID WHERE BooksBorrowed.LibraryCardNum = '$username'";
    $result = $mysqli->query($query);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo " Borrow id: " . $row["BorrowID"]. " Book Title: " . $row["Title"]. " Author " . $row["Author"]. " Genre " . $row["Genre"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
    $mysqli->close();
?>