<?php

    /*
    preg_match($pattern,$subject,&$matches)
    
    */
    $partern = '/[A-Za-z0-9]+\@[A-Za-z0-9]+\.[A-Za-z]+/';
    $subject = 'phongnguyen@gmail.com';
    if (preg_match( $partern,$subject)){
        echo 'khớp';
    }else{
        echo 'khong khop';
    }

    /*
    preg_match_all($pattern,$subject,&$matches)
    */
    $subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
    $pattern = '/\./';
    preg_match_all($pattern, $subject, $matches);

    echo '<pre>';
    print_r($matches);
    echo '</pre>';
    

    /*
    preg_split($pattern,$subject)
    */

    $ip = "192.168.1.1";
    $iparr = preg_split ("/\./", $ip);

    echo '<pre>';
    print_r($iparr);
    echo '</pre>';