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
    <input type="text" name="mota" placeholder="Mô tả sản phẩm">
    <input type="number" name="gia" id="">
    <input type="number" name="phantram" id="">
    <input type="submit" value="Calculate Discount">
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mo_ta = $_POST['mota'];
        $gia = $_POST['gia'];
        $phan_tram = $_POST['phantram'];
        $discount = ($gia * $phan_tram) * 0.1;
        echo $mo_ta .' giá sau khi đã được chiết khấu là: ' . $discount . ' VND';
    }
?>
