<?php

const BR = "<br>";

function pre_r(array $array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

/***************************** dirname() *******************************/
// 21 dirname()

// D:\Installations\laragon\www\php-built-in-fun
// current directory
echo "current directory = " . __DIR__ . BR;
echo dirname("D:\Installations\laragon\www\php-built-in-fun", 2) . BR;

/***************************** 22 function_exists() *******************************/
echo function_exists("dirname") . BR;
echo function_exists("include_once") . BR;
$games = array("PUBG", "Free Fire", "Clash of Clane");
function_exists('pre_r') ? pre_r($games) : print_r($games);
echo BR;

/***************************** 23 array_map() *******************************/
function square($num)
{
    return ($num * $num);
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

pre_r(array_map('square', $numbers)) . BR;

$movies = array("The Matrix", "John Wick", "Kingsman", "The Witcher");
$genres = array("Science Fiction", "Action", "Thriller", "Season");
$years = array(1999, 1995, 2001, 2004);

function show_movies($movies, $genres, $years)
{
    return ("$movies is $genres and was released in $years");
}

pre_r(array_map('show_movies', $movies, $genres, $years)) . BR;

/***************************** 24 get_class() *******************************/
class Animal
{
    public function class_name()
    {
        echo "My class name is: " . get_class();
    }
}
$tiger = new Animal(); // Tiger is an object of class animal
echo get_class($tiger) . BR;
$tiger->class_name();
echo BR;

/***************************** 25 class_exists() *******************************/

if (class_exists('Animal')) {
    echo "yes its exist";
} else {
    echo "no its not exist";
}
echo BR;

/***************************** 26 is_object() *******************************/
if (is_object($tiger)) {
    echo "Yes it is an object";
} else {
    "No";
}
echo BR;

/***************************** 27 time() *******************************/
// echo time() . BR;
$date = date('H:i A', time());
echo $date . BR;

/***************************** 29 date() *******************************/
echo date('d-M-Y') . BR;

/***************************** 28 json_encode() *******************************/
echo json_encode($movies) . BR;

/***************************** 30 is_null() *******************************/
$variable = null;

if (is_null($variable)) {
    echo "This variable is null";
} else {
    echo "This variable is not null";
}
echo BR;
