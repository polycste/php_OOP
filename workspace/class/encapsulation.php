<?php
	class person
	{
	public $name;
	public $age;
		function __construct($name, $age)
		 {
		$this->name=$name;
		$this->age=$age;
		}
		public function setAge($age)
		{
		$this->age=$age;
		}
		public function display()
		{
		echo  "welcome ".$this->name."<br/>";
	return $this->age;
     // echo $this->age;
		}
	}
	$person=new person("poly",16);
	$person->setAge(20);
	echo "You are ".$person->display('niru',30)." years old";
  
 
?>