<?php
class testParent
{
public function f1() // function f1
{
echo "poly"."<br>";
}

public function f2() // function f2
{
echo "niru"."<br>";
}
}
class testChild
{
public function f1($a) //overriding function f1
{
echo "$a" ."<br>";
}

function f2($a) //overriding function f2
{
echo "$a" ."<br>";
}
}

$a = new testChild();
$b=new testParent();
$b->f1();
$b->f2();
$a->f1("Polymorphism");
$a->f2("Inheritence");
?>

