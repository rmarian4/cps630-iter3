<?php
    header('Access-Control-Allow-Origin: *');

    $query = $_POST['query'];

    $output = array();

    $servername = "sql9.freesqldatabase.com";
    $username = "sql9639518";
    $password = "cGCGarhvmD";
    $dbname = "sql9639518";

    $conn = new mysqli($servername, $username, $password, $dbname);

    try {
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){
            array_push($output, $row);
        }

        echo json_encode($output);
    }  catch (mysqli_sql_exception $exception) { 
            echo $conn->error; 
    }

    $conn->close();
?>

