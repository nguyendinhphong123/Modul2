<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <h2>Từ Điển Anh - Việt</h2>
    <input type="text" name="search" placeholder="Nhập từ cần tìm">
    <input type="submit" value="Tìm">
    </form>
</body>
</html>
<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính"
];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $searchWord = $_POST["search"];
        $flag = 0;
        foreach($dictionary as $key => $description){
            if($key == $searchWord){
                echo 'Từ: ' . $key . '<br/>Nghĩa của từ: ' . $description;
                echo '<br/>';
                $flag = 1;
            }else if($description == $searchWord){
                echo 'Từ: ' . $description . '<br/>Nghĩa của từ: ' . $key;
                echo '<br/>';
                $flag = 1;
            }
        }

        if($flag == 0) {
            echo 'Không tìm thấy từ cần tra';
        }
    }
?>