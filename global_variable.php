<?php
$n=50; //global variable 
function global_var()
{
	global $n;
	echo("variable inside function ".$n);
}
global_var();
echo("variable outside function".$n);
?>