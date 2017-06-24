<?php
    $band_name = "TLC";
?>

<?php
    $first_member = "T-Boz";
?>

<?php
    $second_member = "Chilli";
?>

<?php
    $third_member = "Left Eye";
?>

<?php
    $music_style = "R&B, pop, funk";
?>

<?php
    $image = 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwj0uOXGoNfUAhVjHGMKHZEeD4oQjRwIBw&url=http%3A%2F%2Fwww.allmusic.com%2Fartist%2Ftlc-mn0000007689&psig=AFQjCNH46nMab_14G6f59gn278C2EEligQ&ust=1498420237407802';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fans!</title>
</head>
<body>
    <h1>We love <?php echo $band_name; ?>!</h1>
    <p>Here are some facts about <?php echo $band_name; ?>:</p>
    <p>The band started with three members, <?php echo $first_member; ?>, <?php echo $second_member; ?>, and <?php echo $third_member; ?>. Unfortunately, <?php echo $third_member; ?> died in 2002 in an accident.</p>
    <p>They are well known for playing <?php echo $music_style; ?> music.</p>
    <p>Here's a cool picture of them! <?php echo "<a href=$image\">pic</a>"; ?></p>
    <p>Cheers,</p>
    <p>Diane</p>
</body>
</html>
