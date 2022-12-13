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
    $day = 7;
    switch (true) {
        case $day >= 2 && $day <= 6:
            echo 'Đi làm';
            break;
        case $day == 7:
            echo 'sinh hoạt';
            break;
        default:
            echo 'relax';
            break;
    }
    ?>
</body>
</html>