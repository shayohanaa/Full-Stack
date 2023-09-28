<?php
// String
$myStr = 'Hello World';
var_dump($myStr);

// Int
$myInt = 55;
var_dump($myInt);

// Float
$myFloat = 4.4;
var_dump($myFloat);

// Boolean
$myBool = false;
var_dump($myBool);

// Array
$myArr = [1,2,3,4,5,6];
var_dump($myArr);

// Null
$myNull = NULL;
var_dump($myNull);

$myStr = 'Hello world';
echo strlen($myStr);
echo str_word_count($myStr);
echo strrev($myStr);
echo strpos($myStr, 'world');
echo str_replace('world', 'shay', $myStr);

echo max(23,55,12,64,102,23);
echo min(1,54,102,5839);
echo abs(-5);
echo floor(4.3);
echo ceil(5.8);
echo rand(1, 100);
echo 'The date is '. date('Y/m/d'). '<br>';
echo 'The date is '. date('Y.m.d'). '<br>';
echo 'The date is '. date('Y-m-d'). '<br>';
echo 'The day is '. date('l'). '<br>';
echo 'The Month is '. date('M'). '<br>';
echo 'The Year is '. date('Y'). '<br>';
echo 'The Time is '. date('h:i:sa'). '<br>';

// Set Time Zone
date_default_timezone_set('Israel');
echo 'The time is '. date('h:i:sa'). ' Time zone in Israel<br>';
$d = strtotime("tomorrow");
echo 'The time is '. date('h:i:sa', $d). '<br>';
?>