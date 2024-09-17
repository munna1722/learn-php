 <?php
// class Fruits {
//     public function myValue(){
//       return __CLASS__;
//     }
//   }
//   $kiwi = new Fruits();
//   echo $kiwi->myValue();

//echo __DIR__;// file ar jonno use kora hoy
// echo __FILE__;

function myValue(){
    return __FUNCTION__;
} 
echo myValue();

?>