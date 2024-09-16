<?php
//php nambers
//There are three main numeric type in PHP
// 1 Integer
// 2 Float
// 3 Number String

// in addition PHP has two more data type user for nambers;

// infinity and NaN

$namber = 5;
$namone= 5.65;
$namthree = "24";

var_dump($namber);
echo "<br>";

var_dump($namone);
echo "<br>";

var_dump($namthree);
echo "<br>";

$x = "love php";
var_dump( is_int($x));
echo "<br>";

$namber = 59;
var_dump(is_int($namber));
// ai khane is_int() use kora hoyacha tar karon hoccha , $x ar man integer acha ki na ;
echo "<br>";

$namber = 10.10;
var_dump(is_float($namber)); // ai khane float uer kora hoyacha tar karon hoccha ai khane variable a ( . ) acha ki na ta dakhar jonno
echo "<br>";

$c = 1.9e532;
var_dump($c);
echo "<br>";

$x = acos(8);
var_dump($x);

$namber = 10;
var_dump(is_float($namber));
echo "<br>";




echo "<br>";
echo "<br>";
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

 //cast float to int
 $x = 245.456;
 $int_cast = (int)$x; // int ar kaj hoccha ( . ) ar porar kono man naya hoeb na 
 echo $int_cast;
echo "<br>";

// cast string to int
$x ="354.32";
$int_cast = (int) $x;
echo $int_cast;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





?>

