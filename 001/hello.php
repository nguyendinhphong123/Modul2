<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  // Chu thich
  $ten_bien = 'gia_tri';
  /*
      string
      number
      boolean
      float
      array
      object

  */


  $ho_va_ten = 'Nguyen Dinh Phong';
  $age = 25;
  $gioi_tinh = true;
  $can_nang = 73.5;
  $que_quan = ['trieu trung', 'trieu phong','quang tri'];


  echo '<br>'.$ho_va_ten;
  echo '<br>'.$age;
  var_dump($gioi_tinh);
  echo '<br>'.$can_nang;
  print_r($que_quan);

  echo '<hr>';
  var_dump($ho_va_ten);
  echo '<br>';
  var_dump($age);
  echo '<br>';

  echo '<pre>';
  print_r($que_quan);
  echo '</pre>';
  ?>
</body>

</html>