<?php
$emp=array(array(1,"A",40000),array(2,"B",25000),array(3,"C",30000));
for($row=0;$row<3;$row++)
{
	for($col=0;$col<3;$col++)
	{
		echo ($emp[$row][$col]);
	}
	echo"<br>";
}
?>