<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $numbers = isset( $_SESSION['number'] ) ? $_SESSION['number'] : [];
        $num = $_REQUEST['num'];
        array_push($numbers,$num);
        $_SESSION['number'] = $numbers;
        echo '<pre>';
        print_r($numbers);
        echo '</pre>';
    
    }
    function tim_so_nho_nhat($arr){
        $min = $arr[0];
        foreach($arr as $key => $value){
            if($value < $min){
                $min = $value;
            }
        }
        echo $min;
    }
      tim_so_nho_nhat($numbers);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="number" name="num" id="" placeholder="Nhập số nguyên">
    <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
