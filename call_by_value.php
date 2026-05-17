<?php
function increment($var){
	$var++;
	return $var;
}
$a=5;
$b=increment($a);
echo $a;
echo $b;
?>