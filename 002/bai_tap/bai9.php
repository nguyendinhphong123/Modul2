<?php
    $mang = [
        [3,5,8],
        [6,2,1],
        [7,9,4]
    ];
    $tong = 0;
    for($i = 0; $i < count($mang); $i++){
        $tong += $mang[$i][$i];
    }
    echo $tong;
?>