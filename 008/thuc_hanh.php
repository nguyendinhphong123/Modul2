<?php
    function isFirstLetterUpperCase($str){
        $regex = '/^[A-Z]/';
        if(preg_match($regex,$str)){
            echo ("String's first character is uppercase");
        }else{
            echo ("String's first character is not uppercase");
        }
    }
    isFirstLetterUpperCase('Codegym');
    isFirstLetterUpperCase('cdegym');