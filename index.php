<!DOCTYPE html>
<html>
    <body>
        <head>
            <h1>EECS647: MyCloud - Library Database</h1>
        </head>

    <?php
        echo "PHP: Hello World!!\n";
        echo "<br>";
        echo "<br>";

        $servername = "mysql.eecs.ku.edu"; //TODO: Create a new mysql database just for the course project
        $database = "n578b202";
        $username = "n578b202";
        $password = "uhaip9ei";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "Cannot connect to database";
        }

        // Create database
        $sql = "CREATE DATABASE n578b202";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } 
        else {
            echo "Error creating database: " . $conn->error;
        }

        echo "Connected to database";
        mysqli_close($conn);

    ?>


    </body>
</html>