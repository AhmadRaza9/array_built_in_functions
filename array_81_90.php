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

/***************************** 71 array_push() *******************************/

$array = array('lion', 'rat', 'snake', 'bear', 'cat');
pre_r($array);
echo BR;
$new_array = array_push($array, 'dog');
pre_r($array);
echo BR;

/***************************** 72 floor() *******************************/

echo floor(12.5) . BR;
echo floor(19.9) . BR;
echo floor(11.1) . BR;
echo floor(-12.5) . BR;
echo floor(-19.9) . BR;
echo floor(-11.1) . BR;

/***************************** 73 strtotime() *******************************/

echo strtotime("now") . BR;
echo date('d-M-Y', strtotime("now")) . BR;
echo date('jS F, Y', strtotime("now")) . BR;

/***************************** 74 htmlspecialchars() *******************************/

$html = "<img style='width:50px; height=:50px;' src='https://clevertechie.com/womb-is-the-key.jpg'>";
echo $html . BR;
echo htmlspecialchars($html) . BR;
echo "&lt; &gt;" . BR;

/***************************** 75 ini_get() *******************************/

echo 'display_errors = ' . ini_get('display_errors') . BR;

/***************************** 76 ini_set() *******************************/

ini_set('display_errors', '0');
echo "display_errors = " . ini_get('display_errors') . BR;

/***************************** 77 chr() *******************************/

echo chr(65) . chr(72) . chr(77) . chr(65) . chr(68) . BR;
$elephant = chr(240) . chr(159) . chr(144) . chr(152);
echo $elephant . BR;

/***************************** 78 extension_loaded() *******************************/

// php -m to check how many extenstions loads

$extenstions = array('xml', 'xsl', 'aaa', 'zip', 'zlib', 'zzz', 'pdo_mysql');

foreach ($extenstions as $extenstion) {
    echo extension_loaded($extenstion) ? "$extenstion is loaded!" . BR : "$extenstion is not loaded!" . BR;
}

/***************************** 79 is_bool() *******************************/

$a = false;
$b = 9;
if (is_bool($a) === true) {
    echo var_export($a) . " is a boolean" . BR;
}

if (is_bool($b) !== true) {
    echo var_export($b) . " is not a boolean" . BR;
}

/***************************** 80 ksort() *******************************/

$keywords = array(
    'm' => 'mother',
    'w' => 'womb',
    's' => 'source',
    'c' => 'connection',
    'h' => 'home',
    'l' => 'love',
    'i' => 'innocent',
    'c' => 'childhood',
    'm' => 'magic',
    'e' => 'escape',
    'j' => 'joy',
    'b' => 'bliss',
    's' => 'story',
);

pre_r($keywords);
echo BR;
ksort($keywords);
pre_r($keywords);
echo BR;
