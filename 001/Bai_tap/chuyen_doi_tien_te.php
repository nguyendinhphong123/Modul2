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
    <input type="number" name="tien" placeholder="Nhập USD">
    <input type="submit" value="Chuyển">
    </form>
</body>
</html>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rate = 23000;
    $usd = $_POST['tien'];
    $vnd = $rate * $usd;
    echo $usd . '$ '. ' = ' . $vnd . ' VND';
  }
 
?>