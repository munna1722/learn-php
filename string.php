<?php
$x = "Hello Php";

echo strtoupper($x); // letter uppercase: hove;
echo "<br>"; 

echo strtolower($x); // letter lowercase hove;
echo "<br>";

echo strrev($x);
echo "<br>";

echo trim($x);
echo "<br>";

$x = "Hello World";
$y = explode(" ", $x);

print_r($y);

echo "<br>";
$x = "I LOVE bangladesh";

echo str_replace("bangladesh", "php", $x); // bangladesh ar jaigai php hove
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// string concatenation

$x ="Hello";
$y ="Php";
$z = $x . $y;
echo $z;
echo "<br>";

$x = "Hello";
$y = "PHP";
$z = $x . " " .  $y;
echo "$z";
echo "<br>";


$x ="50";
$y ="50";
$z = $x * $y;
echo $z;
echo "<br>";

$x ="50";
$y ="50";
$z = $x - $y;
echo $z;
echo "<br>";

$x ="100";
$y ="50";
$z = $x / $y;
echo $z;
echo "<br>";

$x ="50";
$y ="50";
$z = $x + $y;
echo $z;
echo "<br>";

// PHP Slicing String

echo "<br>";
echo "<br>";

$name = "best of programing langues php";

echo substr($name, 7);

echo "<br>";
$name = "best of programing langues php";

echo substr($name, -10); // last 10 word 



?>