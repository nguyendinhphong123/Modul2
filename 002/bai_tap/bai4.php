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
    <h1>Simple Calculator</h1>
    <table>
        <tr>
            <td>
                Calculator
            </td>
        </tr>
        <tr>
            <td>
                First operand:
            </td>
            <td>
                <input type="number" name="so_a">
            </td>
        </tr>
        <tr>
            <td>
                Operator:
            </td>
            <td>
            <select name="pheptinh" id="">
                <option value="cong">Cộng</option>
                <option value="tru">Trừ</option>
                <option value="nhan">Nhân</option>
                <option value="chia">Chia</option>
            </select>
            </td>
        </tr>
        <tr>
        <td>
                Second operand:
            </td>
            <td>
            <input type="number" name="so_b">
            </td>
     </tr>
        <tr>
            <td>
                
            </td>
            <td>
                <input type="submit" value="Calculate">
            </td>
        </tr>
           
        
    </table>
    <div>Result:</div>
    </form>
</body>
</html>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $so_a = $_REQUEST['so_a'];
    $so_b = $_REQUEST['so_b'];
    $phep_tinh = $_REQUEST['pheptinh'];

    switch ($phep_tinh) {
        case 'cong':
            $kq = $so_a + $so_b;
            echo $so_a . ' + ' . $so_b . ' = ' . $kq;
            break;
        case 'tru':
            $kq = $so_a - $so_b;
            echo $so_a . ' - ' . $so_b . ' = ' . $kq;;
            break;
        case 'nhan':
            $kq = $so_a * $so_b;
            echo $so_a . ' * ' . $so_b . ' = ' . $kq;;
            break;
        case 'chia':
            if($so_b == 0 || $so_a = $so_b == 0){
                echo 'Lỗi rồi nha bạn';
            }else{
                $kq = $so_a / $so_b;
                echo $so_a . ' / ' . $so_b . ' = ' . $kq;;
            }
        default:
            # code...
            break;
    }
}

?>