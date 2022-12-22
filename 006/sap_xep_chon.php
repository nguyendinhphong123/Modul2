<?php
$A = [-6, 4, 4, 22, 40, -5, 11, 18];
$n = count($A);
$t = 0;
for($i = 0;$i < $n - 1; $i++){
    $min = $i;
    for($j = $i + 1; $j < $n; $j++){
        if($A[$j] < $A[$min]){
            $min = $j;
        }
       
    }
    if($min != $i){
        $t = $A[$min];
        $A[$min] = $A[$i];
        $A[$i] = $t; 
    }
}
echo '<pre>';
print_r($A);
echo '</pre>';