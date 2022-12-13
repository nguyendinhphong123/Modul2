<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
 
<?php
    // HÌNH CHỮ NHẬT:
    
    // for($i = 1; $i <= 3; $i++){
        
    //     for($j = 1; $j <= 7; $j++){
    //         echo ' * ';
    //     }
    //     echo '<br/>';
    // }
    

    // HÌNH TAM GIÁC VUÔNG:
    // for ($i =1;$i <= 5;$i++) {
    //         $stop = $i;
    //         for ($j = 1;$j <= $i;$j++) {
    //             echo ' * ';
    //         }
    //         echo '<br/>';
    //     }

    // hình tam giác vuông, có cạnh góc vuông ở top-left   
        for($i = 5; $i >= 1; $i--) {
            $stop = $i;
            for($j = 1; $j <= $i; $j++) {
                echo ' * ';
            }
            echo '<br/>';
        }
?> 
    <!-- /*
        
        *
        **
        ***
        ****
        *****

        h:1
             c:1
        h:2
             c:1
             c:2
        h:3
             c:1
             c:2
             c:3
        h:4
             c:1
             c:3
             c:4
            c:4
        h:5
           c:1
           c:2
           c:3
           c:4
           c:5

        */
    //     for (let h =1;h <= 5;h++) {
    //     let stop = h;
    //     for (let c = 1;c <= h;c++) {
    //         document.write(' * ');
    //     }
    //     document.write('<br>');
    // } -->