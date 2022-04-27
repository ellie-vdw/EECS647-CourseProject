
<?php

    // Create connection
    $mysqli = new mysqli("mysql.eecs.ku.edu", "n578b202", "uhaip9ei", "n578b202");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record -- 3 is example
    $sql = "DELETE FROM MyTable WHERE id=3";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>