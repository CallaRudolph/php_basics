<?php
    // $first_number = $_GET["first_number"];
    // $second_number = $_GET["second_number"];
    // $addition = $first_number + $second_number;
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $shipping_price = calculateShipping($weight, $distance);

    function calculateShipping($weight, $distance)
    {
        $price = $distance / $weight + 5;
        return $price;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Answer Below</title>
</head>
<body>
    <!-- <h1>Arithmetic in PHP is easy!</h1>
    <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is: </p>
    <p><?php echo $addition; ?></p> -->

    <h1>How much will it cost to ship yr stuff?</h1>
    <p>Your package weighs <?php echo $weight; ?> lbs. and is traveling <?php echo $distance; ?> miles so the total shipping cost is:</p>
    <p>$<?php echo $shipping_price; ?></p>
</body>
</html>
