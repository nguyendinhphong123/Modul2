<?php
$matrix =   [
            [0, 1, 1, 2],
            [0, 5, 2, 0],
            [2, 3, 0, 3,],
          
];
$tong = 0;
    for($i = 0; $i < count($matrix[0]); $i++){
        for($j = 0; $j < count($matrix); $j++){
            if($matrix[$j][$i] !== 0){
                $tong += $matrix[$j][$i];
            }
            else{
                break;
            }
        }
    }
    echo $tong;