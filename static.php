<?php
	function static_var()
	{
		static $num1=3;
		$num2=6;
		$num1++;
		$num2++;
		echo("static=".$num1);
		echo("nonstatic=".$num2);
	}
	static_var();
	static_var();
?>