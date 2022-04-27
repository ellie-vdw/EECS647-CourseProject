<!DOCTYPE html>
<html>
    <body>
        <head>
            <h1>EECS647: MyCloud - Library Database</h1>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Chicle&display=swap" rel="stylesheet">
        </head>

    <?php
        #echo "PHP: Hello World!!!!!!!\n";
        echo "<h1>Welcome to Cloudy Day Public Libraries!</h1>";
        echo "<div>";
        echo "<h2 class='menu1'>Locations</h2>";
        echo "<h2 class='menu1'>Member Lookup</h2>";
        echo "<h2 class='menu1'>Book Lookup</h2>";
        echo "<h2 class='menu1'>Book Due Date</h2>"; #Idk what we want to do for the borrow book part so ill just leave this here for rn.
        echo "</div>";

        $servername = "localhost"; //TODO: Create a new mysql database just for the course project
        $database = "id18829926_library"; 
        $username = "id18829926_libraryuser";
        $password = "1234567890";

        // Create connection
        //$conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        //     echo "Cannot connect to database";
        // }

        // // Create database
        // $sql = "CREATE DATABASE n578b202";
        // if ($conn->query($sql) === TRUE) {
        //     echo "Database created successfully";
        // } 
        // else {
        //     echo "Error creating database: " . $conn->error;
        // }

        // echo "Connected to database";
        // mysqli_close($conn);
    ?>

    </body>
    <style>
        h1{
            color: #0da2ff;
            text-align: center;
            font-family: 'Chicle', cursive;
            font-size: 45px;
        }
        .menu1{
            color: #1261a0;
            text-align: left;
            font-family: 'chicle', cursive;
            font-size: 30px;
        }
    </style>
</html>