<?php
    $number = [2,5,8,12,16,23,38,56,72,91];


    $L = 0;
    $R = count($number) - 1;
    $find = 23;

    while ($L <= $R) {
        $M = floor(($L + $R)/ 2);
        if($number[$M] < $find){
            $L = $M + 1;
        }else if($number[$M] > $find){
            $R = $M - 1;
        }else{
            echo 'tìm thấy ' . $find . ' tại ' . $M;
            break;
        }
    }
    