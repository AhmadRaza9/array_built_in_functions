<?php

const BR = "<br>";

function pre_r(array $array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$array = array("The Matrix", "John Wick", "Kingsman", "The Witcher");
$array2 = array("Science Fiction", "Action", "Thriller", "Season");

/***************************** 51 fclose() *******************************/

// $handle = fopen('newfile.txt', 'w');
// fwrite($handle, 'something');
// fclose($handle);

/***************************** 52 is_int() *******************************/
$values = array(23, '23', 23.5, '23.5', null, true, false);
echo "<pre>";
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}
echo BR;

/***************************** 53 is_file() *******************************/

var_dump(is_file('D:\Installations\laragon\www\php-built-in-fun\newfile.txt'));
echo BR;

/***************************** 54 array_slice *******************************/

$spiral_dynamics = array('Biege', 'Purple', 'Red', 'Blue', 'Orange', 'Green', 'Yellow');
pre_r($spiral_dynamics);
$chunk = array_slice($spiral_dynamics, 0, 4);
pre_r($chunk);

/***************************** 55 preg_match_all() *******************************/
// <a href="https://ataki.dev/project-portfolio/interior-design-and-moving-services/">Interior Design and Moving services</a>

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://ataki.dev/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$content = curl_exec($curl);

preg_match_all("!<a href='https://ataki.dev/project-portfolio/.*?/'>(.*?)</a>!", $content, $matches);
pre_r($matches);
echo BR;

/***************************** 56 ucfirst() *******************************/
$string = "this is a ball";
echo ucfirst($string) . BR;

/***************************** 57 intval() *******************************/

$values = array(42, 4.2, '42', '+34', '-34', null, '0394', false);
foreach ($values as $value) {
    echo intval($value) . BR;
}

/***************************** 58 str_repeat() *******************************/

$repeat = str_repeat("I love you ", 10);
// echo $repeat;

/***************************** 59 serialize() *******************************/
$text = "Clever Mirchu";
echo serialize($text) . BR;
echo serialize(100) . BR;

/***************************** 60 array_filter() *******************************/
$values = array(42, 4.2, '42', '420', -34520, 567, '0394');

function filter($value)
{
    return ($value == 42);
}
pre_r($values);
echo BR;
$result = array_filter($values, 'filter');
pre_r($result);
