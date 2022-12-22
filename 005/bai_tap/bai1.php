<?php
    // $numbers = [3,1,5,7,13,7,3,5,4,44,3];
    // $gia_tri = 3;
    // $count = 0;
    // foreach ($numbers as $key => $value) {
    //     if($gia_tri == $value){
    //         $count += 1;
    //     }
    // }
    // echo $count;

    function number($arr,$gia_tri): int{
        $count = 0;
    foreach($arr as $key => $value){
        if($gia_tri == $value){
            $count += 1;
        }else if($gia_tri != $value){
            echo 'không có';
            break;
        }
      }
      return $count;
    }
    $kq = number([3,5,3,4,1,3,3,3],6);
    echo $kq;
    
