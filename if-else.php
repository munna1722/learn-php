<?php
if (5 > 3) {
  echo "Have a good day!";
}

$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}

$x = 100;  
$y = 50;

if ($x <> $y) {
  echo "$x is not equal to $y";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$xname  = "ami Asif";
$yname  = "ami mithila";
$fullname = "$xname and $yname";

$husbent = 30;
$wife    = 20;

$xhusbent = 5;
$ywife    = 5;
$baby     = 5;

if ($husbent < $wife) {
    echo "$xname biya korbo";
} 
elseif ($xhusbent > $ywife) {
    echo "$xname o $yname biya korte pari ";
} 
elseif ($xhusbent > $baby) {
  echo "$fullname  amader baby hoycha  ";
} 
else {
    echo " $yname na ai ta somvob na";
}
?>