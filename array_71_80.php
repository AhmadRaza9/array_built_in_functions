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

$directory = "D:/Installations/laragon/www/php-built-in-fun/new-folder/sub-folder";

/***************************** 71 parse_url() *******************************/

pre_r(parse_url("https://www.amazon.com/s?k=laptop&crid=S64ETYNONHUY&sprefix=laptop%2Caps%2C386&ref=nb_sb_noss_1"));
echo BR;

/***************************** 72 func_get_args() *******************************/

function multiply($num1, $num2, $num3)
{
    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";
    echo "number of arguments " . func_num_args() . BR;
    return $num1 * $num2 * $num3;
}

echo multiply(5, 5, 5) . BR;

function average($num1, $num2, $num3)
{
    return array_sum(func_get_args()) / func_num_args();
}

echo average(8, 12, 16) . BR;

/***************************** 73 end() *******************************/

$animals = array("Lion", "Cat", "Zebra", "Bear", "Dog", "Fish");
echo end($animals) . BR;

/***************************** 74 base64_encode() *******************************/
$text = "This is a secret code";
$encode = base64_encode($text);
echo $encode . BR;

$decode = base64_decode($encode);
echo $decode . BR;

/***************************** 75 unserialize() *******************************/
$text = array('best', 'test', 'testing');
$serialize = serialize($text);
echo $serialize . BR;
pre_r(unserialize($serialize));

/***************************** 76 max() *******************************/
echo max(1, 2, 3, 4, 5, 6, 7, 8, 9) . BR;

/***************************** 77 preg_split() *******************************/

$words = "nature beauty unity,love=consciousness+mother&earth?universe";
$keywords = preg_split("![\s,=+&?]!", $words);
pre_r($keywords);
echo BR;

/***************************** 78 gettype() *******************************/

$variables = array(array(), 100, 'hello', 2.1, null, new stdClass);

foreach ($variables as $value) {
    echo gettype($value) . BR;
}

/***************************** 79 strrpos() *******************************/

echo strpos($words, 'love') . BR;

/***************************** 80 version_compare() *******************************/

echo PHP_VERSION . BR;

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo "My version of PHP is at least 5.0.0!" . BR;
}
