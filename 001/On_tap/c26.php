<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- dùng continue và vòng lặp for
để in ra các số chẵn từ 1 -> 10 -->
</body>
</html>
<?php
  
  for($i = 1; $i <= 10; $i++) {
      if($i % 2 != 0){
          continue;
      }
      echo $i;
  }
  
?>