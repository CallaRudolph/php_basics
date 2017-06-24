<?php
    $recipient = "Jesse";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $north_address = "1200 N New York Ave, Portland, OR 97203";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "1493 SW 2nd Ave, Portland, OR 97201";
    $downtown_order = "3 cases of milk.";
    $north_order = "4 cartons of milk and 3 cases of tea";
    $northwest_order = "50 lbs dark roast.";
    $south_order = "40 lbs light roast.";
    $tea_supplier = "1400 SW Naito";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Order Form</title>
</head>
<body>
    <p>Hi <?php echo $recipient; ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
    <p><?php echo $downtown_order; ?></p>
    <p><?php echo $downtown_address; ?></p>
    <p><?php echo $north_order; ?> from our Tea Supplier <?php echo $tea_supplier; ?></p>
    <p><?php echo $north_address; ?></p>
    <p><?php echo $northwest_order; ?></p>
    <p><?php echo $northwest_address; ?></p>
    <p><?php echo $south_order; ?></p>
    <p><?php echo $south_address; ?></p>
    <p>Thanks,</p>
    <p>Diane</p>
</body>
</html>
