<?php
//11 preg_match()
$text = '<img src="https://source.unsplash.com/700x300/?landscape,sight.png">';
preg_match("!img src=\"(.*?).(png)\"!", $text, $match);
echo "<pre>";
print_r($match);
echo "</pre>";
echo "<br>";

//12 sprintf()
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

//13 trim()
$text = "This is me";
echo trim($text, 'Te');
echo "<br>";

//14 strtolower
$text = "THIS IS A BALL";
echo strtolower($text);
echo "<br>";

//15 file_exists
$file = "your/file/path.jpg";
if (file_exists($file)) {
    echo "yes its exists";
} else {
    echo "no it is not";
}
echo "<br>";

//16 is_string
$text = "This is a string";
if (is_string($text)) {
    echo "This is a string";
} else {
    echo "This is not a string";
}
echo "<br>";

//17 preg_replace
