<?php
function hello()
{
	echo("Hello world");
}
$var="hello";
$var();
echo"<br>";
function add($x,$y)
{
	echo $x+$y;
}
$v="add";
$v(10,20);
?>