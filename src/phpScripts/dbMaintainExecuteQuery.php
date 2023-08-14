<?php
    header('Access-Control-Allow-Origin: *');

    $query = $_POST['query'];

    $servername = "sql9.freesqldatabase.com";
    $username = "sql9639518";
    $password = "cGCGarhvmD";
    $dbname = "sql9639518";

    $conn = new mysqli($servername, $username, $password, $dbname);

    try {
        $conn->query($query);
        echo "Query executed successfully";
        
    }  catch (mysqli_sql_exception $exception) {
         
            echo $conn->error; 
    }

    $conn->close();
?>