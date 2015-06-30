<?php
class Animal
{
    public $name="cat";
    //private $name2="Dog";
    public function Greet()
    {
        return "Hello, I'm some sort of animal and my name is " . $this->name;
    }
}
class Dog extends Animal
{
    public function Greet()
    {
        return "Hello, I'm a dog and my name is " . $this->name;
    }
}
$animal = new Animal();
//$animal->name="cat";
echo $animal->Greet();
echo "<br>";
$animal = new Dog();
$animal->name = "Dog";
echo $animal->Greet();
?>