<?php

const BR = "<br>";
$array = array("The Matrix", "John Wick", "Kingsman", "The Witcher");
$array2 = array("Science Fiction", "Action", "Thriller", "Season");

/***************************** 41 file_put_contents() *******************************/

// $content = "It is a good day to die";
// file_put_contents('cheat-code.php', $content);
// $more = "This is more content";
// file_put_contents('cheat-code.php', $more, FILE_APPEND);

/***************************** 42 rtrim() *******************************/
$string = "We are all one ";
var_dump($string);
echo BR;
$trimmed = rtrim($string);
var_dump($trimmed);
echo BR;
$trim = rtrim($trimmed, ' one');
var_dump($trim);
echo BR;

/***************************** 43 array_shift() & array_pop()*******************************/

$array_shift = array_shift($array); // remove first element of an array
print_r($array);
echo BR;
$array_pop = array_pop($array2); // remove last element of an array
print_r($array2);
echo BR;

/***************************** 44 unlink() *******************************/
// $content = "It is a good day to die";
// file_put_contents("content.php", $content);
// unlink('content.php'); // delete file;

/***************************** 45 basename() *******************************/

$dir = "D:\Installations\laragon\www\php-built-in-fun\cheat-code.php";
echo basename($dir, ".php") . BR;

/***************************** 46 realpath() *******************************/

$dir = "windows/system32";
echo realpath($dir);
echo BR;

/***************************** 47 call_user_func() *******************************/

function favourite_game($game, $type)
{
    echo "I love to play $game, its my favourite $type of game!";
}
$function_name = 'favourite_game';
call_user_func($function_name, 'Witcher 3', 'XBOX 360');
echo BR;

class Cards
{
    public static function pick_card()
    {
        $cards = array('King', 'Queen', 'Jack', 'Ace', 'Ten');
        echo $cards[array_rand($cards)];
    }
}

call_user_func(array('Cards', 'pick_card'));
echo BR;
call_user_func("Cards::pick_card");
echo BR;

/***************************** 48 call_user_func_array() *******************************/

function favourite_movie($movie, $type, $year)
{
    echo "I love to watch $movie, its my favourite $type movie which came out in $year!";
}

$function_name = 'favourite_movie';
$parameters = array('Braveheart', 'Drama', 1995);
call_user_func_array($function_name, $parameters);
echo BR;

/***************************** 49 fopen() *******************************/

// $resource = fopen("D:/Installations/laragon/www/php-built-in-fun/test.php", 'a');
// var_dump($resource);
// fwrite($resource, PHP_EOL . 'Every little thing she does');
// fclose($resource);
// echo BR;

/***************************** 50 microtime() *******************************/

$time_start = microtime(true);

usleep(2000000); // 2seconds, 1 micro second = 1,000,000 micro seconds

$time_end = microtime(true);
$time_elapsed = $time_end - $time_start;
echo "Did nothing in $time_elapsed seconds!";
