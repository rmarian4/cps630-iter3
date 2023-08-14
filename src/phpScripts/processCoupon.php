<?php
    header('Access-Control-Allow-Origin: *');

    function getDiscount($coupon){
        $servername = "sql9.freesqldatabase.com";
        $username = "sql9639518";
        $password = "cGCGarhvmD";
        $dbname = "sql9639518";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $query = "SELECT * FROM coupons WHERE (couponCode = '$coupon')";
        $result;

        try { 
            $result = $conn->query($query);
            $output = array();
            while($row = $result->fetch_assoc()){
                array_push($output, json_encode($row));
            }

            return $output;
        }
        catch (mysqli_sql_exception $exception)
            { 
                echo("<script>console.log(`Error on login.php: $conn->error`)</script>"); 
                exit();
            }
    }

    $coupon = $_POST['coupon'];
    $result = getDiscount($coupon);
    echo json_encode($result);
    header('HTTP/1.1 200 OK');
?>
