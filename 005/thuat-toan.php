<?php
    $books = ['Van', 'Su','Dia'];
    $find = 'Su';
    foreach($books as $key => $book){
        if($book == $find){
            echo $key;
        }
    }
?>