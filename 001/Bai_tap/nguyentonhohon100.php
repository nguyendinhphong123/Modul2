<?php
//    if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $so_nguyen = 7;
//         $count = 0;
//         $n = 2;
//         if($ count < $so_nguyen){

//         }
//     }
    // $numbers =2;
    $count = 0;
    // $n = 2;
    $countSNT = 0;
    for($i = 2; $i < 100; $i++){
        
            for ( $j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $count += 1;
                }
            }
            if ($count == 2) {
                echo $i . "<br>"; //4
                // $countSNT += 1; //1
            }
           $count = 0;
        // }
        // else {
        //     break;
        // }
    }


?>