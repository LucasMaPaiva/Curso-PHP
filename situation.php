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
    //student grades
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $n3 = $_GET["c"];
    $n4 = $_GET["d"];
    $a = ($n1+$n2+$n3+$n4) / 4;
    echo "These are your notes: $n1, $n2, $n3, $n4. Its average is $a<br/>".
    $sit = $a>7?"You are approved": "You are failed";
    ?>
</div>
</body>
</html>