<?php
$id=$_POST['id'];
$name=$_POST['Name'];
$sal=$_POST['Salary'];
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"college");
$cmd="update faculty set FID=".$id.",FName='".$name."',Salary=".$sal." where FID=".$id."";
mysqli_query($con,$cmd);
mysqli_close($con);
echo "record update successfully";
?>