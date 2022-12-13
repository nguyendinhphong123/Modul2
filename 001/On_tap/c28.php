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
         <input type="text" name="soa" value="">
         <input type="text" name="sob" value="">
         <select name="pheptinh" id="">
            <option value="cong">Cộng</option>
            <option value="tru">Trừ</option>
            <option value="nhan">Nhân</option>
            <option value="chia">Chia</option>
         </select>
         
        <button type="sumbit">Gui</button>
    </form>
</body>
</html>
<?php
   
    // Kiem tra người dung gui du lieu len
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Kiem tra du lieu duoc gui len
    
        // Memory
        $soa = $_REQUEST['soa'];
        $sob = $_REQUEST['sob'];
        $pheptinh = $_REQUEST['pheptinh'];
        if($soa == '' && $sob == ''){
            echo 'Hãy nhập số a và số b';
        }else{

        
        // kiem tra du lieu duoc luu vao bo nho
        // var_dump($soa);
        // var_dump($sob);
        // var_dump($pheptinh);
    if($pheptinh == 'cong'){
    $ketqua = $soa + $sob;
    echo $ketqua;
    }else if($pheptinh == 'tru'){
        $ketqua = $soa - $sob;
        echo $ketqua;
    }else if($pheptinh == 'nhan'){
        $ketqua = $soa * $sob;
        echo $ketqua;
    }else if($pheptinh == 'chia'){
        $ketqua = $soa / $sob;
        echo $ketqua;
    }
        
    }
}
  ?>