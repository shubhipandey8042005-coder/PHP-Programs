<?php
class Rectangle
{
	var $dim1=2;
	var $dim2=10;
	function rectangle($dim1,$dim2)
	{
		$this->dim1="dim1";
		$this->dim2="dim2";
	}
	function area()
	{
		return $this->dim1*$this->dim2;
	}
	function display()
	{
		//any code to b display
	}
}
$s=new rectangle(4,2);
$existance=class_exists("Rectangle");
$properties=get_class_vars("Rectangle");
$methods=get_class_methods("Rectangle");
$object_properties=get_object_vars($s);
$object_status=is_object($s);
echo"class exists:";
print_r($existance);
echo"<br>get_class_vars";
print_r($properties);
echo"<br>get_class_methods";
print_r($methods);
echo"<br>get_object_vars";
print_r($object_properties);
echo"<br>status_object_vars";
print_r($object_status);
?>