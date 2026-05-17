<?php
$id=$_POST['FIDi'];
$name=$_POST['FNamei'];
$sal=$_POST['FSalaryi'];
$con=$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"college");
$cmd="insert into faculty values(".$id.",'".$name."',".$sal.")";
$cm=mysqli_query($con,$cmd);
if($cm)
{
	echo"record inserted successfully";
}
else
{
	echo"record not inserted successfully";
}
mysqli_close($con);
?>	