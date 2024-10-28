<?php

function myMessage() {
    echo "I love Bangladesh";
}
myMessage();

echo "<br>";
echo "<br>";

function familyName($name) {
    echo "$name <br> ";
}
 
familyName("Islam");
familyName("Munna");
familyName("Jahid");

echo "<br>";
echo "<br>";

function cricketName($name, $years, $adderss) {
    echo "$name islam Born in $years and permanent $adderss <br>";
}

cricketName("sakib", "1985", "magura");
cricketName("Mahamudulla", "1988", "Dhaka");
cricketName("Masrafi", "1986", "Dhaka");
cricketName("Musfikur", "1988", "Dhaka Dhanamundi");
cricketName("Tamim", "1987", "Dhaka Saver");

echo "<br>";
echo "<br>";


function set_height($minheight = 50) {
    echo "The height is : $minheight <br>";
}

set_height(350);
set_height(132);
set_height(78);
set_height(); // Default will be 50 = [minheight]

echo "<br>";
echo "<br>";

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
 echo "5 + 10 = " . sum(5, 10) . "<br>";
 echo sum(20, 50);
 echo "<br>";
 echo "7 + 33 = " . sum(7, 33). "<br>";
 echo "30 + 4 = " . sum(30, 4);

 echo "<br>";
 echo "<br>";

 function add_namber(&$value) {
    $value +=5;
 }
 $sum = 2;
 add_namber($sum);
 echo $sum;

 echo "<br>";
 echo "<br>";

 function my_family($lastname, ...$fastname) {
    $txt ="";
    $len = count($fastname);

    for($i = 0; $i < $len; $i++ ) {
        $txt = $txt."Hi, $fastname[$i] $lastname. <br>";
    }
    return $txt;
 }
 $a = my_family("Doe", "Jane", "John", "joey");
 echo $a;

 echo "<br>";
 echo  "<br>";


 function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, 5);


  echo "<br>";
  echo "<br>";
 
  function addNumber(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo  addNumber(1.2, 4.3);

  echo "<br>";
  echo "<br>";


//   Global Var
$globalVar = "I'm global!";

function useGlobal() {
    global $globalVar;
    echo $globalVar;
}

  
?>