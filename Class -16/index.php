<?php   


// $array = [
//     'name' => 'pondit',
//     'location' => 'dhaka'
// ];

// $numbers = [1,2,3,4,5,6,7,8,9];
// function odd($numbers){

//     return $numbers % 2== 1 ;
// }


// $group1 = ['A','B'];
// $group2 = ['C','D'];

// $arr =array_merge($group1, $group2);

// $persons = [
//    'name' => 'pondit',
//    'location' => 'dhaka'

// ];
// $persons ['status'] = 'active';

// print_r(array_key_exists('status',$persons));
// die();
// echo "<pre>";

// print_r(array_chunk($numbers, 3));
// print_r(sizeof($numbers));
// print_r(array_filter($numbers, "odd"));
// print_r(in_array(3, $numbers));

// print_r($arr);


// $persons = [
//    'name' => 'Humayan',
//    'skills' => [
//       'html' => [
//          'version' => [4,5]
//       ],
//    ],

// ];



// echo "<pre>";

// print_r($persons);

// foreach($persons as $key => $person){

//    if (is_array($person)){
//       foreach($person as $value){
//          foreach($value as $version){
//             foreach($version as $data){
//                echo $data . "<br";
//             }
//          }
//       }
//    }


//    }
   

// echo "</pre>";


// $groups = [

//    'group_1' => [
//        'Momen',
//        'Jahidul',
//        'Rabbi',
//        'Salman Shah',
//    ],
//    'group_2' => [
//        'Farid',
//        'Humayan',
//        'Mihajur',
//        'Najmul'
//    ],
//    'group_3' => [
//        'Iftekhar',
//        'Jotymoy',
//        'Prosantha',
//        'Sabrina',
//    ],
//    'group_4' => [
//        'Angcon',
//        'Mafiur',
//        'Sumaiya',
//        'Tazin'
//    ],
//    'group_5' => [
//        'Nishan',
//        'Mishu',
//        'Rana Vai',
//        'Bisshogit'
//    ],
// ];

// echo "<pre>";

// foreach($groups as $key => $group){
//    echo "$key :"  . "</b>";
//    if(is_array($group)){
//        foreach($group as $data){
//            echo "&nbsp; &nbsp; &nbsp; &nbsp $data.<br>";
//        }
//    }
   
// }

// echo "</pre>";
$arr = array (10, 20, 30); 

 foreach ($arr as $val) {  

     echo $val += $val;

     echo " "; 

 }  

?>