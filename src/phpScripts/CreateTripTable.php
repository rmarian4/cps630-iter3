<?php
	header('Access-Control-Allow-Origin: *');

    $servername = "sql9.freesqldatabase.com";
    $username = "sql9639518";
    $password = "cGCGarhvmD";
    $dbname = "sql9639518";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $queryDrop = "DROP TABLE Trips;";

    $queryCreate = "CREATE TABLE Trips(
        tripId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        source VARCHAR(50) not null,
        destination VARCHAR(50) not null,
        distance VARCHAR(20) not null,
        truckId INT(6) REFERENCES Trucks(truckId));";
    
    //Drop
    //try {$conn-> query($queryDrop);}
    //catch(mysqli_sql_exception $exception) {}
    
    //Create + Insert
    try {
        $conn->query($queryCreate);
        //echo "Executed Query";
    }
    catch (mysqli_sql_exception $exception) 
    { echo("<script>console.log(`Error on Trips: $conn->error`)</script>"); }
?>