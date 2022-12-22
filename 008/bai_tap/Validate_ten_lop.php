<?php
    function lophoc($str){
        $partern = '/^[CAP]+[0-9]{4,4}[GHIKLM]+$/';
        if (preg_match( $partern,$str)){
            echo 'khớp';
        }else{
            echo 'khong khop';
        }
    }
    lophoc('P0323A');