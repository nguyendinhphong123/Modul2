<?php
    $customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "https://image.thanhnien.vn/300x210/Uploaded/2022/cjhwpdhnw/2022_12_11/cr7-2860.jpg"],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "1983/08/21",
            "address" => "Bắc Giang",
            "profile" => "https://image.thanhnien.vn/w1024/Uploaded/2022/oqivotiw/2022_07_04/cristiano-ronaldo-3776.jpeg"],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "1983/08/22",
            "address" => "Nam Định",
            "profile" => "https://i.ytimg.com/vi/FODBU2EIQdE/maxresdefault.jpg"],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "1983/08/17",
            "address" => "Hà Tây",
            "profile" => "https://vff.org.vn/uploads/images/g69RHp1T.jpg"],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "1983/08/19",
            "address" => "Hà Nội",
            "profile" => "https://assets.telegraphindia.com/telegraph/2021/Jul/1625947754_cristiano-ronaldo-1.jpg"]
        ];
        function searchByDate($customers, $fromDate, $toDate){
            if(empty($fromDate) || empty($toDate)){
                return $customers;
            }
        
        $filteredCustomers = [];
        foreach ($customers as $customer){
            if(strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
            if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
            $filteredCustomers[] = $customer;
        }
        return $filteredCustomers;
    }

    $fromDate = null;
    $toDate = null;
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $fromDate = $_REQUEST["from"];
        $toDate = $_REQUEST["to"];
    }
    $filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    Chọn ngày sinh từ: <input type="date" name="from" id="from" placeholder="yyyy/mm/dd">
    đến: <input type="date" name="to" id="to" placeholder="yyyy/mm/dd">
    <input type="submit" name="" id="submit" value="Lọc">
    </form>

<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img width="100" src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
