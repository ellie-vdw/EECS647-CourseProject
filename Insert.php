<?php
    // Create connection
    $mysqli = new mysqli("mysql.eecs.ku.edu", "n578b202", "uhaip9ei", "n578b202");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    //sample fields in ( )
    $sql = "INSERT INTO MyTable (firstname, lastname, email) 
    VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>