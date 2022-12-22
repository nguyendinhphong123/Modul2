<?php
function sdt($str){
    $partern = '/^\([0-9]{2,2}\)-\(0[0-9]{9,9}\)$/';
    if (preg_match( $partern,$str)){
        echo 'khớp';
    }else{
        echo 'khong khop';
    }   
}
    sdt('(44)-(0985896648)');