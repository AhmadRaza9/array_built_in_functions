<?php

$array = array('fox', 'bear', 'deer', 'cat', 'dog', 'elephant', 'wolf');
//1 count();
echo count($array) . "<br>";

//2 is_array()

if (is_array($array)) {
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . '<br>';
    }
} else {
    echo "Cannot loop through the variable, not an array";
}

//3 substr()

$text = "clever techie is awesome";
$textract = substr($text, 7, 6);
$textractnew = substr($text, -7, 7);

echo $textract . "<br>";
echo $textractnew . "<br>";

//4 in_array()

if (!in_array("fox", $array)) {
    echo true;
} else {
    echo false;
}

//5 Explode
$copy = "red, orange, black, white, cyan, teal, purple, pink";
$columns = "bob|nancy|rachel|molly|victoria";
$copy_array = explode(",", $copy);
$columns_array = explode("|", $columns, 2);

echo "<pre>";
print_r($copy_array);
echo "</pre>";
echo "<br>";

echo "<pre>";
print_r($columns_array);
echo "</pre>";
echo "<br>";

//6 str_replace

$redtag = str_replace("%black%", "black", "<h1 style='color:%black%;'>RED</h1>");
echo $redtag;

$vowels = "This is a car";

echo str_replace($vowels, '', 'Testing');
echo "<br>";

//7 Implode
echo implode(" + ", $array);
echo "<br>";

//8 Strlen

echo strlen($redtag);
echo "<br>";

//9  array_merge

$array1 = ['one', 'two', 'three'];
$array2 = ['four', 'five', 'six'];

$array_merge = array_merge($array1, $array2);
echo "<pre>";
print_r($array_merge);
echo "</pre>";
echo "<br>";

// 10 strpos

$copy = "red, orange, black, white, cyan, teal, purple, pink";
echo strpos($copy, 'cyan');
