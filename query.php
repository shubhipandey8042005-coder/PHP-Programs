<?php
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"college");
$cmd=mysqli_query($con,"create table faculty (FID integer(4),FName varchar(20),Salary integer(5))");
if($cmd)
{
	echo"table created successfully";
}
else{
	echo"table not created successfully";
}
?>