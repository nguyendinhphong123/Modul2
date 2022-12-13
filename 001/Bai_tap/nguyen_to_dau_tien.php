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
    <input type="number" name="hienthi" id="">
    <input type="submit" value="Tìm">
    </form>
</body>
</html>
<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $so_nguyen = 7;
//         $count = 0;
//         $n = 2;
//         if($ count < $so_nguyen){

//         }
//     }
    $numbers = $_POST['hienthi'];
    $count = 0;
    $n = 2;
    $countSNT = 0;
    for($i = 0; $i < 100; $i++){
        if($countSNT < $numbers){
            for ( $j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $count += 1;
                }

            }
            if ($count == 2) {
                echo $i . "<br>"; //4
                $countSNT += 1; //1
            }
           $count = 0;
        }
        else {
            break;
        }
    }
   }

?>