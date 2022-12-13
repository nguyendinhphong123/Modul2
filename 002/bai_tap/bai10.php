<?php
    $mang = [
        [3,4,24,6],
        [9,8,12,23,1],
        [31,6,22,5]
    ];
    $thu_tu = 1;
    $tong = 0;
    for($i = 0; $i < count($mang);$i++){
        for($j = 0; $j < count($mang[$i]);$j++){
            if($j == $thu_tu){
                $tong += $mang[$i][$j];
            }
        }
    }
    echo $tong;
?>
