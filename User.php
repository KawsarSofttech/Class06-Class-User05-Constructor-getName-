<?php

class User{
	public $name;

	public function __construct()
	{
		$this->name = "Boltu";
	}

	public function getName()
	{
		echo $this->name;
	}
	public function greet()
	{
		echo "Welcome to OOP";
	}

}

$admin = new User();
$admin->getName();


?>