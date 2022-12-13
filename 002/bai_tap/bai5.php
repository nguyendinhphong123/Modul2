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
    $array1 = [43,87,23];
    $array2 = [93,12,76];
    $array3 = [];
    foreach($array1 as $key => $value){
        array_push($array3, $value);
    }
    foreach($array2 as $key => $value){
        array_push($array3, $value);
    }
    echo '<pre>';
    print_r($array3);
    echo '</pre>';
    
?>