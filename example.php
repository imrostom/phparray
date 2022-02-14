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

//Count Function
dd($users);

Peter function


function compare($a, $b)
{
    if ($a % 2 == 0) {
        if ($b % 2 == 0) {
            return ($a < $b) ? -1 : 1;
        }
        return 0;
    } else {
        if ($b % 2 == 0) {
            return 1;
        }
        return ($a < $b) ? -1 : 1;
    }
}

$array = array(99, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59);

usort($array, "compare");


dd($array);
