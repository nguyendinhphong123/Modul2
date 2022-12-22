<?php
    function email($str){
        $partern = '/^[A-Za-z0-9]+\@[A-Za-z0-9]+\.[A-Za-z]+$/';
        if (preg_match( $partern,$str)){
            echo 'khớp';
        }else{
            echo 'khong khop';
        }
    }
    email('abc@hotmail.com');






