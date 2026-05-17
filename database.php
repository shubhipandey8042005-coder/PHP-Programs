<?php
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"college");
if($db)
{
	echo"database selected successfully";
}
else{
	echo"database selected not successfully";
}
?>