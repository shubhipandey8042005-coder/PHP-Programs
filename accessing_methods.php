<?php
class person
{
	public $firstname;
	public $lastname;
	function getname()
	{
		return $this->firstname."".$this->lastname;
		
	}
	function sayhello()
	{
		echo "Hello,My name is".$this->getname;
	}
}
$ob=new person();
$obfirstname="John";
$oblastname="Doe";
$ob->sayhello();
?>