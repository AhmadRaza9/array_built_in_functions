<?php

const BR = "<br>";
$array = array("The Matrix", "John Wick", "Kingsman", "The Witcher");
$array2 = array("Science Fiction", "Action", "Thriller", "Season");

/***************************** 31 is_numeric() *******************************/

$numbers = array(100, 0x539, '42', '5.5', null, 'clever techie');
foreach ($numbers as $number) {
    if (is_numeric($number)) {
        echo var_export($number) . ' is numeric!' . BR;
    } else {
        echo var_export($number) . ' is NOT numeric!' . BR;
    }
}

/***************************** 32 array_shift() & array_pop()*******************************/

$array_shift = array_shift($array); // remove first element of an array
print_r($array);
echo BR;
$array_pop = array_pop($array2); // remove last element of an array
print_r($array2);
echo BR;

/***************************** 33 defined() *******************************/
echo defined('BR') . BR;
echo defined('BREAK') . BR;

/***************************** 34 is_dir() *******************************/
echo is_dir("D:\Installations\laragon\www\php-built-in-fun") ? "its a directory! " . BR : "its not a directory" . BR;

/***************************** 35 json_decode() *******************************/
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
echo "<pre>";
print_r(json_decode($json, true));
echo "</pre>";
echo BR;

/***************************** 36 header() *******************************/

// header("Location: https://atakisol.com/");
// header("refresh:5; https://atakisol.com/");
// you will be redirected in about 5 secs.

/***************************** 37 strtoupper() *******************************/
$string = "this is a string";
echo strtoupper($string) . BR;

/***************************** 38 array_values() *******************************/

$num = ['one' => 1, 'two' => 2, 'three' => 3];
print_r(array_values($num));
echo BR;
/***************************** 39 md5() *******************************/
$PASSWORD = "password009";
echo md5($PASSWORD) . BR;

/***************************** 40 method_exists() *******************************/
class Human
{
    public function eat()
    {

    }
    public function sleep()
    {

    }
    public function sex()
    {

    }

}
$i = new Human();
echo method_exists($i, 'sex') ? "Method exists!" . BR : "Method doesn't exist!";
