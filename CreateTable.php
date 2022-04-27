<?php
    // Create connection
    $mysqli = new mysqli("mysql.eecs.ku.edu", "n578b202", "uhaip9ei", "n578b202");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE MyTest (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
    echo "Table MyTest created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>