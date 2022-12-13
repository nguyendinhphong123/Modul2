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
    // function tim_so_nho_nhat($arr){
    //     $index = 0;
    //     $min = $arr[0];
    //     foreach($arr as $key => $value){
    //         if($value < $min){
    //             $min = $value;
    //             $index = $key;
    //         }
            
    //     }
    //     echo 'số nhỏ nhất là: ' . $min . ' vị trí: ' . $index;
    // }
    // $arr1 = [9,5,2,6,4,8];
    // $min = tim_so_nho_nhat($arr1);
    // echo $min . ' vị trí: ' . $index;


    // TÌM SỐ NHỎ THỨ HAI
  $arr = [43,13,8,5];
  sort($arr);
  foreach ($arr as $key => $value) {
    if($arr[0] !== $arr[$key]){
        echo $arr[$key];
        break;
    }
  }
?>
 