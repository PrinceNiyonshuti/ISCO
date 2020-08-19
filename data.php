<?php

include "config/config.php";

// $client_m3 = mysqli_real_escape_string($conn, $_POST['client_m3']); // getting the amount of m3 that the client used

$client_m3=4;
$total_amount = 0; // initializing total amount to pay to 0

$sql = "SELECT * from price WHERE price_category='residential' "; // selecting from the table containing ranges - here it is called 'price_range'
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {

    $range_no = $row['price_id']; // range number or id
    $lower_range = $row['min_price_range']; // lower range limit for the class in m3 . for class 1 it is 0 and so on...
    $upper_range = $row['max_price_range']; // upper range for the class in m3
    $range_amount = $row['amount']; // range amount to pay

    if ($client_m3 == 0) {
    	goto m;
    }else{

    	if ($client_m3 > $upper_range) {
    		$total_amount = $total_amount + ($upper_range * $range_amount);
    		$client_m3 = $client_m3 - $upper_range;
    	}else{
    		$total_amount = $total_amount + ($client_m3 * $range_amount);
    		$client_m3 = 0;
    	}

    }

}

m:
echo 'The amount to pay: ' . $total_amount. ' And M3 Price is :' . $range_amount;

?>