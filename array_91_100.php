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

/***************************** 91 array_reverse() *******************************/

$archetypes = array('king', 'warrior', 'magician', 'lover');
pre_r($archetypes);
echo BR;

pre_r(array_reverse($archetypes));
echo BR;

/***************************** 92 ord() *******************************/
echo ord('A') . ord('H') . ord('M') . ord('A') . ord('D') . BR;

/***************************** 93 uniqid() *******************************/

echo uniqid('clever-', true) . BR;

/***************************** 94 strtr() *******************************/

$text = "This is a text";
echo strtr($text, ' ', '+') . BR;

/***************************** 95 array_diff() *******************************/

$animals1 = array('wolf', 'jaguar', 'eagle', 'dolphin', 'bear', 'deer');
$animals2 = array('wolf', 'jaguar', 'eagle', 'cow', 'pig', 'deer', 'car');
$result = array_diff($animals2, $animals1);
pre_r($result);

echo BR;

/***************************** 96 error_reporting() *******************************/

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

/***************************** 97 ceil() *******************************/

echo ceil(4.1) . BR;
echo ceil(4.5) . BR;
echo ceil(4.9) . BR;
echo ceil(-4.1) . BR;
echo ceil(-4.5) . BR;
echo ceil(-4.9) . BR;

/***************************** 98 urlencode() *******************************/

$user_query = 'best digital camera 2022';
$string = 'search.php?query=' . urlencode($user_query);
echo $string . BR;

/***************************** 99 min() *******************************/

echo min(232, 22323, 3, 434, 343, 0.2, 0.1) . BR;
echo max(232, 22323, 3, 434, 343, 0.2, 0.1) . BR;

/***************************** 100 print_r() *******************************/

$testarray = print_r($array, true);
echo $testarray;
