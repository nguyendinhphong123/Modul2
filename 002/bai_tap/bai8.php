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
        <input type="text" name="phong" id="" placeholder="Nhập ký tự">
        <input type="submit" value="Kiểm tra">
        
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $chuoi = "nguyen van teo";
        $count = 0;
        $dem = $_REQUEST['phong'];
        for($i = 0; $i < strlen($chuoi); $i++){
            if($dem == $chuoi[$i]){
                $count += 1;
            }
        }
        echo 'Kết quả: ' . $count . ' ký tự ' . $dem . ' trong chuỗi ' . $chuoi;
     }
        
?>
