<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $money = true;
    $quan_open = true;
    $cho_no = true;
    if ($money == true || $cho_no == true) {
        echo 'Bạn được nhậu';
    } else {
        echo 'Bạn phải về nhà';
    }
    ?>
</body>

</html>