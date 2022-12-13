<?php
// $books = ['Van','Su','Dia'];




//     //Truy cap phan tu dua vao chi so
//     // echo '<br>'. $books[0];
//     // echo '<br>'. $books[1];
//     // echo '<br>'. $books[2];


//     // Do dai cua mang
//     echo count($books);//3

//     // them phan tu vao mang
//     array_push( $books, 'Hoa');

     

//      //Khai bao cach 2
//      $books = [
//           0 => 'Van',
//           1 => 'Su',
//           2 => 'Dia'
//      ];

//      // Mang lien ket
//      $books = [
//             'khong' => 'Van',
//             'mot' => 'Su',
//             'hai' => 'Dia'
//      ];

//         echo '<br>'. $books['khong'];
//         echo '<br>'. $books['mot'];
//         echo '<br>'. $books['hai'];

//      //In mang
//      echo '<pre>';
//      print_r($books);
//      echo '</pre>';



     $info = [
        'ten' => 'Nguyen Van Teo',
        'tuoi' => 18
        
     ];
     
     $info['gioi_tinh'] = 'Nam';

     echo '<pre>';
     print_r($info);
     echo '</pre>';

     // Duyet mang
     foreach($info  as $key => $value){
        echo '<br>' . $key . ' - ' . $value;
     }
     foreach($info  as $value){
        echo '<br>'. $value;
     }

     foreach($info  as $key => $value):
        echo '<br>' . $key . ' - ' . $value;
     endforeach;

     for($i = 0; $i < count($info); $i++)


