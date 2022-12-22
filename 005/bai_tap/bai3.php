<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $so = $_POST['phong'];
        $viettel = [];
        $vina = [];
        $mobi = [];
        $mang_so = explode(",",$so);
        foreach($mang_so as $value){
            $tim_so = substr($value,0,3);
            if($tim_so == "096"){
                array_push($viettel,$value);
            }else if($tim_so == "082"){
                array_push($vina,$value);
            }else if($tim_so == "078"){
                array_push($mobi,$value);
            }
        }
        echo "<br>Số Viettel là: " . implode(",",$viettel);
        echo "<br>Số Vina là: " . implode(",",$vina);
        echo "<br>Số Mobi là: " . implode(",",$mobi);
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
    <textarea name="phong" id="" cols="20" rows="2" placeholder="Nhập số điện thoại"></textarea><br>
    <input type="submit" name="" id="" value="Gửi">
    </form>
</body>
</html>