<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div>
    <?php
    //adding or multiplying when the user wants
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $sel = $_GET["op"];
    echo "The chosen numbers were $n1 and $n2";

    $r = $sel=="s"?$n1+$n2:$n1*$n2;
    echo "<br/>$r";
    ?>
</div>
</body>
</html>