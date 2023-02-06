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
    //algorithm to calculate your age and show if you are required to vote in brazil
    $y = $_GET["a"];
    $age = (2023-$y);
    echo "You are $age years old <br/>";
    $r = $age > 18 && $age < 64?"You are required to vote":"You are note obligated to vote";
    echo $r;
    ?>
</div>
</body>
</html>