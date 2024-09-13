<?php
//  ***var_dump****

// var_dump kora hoy  valur position  name najar  jonno , ja onak sohoj upai a amera  vulo koyta word acha koyta namber acha khub sohoje ninnoy korta  pari 


// php supports the following data types
//  *string 
//  *Integer
//  *Float (floating point numbers-also called double)
//  *Boolean
//  *Array
//  *Object
//  *NULL
//  *Resourcde
// ai bisoy gulo sob smy mone rakta hobe 

$name = "Banglsdesh";
var_dump($name);
echo "<br>";

$x = "Hello PHP";
$y = "Hello Bangladesh"; // ai valu ter name string

var_dump ($x);
echo "<br>";
var_dump($y);

echo "<br>";
$namber = 56785;// ai ta int (Integer) vale
var_dump($namber); 
echo "<br>";


$namberone = 10.40; // ai vale tar name float
var_dump($namberone);
echo "<br>";

$x =  true; //ai valu ta hoccha bool . ja amra (Boolean) name chini
var_dump($x);
echo "<br>";

//array multipule values in one single varibale
$car = array("tata", "bmw", "toyota");// ai khane  buja jai je . valu acha  ta . and php ta count kora hoy (0) thaka
var_dump($car);
echo"<br>";

class Car{
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a" . $this->color. " " . $this->model . "!";
    }
}

$myCar = new Car ("Red", "Volvo");
echo "<br>";
var_dump($myCar);

// var_dump kora hoy  valur position  name najar  jonno , ja onak sohoj upai a amera  vulo koyta word acha koyta namber acha khub sohoje ninnoy korta  pari 
?>