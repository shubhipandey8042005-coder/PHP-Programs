<?php
$con=mysqli_connect("localhost","root");
if($con)
{
	echo"connection successfully";
}
else{
	echo"connection not successfully";
}
?>