<?php
    $book = "Midsummer's Night Dream";
    $cd = "La Bamba";
    $movie = "Titanic";
    $name = $_GET["name"];
    $address = $_GET["address"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
</head>
<body>
    <h1>Here's what ya purchased:</h1>
    <p><?php echo $name ?>, thanks for buying our stuff!</p>
    <ul>
      <li><?php echo $movie ?></li>
      <li><?php echo $book ?></li>
      <li><?php echo $cd ?></li>
    </ul>
    <p>We will send it to <?php echo $address ?>. Have a nice day, <?php echo $name ?>...</p>
</body>
</html>
