<?php
$n=50;
function local_var()
{
	$a=45;
	echo("local variable declared inside function=".$a);
}
local_var();
function global_var()
{
	global $n;
	echo("<br>variable inside function =".$n);
}
global_var();
echo("<br>variable outside function=".$n);
function static_var()
{
	static $num1=3;
	$num2=6;
	$num1++;
	$num2++;
	echo("<br>static variable=".$num1);
	echo("<br>non static variable=".$num2);
}
static_var();
static_var();
?>