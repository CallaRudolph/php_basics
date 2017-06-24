<?php
    $first_name = $_GET["first_name"];
    $middle_name = $_GET["middle_name"];
    $last_name = $_GET["last_name"];
    $phone = $_GET["phone"];
    $address = $_GET["address"];
    $occupation = $_GET["occupation"];
    $slogan = $_GET["slogan"];
    $email = $_GET["email"];
    $card_header = $first_name . " " . $middle_name . " "  . $last_name;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Create a Business Card</title>
</head>
<body>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div id="card">
                <h2 class="card_header"><?php echo $card_header; ?></h2>
                <h4 class="card_header"><?php echo $address; ?></h4>
                <h4 class="card_header"><?php echo $occupation; ?></h4>
                <h5 class="card_text"><?php echo $slogan; ?></h5>
                <h5 class="contact"><?php echo $email; ?></h5>
                <h5 class="contact"><?php echo $phone; ?></h5>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>
