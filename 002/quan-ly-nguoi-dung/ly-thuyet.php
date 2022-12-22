<?php
// JSON
// 
    $string = '
    [
        {
            "name" : "Nho",
            "age" : "19"
        },
        {
            "name" : "Huyen",
            "age" : "22"
        },
        {
            "name" : "Phong",
            "age" : "25"
        }
    ]
    ';
        // Chuyen chuoi sang mang
    $data = json_decode($string, true);

    //tạo phan tu moi
    $newItem = [
        'name' => 'Tam',
        'age' => '20'
    ];
    // thêm phan tu vao mang
    array_push($data, $newItem);

    // Chuyen tu mang sang chuoi
    $string = json_encode($data);

    //luu vao file
    file_put_contents( 'users.json', $string);
    echo  $string;

    // var_dump($data);

    echo '<pre>';
    print_r($data);
    die();