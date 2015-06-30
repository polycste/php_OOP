<?php
class person{
  
  public $name;
  public $age;
  const pi='3.1416';
  
  public function __construct($name,$age){
    
     $this->name = $name;
    
    $this->age = $age;
    
    
  }
  
}
$p1 = new person('poly','23');

$p2= new person('fahmida','21');

echo $p1->name;
echo $p1->age;
echo'<br/>';
echo $p2->name;
echo $p2->age;
echo'<br/>';
echo person::pi;
?>