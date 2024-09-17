<?php
//define (name, value);

define("GREETING", "Welcome to my php");
echo GREETING;
echo "<br>";


const mycar = "tata";
echo mycar;

//creat an Array constant:

define("car", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);

echo car[0];
echo "<br>";


define ("greeting", "welcome to my php"); // ai function a return korba (wellcome to my php)

function myTest(){ //(myTest) ai ta function ar name
    echo greeting;
}

myTest() // (myTest) ai ta function call kora hoycha 
?>