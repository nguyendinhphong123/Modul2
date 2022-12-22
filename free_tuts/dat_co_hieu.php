<?php
$flag = false;
for($i = 0; $i < 1000; $i++){
    if($i % 40 == 0){
        $flag = true;
    }
    if($flag == true){
        echo 'Có';
        break;
    }else{
        echo 'Không';
    }
}