<?php

class User 
{

	public $age;

    public function __construct($a) 
    {
		$this->age = $a;

    }

	public function getAge()
	{
		echo $this->age;

	}
	


}
$SampleObj1 = new User(31);
$SampleObj1->getAge();


?>