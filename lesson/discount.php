<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div>
    <?php
    //applying a product discount
    $val = $_GET["a"];
    echo "The products price is U$ ". number_format($val, 2, ".", ".");
    $val -= ($val * ($_GET["b"] / 100));
    echo "<br/>with discount the value wes U$ ". number_format($val, 2, ".", ".");

    //previous year
    $now = $_GET["a"];
    echo "The current year is $now and last year was ". --$now;
    ?>
</div>
</body>
</html>