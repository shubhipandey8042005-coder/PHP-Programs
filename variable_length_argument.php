<?php
function sum(...$num)
{
	$res=0;
	for each($num as $n)
	{
		$res+=$n;
	}
	return $res;
}
echo(sum(1,2,3,4));
echo(sum(5,4,3));
?>