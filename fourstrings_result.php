<?php
    // $string1 = $_GET["string1"];
    // $string2 = $_GET["string2"];
    // $string3 = $_GET["string3"];
    // $string4 = $_GET["string4"];
    // $uppers = strtoupper($string1);
    // $count = str_word_count($string2);
    // $shuffle = str_shuffle($string3);
    // $output = stripos($string4, "fun");

    $string1 = $_GET["string1"];
    $string2 = $_GET["string2"];
    $string3 = $_GET["string3"];
    $playWords = playOnWords ($string1, $string2, $string3);

    function playOnWords ($string1, $string2, $string3)
    {
        $reverse = strrev($string1);
        $upper = strtoupper($string2);
        $reverse3 = strrev($string3);
        $up3 = strtoupper($reverse3);
        return $reverse . $upper . $up3;
    }
?>
<html>
<head>
    <title>String Stuff</title>
</head>
<body>
    <!-- <h1>Here ya go!</h1>
    <ul>
      <li><?php echo $uppers; ?> </li>
      <li><?php echo $count; ?> </li>
      <li><?php echo $shuffle; ?> </li>
      <li><?php echo $output; ?> </li>
    </ul> -->
    <h1>Let's play...</h1>
    <?php echo $string1; ?>
    <?php echo $string2; ?>
    <?php echo $string3; ?>
    <p>becomes:</p>
    <?php echo $playWords; ?>
</body>
</html>
