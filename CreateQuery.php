<?php
    // Create connection
    $mysqli = new mysqli("mysql.eecs.ku.edu", "n578b202", "uhaip9ei", "n578b202");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    //firstname, lastname are sample 
    $sql = "SELECT id, firstname, lastname FROM MyTable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>