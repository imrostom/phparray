<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require __DIR__ . '/vendor/autoload.php';

//Index Array
$colors = ["Red", "Green", "Blue"];
//dd($colors);


// Associative Array
$ages = ["Peter" => 22, "Clark" => 32, "John" => 28];
//dd($ages);


//Multidimensional Array
$users = [
    ['Shakib', "shakib@gmail.com"],
    ['Rostom Ali', "rostom@gmail.com"]
];
//dd($users);


// count() Function
//dd(count($users));


// in_array() function
//dd(in_array(242, $ages));


// end() function
//dd(end($ages));


//extract() function
//extract($ages);
//dd($Peter);


// list() function
//Prior to PHP 7.1, this function only worked on numerical arrays.
//list($a) = $colors;


//array_values() function
//return numerical array
//dd(array_values($ages));


//array_change_key_case() function
//CASE_UPPER/CASE_LOWER
//dd(array_change_key_case($ages, CASE_UPPER));


// Key() function
// dd(key($ages));


// Range Function
//$number = range(0, 15);
//dd($number);

//array_chunk()
// $cars = ["Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel"];
// dd(array_chunk($cars, 2));


//array_column() function
//$users = [
//    [
//        'id' => 5698,
//        'first_name' => 'Peter',
//        'last_name' => 'Griffin',
//    ],
//    [
//        'id' => 4767,
//        'first_name' => 'Ben',
//        'last_name' => 'Smith',
//    ],
//    [
//        'id' => 3809,
//        'first_name' => 'Joe',
//        'last_name' => 'Doe',
//    ]
//];
//
//$users = array_column($users, 'last_name');
//dd($users);

// array_map() function
//function myFunction($v)
//{
//    return ($v * $v);
//}
//
//$numbers = array(1, 2, 3, 4, 5);
//dd(array_map("myFunction", $numbers));


// $firstname = "Peter";
// $lastname = "Griffin";
// $age = "41";

// $result = compact("firstname", "lastname", "age");

// print_r($result);


// //array_values() Function Return all the values of an array
// $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
// print_r(array_values($a));


$ar1 = [10, 100, 100, 0];
$ar2 = [1, 3, 2, 4];
array_multisort($ar1,$ar2);

dump($ar1);
dd($ar2);
