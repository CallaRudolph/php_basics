<?php
    $number = $_GET["number"];
    $square = calculateSquare($number);

    function calculateSquare($number)
    {
        $square = $number * $number;
        return $square;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Answer Below</title>
</head>
<body>
    <h1>Squaring in PHP is easy!</h1>
    <p>The square of <?php echo $number; ?> is: </p>
    <p><?php echo $square; ?></p>

</body>
</html>
