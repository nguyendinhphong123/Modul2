<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    /*
    Checkin 9:
    khai báo biến day bằng 1 giá trị bất kỳ từ 2 -> 7
    viết chương trình kiểm tra
    nếu day bằng 2 hoặc 3 hoặc 4 hoặc 5 hoặc 6 thì in ra câu đi làm
    nếu day bằng 7 thì in ra câu: sinh hoạt CLB
    trường hợp còn lại in ra câu: relax
    lưu ý: phần điều kiện đầu tiên có thể triển khai theo cách khác như sau
    nếu day lớn hơn hoặc bằng 2 và bé hơn hoặc bằng 6
    */
    <?php
    $day = 5;
    if($day >= 2 && $day <= 6){
        echo 'di làm';
    }else if($day == 7){
        echo 'sinh hoạt CLB';
    }else{
        echo 'relax';
    }
    
    ?>
</body>

</html>