<?php 

//php line 1
 $x = 5;
  $name = "Md";

  echo $x;
  echo "<br>";
  echo $name;
  echo '<br>';

  //php line 2
  $txt = "php and wordpress";
  echo " i love $txt";
  echo "<br>";

  //php line 3
$age =  30;
echo "amer bosoy" . $age. "ai ta sotti na ";
 echo "<br>";

//php line 4
$age = 10;
$name = 4;
echo $age * $name; //ai khane +_* sob kisu kora jabe 
echo "<br>";

//php line 5
$x = 5; // 5 ja hoccha integer. (kono sonkha thakbe oita  hoccha integer)
$y = "john"; //jhon ai ta hoccha string(kono name thakle steing bujhai)

echo $x;
echo "<br>";
echo $y;
echo "<br>";
//string, integer, float, boolean, array. object, NULL, Resource

//now (var_dump) use 

$x = 5;

var_dump($x);

$name = "my name x";

var_dump($name);
echo"<pre>";
 var_dump (10);
 var_dump("jonh");
 var_dump(3.14);
 var_dump( true );
 var_dump([2,3,56]);
 var_dump(NULL) ;
echo "</pre>";

?>