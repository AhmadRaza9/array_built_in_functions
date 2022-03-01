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

/***************************** 51 mkdir() *******************************/

// mkdir("D:/Installations/laragon/www/php-built-in-fun/new-folder/sub-folder", 0777, true);

/***************************** 62 is_callable() *******************************/
$print_array = 'pre_r';
echo is_callable($print_array, false, $callable_name) . BR;
echo $callable_name . BR;

/***************************** 63 ltrim() *******************************/
$string = " This is a message";
var_dump($string);
echo BR;
var_dump(ltrim($string, " Th"));
echo BR;
/***************************** 64 ob_start() *******************************/
ob_start();
$hello = "Welcome to my awesome web site!";
echo $hello;
$content = ob_get_contents();
ob_clean();
echo $content . BR;

ob_start('callback');
function callback($buffer)
{
    return str_replace("C++", "PHP", $buffer);
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>C++ is a programming language</h1>
</html>
<?php

/***************************** 65 round() *******************************/
echo round(4.2) . BR;
echo round(2.9867, PHP_ROUND_HALF_UP) . BR;
echo round(-6.046, PHP_ROUND_HALF_DOWN) . BR;
echo round(9.99, PHP_ROUND_HALF_ODD) . BR;
echo round(9.99, PHP_ROUND_HALF_EVEN) . BR;

/***************************** 66 fwrite() *******************************/
// $handle = fopen('index.php', 'w');
// fwrite($handle, "This is a good day to die");

/***************************** 67 array_unique() *******************************/
$animals = array("Lion", "Cat", "Zebra", "Bear", "Cat", "Lion", "Dog", "Dog");
pre_r($animals);
$unique_animals = array_unique($animals);
pre_r($unique_animals);

/***************************** 68 array_search() *******************************/
$searched = array_search("Dog", $unique_animals, true);
echo $unique_animals[$searched] . BR;

/***************************** 69 reset() *******************************/

echo current($unique_animals) . BR;
echo next($unique_animals) . BR;
echo next($unique_animals) . BR;
echo next($unique_animals) . BR;
echo next($unique_animals) . BR;
echo reset($unique_animals) . BR;

/***************************** 60 array_unshift() *******************************/
array_unshift($unique_animals, "Panda") . BR;
pre_r($unique_animals);