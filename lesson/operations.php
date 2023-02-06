<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic operations</title>
</head>
<body>
<div>
    <?php
    //sum and average
    $n1 = 50;
    $n2 = 35;
    $s = $n1 + $n2;
    echo "The sum of $n1 + $n2 is $s ";

    $n1 = 3;
    $n2 = 4;
    $m = ($n1 + $n2) / 2;
    echo "<br/>The sum is worth ". ($n1+$n2);
    echo "<br/>The average of these number is $m";

    //getting value from the user
    //$n1 = $_GET["a"];
    //$n2 = $_GET["b"];
    //echo "<br/> Amounts received: $n1 and $n2";

    //math functions
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<br/>Amounts received: $v1 and $v2";
    echo "<br/>The absolute value of $v2 is ". abs($v2);
    echo "<br/>The value of $v1 <sup>$v2</sup> is ". pow($v1, $v2);
    echo "<br/>The root of $v1 is ". sqrt($v1);
    echo "<br/>The value of $v2 rounded off is ". round($v2);
    echo "<br/>The price of the system is U$". number_format($v1, 2,".", ".");
    ?>
</div>
</body>
</html>