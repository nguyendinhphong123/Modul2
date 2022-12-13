<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $array = [
        [46,35,23],
        [83,31,86]
    ];
    $max = $array[0][0];
    for($i =0; $i < count($array); $i++){
        for($j = 0; $j <  count($array[$i]) ; $j++){
            if($array[$i][$j] > $max){
                $max = $array[$i][$j];
            }
        }
    }
    echo $max;
?>