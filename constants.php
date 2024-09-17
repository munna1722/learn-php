<?php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
$name = new Fruits();
echo $name->myValue();
?>

</body>
</html>
