<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- sử dụng vòng lặp lồng nhau để in ra 1 table gồm 8 hàng và 3 cột -->
</body>
</html>
<?php
    echo '<table>';
    for($i = 1; $i <= 8; $i++){
        echo '<tr>';
        for($j = 1; $j <= 3; $j++){
            echo '<td>' . $i . $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

?>