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
    $month = 1;
    switch ($month) {
        case 1:
            echo '31 ngày';
            break;
            case 2:
                echo '28 ngày';
                break;
        
        default:
            echo '30 ngày';
            break;
    }
    
    
    ?>
</body>

</html>