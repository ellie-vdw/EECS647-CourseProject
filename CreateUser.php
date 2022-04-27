<?php

    // $servername = "mysql.eecs.ku.edu"; 
    // $database = "n578b202";
    // $username = "n578b202";
    // $password = "uhaip9ei";

    // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $database);
    $mysqli = new mysqli("mysql.eecs.ku.edu", "n578b202", "uhaip9ei", "n578b202");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        printf("Cannot connect to database");
    }

    // $username = $_POST["username"];

    // $query = "SELECT user_id FROM Users where user_id='".$username."'";

    // if($_POST["username"] != '' && $num_rows < 1){
    //     $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";

    //     if ($mysqli->query($query) == TRUE){
    //         printf("Username saved.");     
    //     } 
    //     else{
    //         printf("Username already in use.");
    //     }
    // } 
    // else{
    //     printf("Usernames cannot be empty.");
    // }
    printf("Connected to database");
    /* close connection */
    $mysqli->close();
?>