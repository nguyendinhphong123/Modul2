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
    $so_nguyen = [7,5,9,3,1];
    $xoa = 5;
    foreach($so_nguyen as $key => $value){
        if($xoa == $so_nguyen[$key]){
            unset( $so_nguyen[$key]);
        }
     
    }
    echo '<pre>';
    print_r($so_nguyen);
    echo '</pre>';
?>