<?php
    $thong_bao = 'Hello PHP';

    function hello(){
        global $thong_bao;
        echo $GLOBALS['thong_bao'];
        echo $thong_bao;
    }

    hello();