<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $mysqli = new mysqli("mysql.eecs.ku.edu", "ellenvandewate", "raoThah7","ellenvandewate");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $buildingNum = $_POST["buildingNum"];

    $sql = "SELECT Name, PhoneNum, Address FROM Libraries WHERE BuildingNum = $buildingNum";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Library Name: " . $row["Name"]."Phone Number: " . $row["PhoneNum"]."Address: " . $row["Address"]."<br>";
        }
    } 
    else {
        echo "No libraries found with this building number, please try again.";
    }

	$mysqli->close();

?>