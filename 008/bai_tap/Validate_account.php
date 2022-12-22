<?php

    function account($tr){
        $pattern = '/^[_a-z0-9]{6,}$/';
        if (preg_match( $pattern,$tr)){
            echo 'no luôn';
        }else{
            echo 'đói rồi';
        }
    }
    account('12345_');