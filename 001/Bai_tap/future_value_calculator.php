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
        <input type="text" name="soA" placeholder="Lượng tiền đầu tư ban đầu">
        <input type="text" name="soB" placeholder="Lãi suất năm">
        <input type="text" name="soC" placeholder="Số năm đầu tư">
        <input type="submit" value="Calculate">

    </form>
</body>

</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $soA = $_POST['soA'];
    $soB = $_POST['soB'] / 100;
    $soC = $_POST['soC'];
    $ket_qua = $soA;
    for($i = 0; $i < $soC; $i++){
        $ket_qua += $soA *$soB;
    }
    echo 'Giá trị tương lai: ' . $ket_qua . ' VND';
}


?>