<?php
$n=50;
$m=40;
function addition()
{
	$GLOBALS['z']=$GLOBALS['n']+$GLOBALS['m'];
}
addition()
echo $z;
?>