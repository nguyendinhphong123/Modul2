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
    $month = 3;
    switch ($month) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo 'Đi làm';
            break;
        case 7:
            echo 'Sinh hoạt CLB';
            break;
        default:
            echo 'relax';
            break;
    }
    ?>
</body>

</html>