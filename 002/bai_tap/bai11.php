<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mang = [23,546,32,65,31,36,2,36,];
    $so = $_REQUEST['phong'];
    $flag = 0;
    foreach( $mang as $key => $value){
        if($so == $key){
            echo $value;
            $flag = 1;
        }
    }
 
  if ($flag == 0){
    echo 'k co gia tri';
  }
  }

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
        <input type="number" name="phong" id="" placeholder="Nhập số đi bạn">
        <input type="submit" name="" id="" value="Kiểm tra">

    </form>
</body>
</html>