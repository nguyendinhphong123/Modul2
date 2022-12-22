<?php
function tim_max($a,$b,$c){
    $max = $a;
    if($b > $max){
        $max = $b;
    }
    if($c > $max){
        $max = $c;
    }
    return $max;
}
    $kq = tim_max(8,53,12);
    echo $kq;