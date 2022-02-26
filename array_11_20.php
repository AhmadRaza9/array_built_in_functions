<?php
// 11 preg_match()
$text = '<img src="https://source.unsplash.com/700x300/?landscape,sight.png">';
preg_match("!img src=\"(.*?).(png)\"!", $text, $match);
echo "<pre>";
print_r($match);
echo "</pre>";
echo "<br>";

// 12 sprintf()
/**
 *
 * type (string) => specifiers (s)
 * type (int) => specifiers (d,u,c,o,x,X,b)
 * type (float) => specifiers (e, E, f, F, g, G, h, H)
 *
 * **/

$room_num = 4;
$rooms = 'rooms';
$bath_num = 2;
$bathrooms = 'bathroom';
$house = 'house';

$format = "There are %d %s and %b %s in my %s";
echo sprintf($format, $room_num, $rooms, $bath_num, $bathrooms, $house);
echo "<br>";

// 13 trim()
$text = "This is me";
echo trim($text, 'Te');
echo "<br>";

// 14 strtolower
$text = "THIS IS A BALL";
echo strtolower($text);
echo "<br>";

// 15 file_exists
$file = "your/file/path.jpg";
if (file_exists($file)) {
    echo "yes its exists";
} else {
    echo "no it is not";
}
echo "<br>";

// 16 is_string
$text = "This is a string";
$values = array(false, true, null, 'abc', '34', 324, '3.33' . 343.3, '', ' ', '0', 0);

foreach ($values as $value) {
    echo "<pre>";
    echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
    echo "</pre>";
}
echo "<br>";

if (is_string($text)) {
    echo "This is a string";
} else {
    echo "This is not a string";
}
echo "<br>";

// 17 preg_replace

$html = "<strong>I Love PHP!</strong>";
$html = preg_replace("!<strong>(.*?)</strong>!", "<h1>$1</h1>", $html);

print_r($html);
echo "<br>";

// 18 file_get_contents
$file = file_get_contents('https://atakisol.com/');
// var_dump($file);
// echo "<br>";

// 19 array_key_exists
$array = array('year' => 2004, 'make' => 'acura', 'model' => 'RSX');
foreach ($array as $key => $value) {

    if (array_key_exists('make', $array)) {
        echo "The $key exists!";
        echo "<br>";

    } else {
        echo "The $key doesn't exists!";
        echo "<br>";
    }
}
echo "<br>";

// 20 array_keys
print_r(array_keys($array));
echo "<br>";
